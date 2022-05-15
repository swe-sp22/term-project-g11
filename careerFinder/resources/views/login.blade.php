@extends('layout')

@section('title', 'Career Finder')

@section('stylesheets')
<link rel="stylesheet" href="{{ url('css/signupStyle.css') }}">
@endsection

@section('navLinks')
<a href="{{ route('homePage') }}">back home</a>
@endsection


@section('content')
<section class="signup">
    <form action="{{ route('login.action') }}" method="POST">
        @csrf
        <h1 class="heading">Login</h1>
        <div class="inputBox">
            <input type="text" name="email">
            <label for="email">email</label>
        </div>
        <div class="inputBox">
            <input type="password" name="password">
            <label for="password">password</label>
        </div>
        <p>Don't have an account? <a href="{{ route('register') }}" class="alignA">register</a>.</p>
        <input type="submit" class="btn" value="sign in">
    </form>
</section>
@endsection