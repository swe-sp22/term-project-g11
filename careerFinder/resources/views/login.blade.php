@extends('layout')

@section('title', 'Career Finder')

@section('stylesheets')
<link rel="stylesheet" href="{{ url('css/signupStyle.css') }}">
@endsection

@section('navLinks')
<a href="{{ url('/') }}">back home</a>
@endsection


@section('content')
<section class="signup">
    <form action="" method="">
        @csrf
        <h1 class="heading">Log in</h1>
        <div class="inputBox">
            <input type="text" name="email">
            <label for="email">email</label>
        </div>
        <div class="inputBox">
            <input type="password" name="password">
            <label for="password">password</label>
        </div>
        <p>Don't have an account? <a href="{{ url('/signup') }}" class="alignA">register</a>.</p>
        <input type="submit" class="btn" value="sign in">
    </form>
</section>
@endsection