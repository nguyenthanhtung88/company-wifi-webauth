@extends('layouts.front')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/login_3.css', true) }}">
@endsection

@section('content')
    <hgroup>
        <img src="{{ asset('images/framgia-logo-white.png', true) }}" alt="">
        <h1>{{ trans('app.welcome') }}</h1>
    </hgroup>

    <form method="post">
        <input type="hidden" name="buttonClicked" size="16" maxlength="15" value="0"/>
        <input type="hidden" name="redirect_url" size="255" maxlength="255" value=""/>
        <input type="hidden" name="err_flag" size="16" maxlength="15" value="0"/>

        <div class="group">
            <input type="text" name="username" maxlength="63" value="" required="required"/>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Username</label>
        </div>

        <div class="group">
            <input type="password" name="password" maxlength="63" value="" required="required"/>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Password</label>
        </div>

        <input type="button" name="Submit" value="Login" class="button buttonBlue" onclick="submitAction();"/>
    </form>

    <script src="{{ asset('js/jquery.min.js', true) }}"></script>
    <script src="{{ asset('js/login_3.js', true) }}"></script>
@endsection
