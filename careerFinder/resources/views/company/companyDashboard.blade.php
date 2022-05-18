@extends('layout')

@section('title', 'Career Finder')

@section('stylesheets')
<link rel="stylesheet" href="{{ url('css/companyDashboard.css') }}">
@endsection

@section('navLinks')
<a href="{{ route('postJob') }}" class="sign-in">Post Job</a>
@endsection


@section('content')
<section class="company">
    <div class="cbox-container">
        <div class="cbox">
            <div class="cimage">
                <img src="{{ url('images/company.jpg') }}" alt="companyProfile">
            </div>
            <div class="cContent">
                <div class="cicons">
                    <i class="fas fa-user"></i>
                    <i class="fas fa-envelope"></i>
                    <i class="fa fa-bar-chart"></i>
                </div>
                <div class="cinfo">
                    <h3 class="ctitle">{{ $companyName }}</h3>
                    <span class="cpost">Company</span>
                    <h4>{{ $companyEmail }}</h4>
                    <h4>Posted Jobs = {{ $postsCount }}</h4>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection