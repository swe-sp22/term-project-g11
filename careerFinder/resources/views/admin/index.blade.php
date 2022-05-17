@extends('layout')

@section('title', 'Admin Dashboard')

@section('stylesheets')
<link rel="stylesheet" href="{{ url('css/adminDashboardStyle.css') }}">
@endsection

@section('navLinks')
<a href="{{ route('homePage') }}">back home</a>
@endsection

@section('content')
<section class="container">
    <div class ="heading">
        <h1>Website Statistics</h1>
    </div>
    <div id = "stats">
        <h2 class = "totalCompanies">Number of registered companies: </h2>
        <h2 class = "totalCompanies" id = "no_of_companies">{{ $count }}</h2>
        <button class = "buttons" name = "viewBTN" >View All Companies</button>
        <button class = "buttons" name = "addBTN">Add New Company</button>
    </div>
</section>
@endsection