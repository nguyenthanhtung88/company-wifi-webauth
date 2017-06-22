@extends('layouts.front')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/login_2.css', true) }}">
@endsection

@section('content')
    <div id="clouds">
        <div class="cloud x1"></div>
        <!-- Time for multiple clouds to dance around -->
        <div class="cloud x2"></div>
        <div class="cloud x3"></div>
        <div class="cloud x4"></div>
        <div class="cloud x5"></div>
    </div>

    <div class="container">
        <div id="login">
            <div class="logo">
                <img src="{{ asset('images/framgia-logo-white.png', true) }}">
                <h1>{{ trans('app.welcome') }}</h1>
            </div>
            <form method="post">
                <input type="hidden" name="buttonClicked" size="16" maxlength="15" value="0">
                <input type="hidden" name="redirect_url" size="255" maxlength="255" value="">
                <input type="hidden" name="err_flag" size="16" maxlength="15" value="0">

                <fieldset class="clearfix">
                    <p>
                        <span class="fontawesome-user"></span>
                        <input type="text" name="username" placeholder="Username" maxlength="63" value="" required>
                    </p> <!-- JS because of IE support; better: placeholder="Username" -->
                    <p>
                        <span class="fontawesome-lock"></span>
                        <input type="password" name="password" placeholder="Password" maxlength="63" value="" required>
                    </p> <!-- JS because of IE support; better: placeholder="Password" -->
                    <p>
                        <input type="submit" name="Submit" value="Login" onclick="submitAction();">
                    </p>
                </fieldset>
            </form>
        </div> <!-- end login -->
    </div>
@endsection
