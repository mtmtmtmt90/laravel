<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Hash;

use Illuminate\Support\Facades\Auth;

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
    public $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('index')->send();
        } else {
            session::flash('warning', 'Incorrect email or password, please try again!');
            return redirect()->back()->send();
        }
        /*
        // $this->middleware('guest')->except('logout');
        if (User::where('email', $request->email)->exists()) {
            $user = User::get()->where('email', $request->email);
        } else {
            session::flash('warning', 'Incorrect email or password, please try again!');
            return redirect()->back()->send();
        }
        if (Hash::check($request->password, $user[0]->password))
        {
            return redirect()->route('index')->send();
        } else {
            session::flash('warning', 'Incorrect email or password, please try again!');
            return redirect()->back()->send();
        }
        */
    }

    public function logout(){
        Auth::logout();
    }
}
