@extends('layout')

@section('title', 'Admin Dashboard')

@section('stylesheets')
<link rel="stylesheet" href="{{ url('css/signupStyle.css') }}">
@endsection


@section('navLinks')
<a href="{{ route('homePage') }}">back home</a>
@endsection

@section('content')
<section class="adminSection">
    <h1>I AM ADMIN</h1>
</section>
@endsection