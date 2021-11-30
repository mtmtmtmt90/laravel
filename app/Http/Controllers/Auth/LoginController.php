<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        // $this->middleware('guest')->except('logout');
        if (User::where('email', $request->email)->exists()) {
            $user = User::get()->where('email', $request->email);
        } else {
            session::flash('warning', 'Incorrect email or password, please try again!');
            return redirect()->back()->send();
        }
        if (Hash::check($request->password, $user[0]->password))
        {
            dd('find');
        } else {
            session::flash('warning', 'Incorrect email or password, please try again!');
            return redirect()->back()->send();
        }
    }
}
