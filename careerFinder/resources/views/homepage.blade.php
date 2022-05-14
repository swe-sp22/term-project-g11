@extends('layout')

@section('title', 'Career Finder')

@section('stylesheets')
<link rel="stylesheet" href="{{ url('css/homeStyle.css') }}">
@endsection

@section('navLinks')
<a href="#home">home</a>
<a href="#features">features</a>
<a href="#about">about</a>
@endsection


@section('content')
<!--home section-->
<section class="home" id="home">
    <div class="content">
        <h3>your dream job <span>is waiting</span></h3>
        <p>find jobs, employment & career opportunities</p>
        <a href="#" class="btn">search now</a>
    </div>
    <div class="image">
        <img src="{{ url('images/home.png') }}" alt="home page image">
    </div>
</section>
<!--features section-->
<section class="features" id="features">
    <h1 class="heading">career finder features</h1>
    <div class="box-container">
        <div class="box">
            <img src="{{ url('images/feature1.png') }}" alt="feature1">
            <h3>Easy apply to jobs</h3>
        </div>
        <div class="box">
            <img src="{{ url('images/feature2.png') }}" alt="feature2">
            <h3>search by category</h3>
        </div>
        <div class="box">
            <img src="{{ url('images/feature3.jpg') }}" alt="feature3">
            <h3>find different opportunities</h3>
        </div>
    </div>
</section>
<!--about section-->
<section class="about" id="about">
    <h1 class="heading">about us</h1>
    <div class="column">
        <div class="image">
            <img src="{{ url('images/about.png') }}" alt="about us">
        </div>
        <div class="content">
            <h3>easy and perfect solution for finding your dream job</h3>
            <p>Offer job seekers to find the exact employment they desire.</p>
        </div>
    </div>
</section>
@endsection