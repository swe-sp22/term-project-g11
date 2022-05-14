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
        <h1 class="heading">Register</h1>
        <div class="inputBox">
            <input type="text" name="name">
            <label for="name">name<span class="requiredF">*</span></label>
        </div>
        <div class="inputBox">
            <input type="text" name="email">
            <label for="email">email<span class="requiredF">*</span></label>
        </div>
        <div class="inputBox">
            <input type="password" name="password">
            <label for="password">password<span class="requiredF">*</span></label>
        </div>
        <div class="inputBox">
            <input type="password" name="confirmpassword">
            <label for="confirmpassword">confirm password<span class="requiredF">*</span></label>
        </div>
        <p>Have an account? <a href="{{ url('/signin') }}" class="alignA">LogIn</a>.</p>
        <input type="submit" class="btn" value="sign up">
    </form>
</section>
@endsection