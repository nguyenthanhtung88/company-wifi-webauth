@extends('layouts.front')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/login_4.css') }}">
@endsection

@section('content')
    <div class="login">
        <div class="login-header">
            <img src="{{ asset('storage/images/framgia-logo-white.png') }}" alt="">
            <h1>{{ trans('app.welcome') }}</h1>
        </div>
        <div class="login-form">
            <form method="post">
                <input type="hidden" name="buttonClicked" size="16" maxlength="15" value="0">
                <input type="hidden" name="redirect_url" size="255" maxlength="255" value="">
                <input type="hidden" name="err_flag" size="16" maxlength="15" value="0">

                <h3>Username:</h3>
                <input type="text" name="username" placeholder="Username" maxlength="63" value=""><br>

                <h3>Password:</h3>
                <input type="Password" name="password" placeholder="Password" maxlength="63" value="">

                <br>
                <input type="button" name="Submit" value="Login" class="login-button" onclick="submitAction();"/>
            </form>
        </div>
    </div>
@endsection
