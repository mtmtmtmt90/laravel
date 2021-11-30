@extends('base', ['file' => 'sign'])

@section('content')
<style>
    .container-name{
        text-align:center;
        margin-top:50px;
        font-size:50px;
    }
    .input-area{
        margin:10px auto;
        width:300px;
        height:30px;
        padding:5px;
        font-size:17px;
        border-radius:5px;
        offset:none;
    }
    .input-area:focus{
        outline-color:blue;
        box-shadow:0px 0px 10px blue;
        transition-duration:0.3s;
    }
    .btn-area{
        background-color:blue;
        color:white;
        text-align:center;
        font-size:17px;
        padding:10px 30px;
        letter-spacing:2px;
        border:none;
        outline:none;
        offset:none;
        border-radius:5px;
        cursor:pointer;
        box-shadow:3px 1px 10px blue;
        margin-bottom:30px;
    }
    .btn-area:active{
        opacity:0.5;
    }
    .gotoReg{
        font-size:20px;
        border:1px solid lightgrey;
        padding:5px 10px;
        color:rgb(50, 50, 50);
        text-decoration-thickness:1px;
    }
</style>
<form action=" {{ route('register') }} " method="POST"> @csrf
    <div class="container-name">Sign Up</div><br>
    <div style="text-align:center">
        <input type="text" name="name" class="input-area" placeholder="Name..." required><br>
        <input type="email" name="email" class="input-area" placeholder="Email..." required><br>
        <input type="password" name="password" class="input-area" placeholder="Password..." required><br>
        <button class="btn-area" type="submit">Confirm</button><br>
        <a href="{{ route('signIn') }}" class="gotoReg">or Sign in</a>
    </div>
</form>
@endsection