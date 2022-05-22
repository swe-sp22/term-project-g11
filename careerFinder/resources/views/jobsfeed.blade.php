@extends('layout')
 
@section('title', "Job's Feed")
{{--
{{-- styling --}}
{{-- @section('stylesheets')
<link rel="stylesheet" href="{{ url('css/feed.css') }}">

<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
@endsection

@section('navLinks')
<a href="{{ route('homePage') }}">back home</a>
@endsection --}}
@section('stylesheets')
<link rel="stylesheet" href="{{ url('css/signupStyle.css') }}">
@endsection


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- google font icons --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
      <link rel="stylesheet" href="{{ url('css/feed.css') }}">
    <title>Job's Feed</title>
</head>
<body>
    {{-- Header starts --}}
    @section('navLinks')
{{-- <a href="#home">home</a>
<a href="#features">features</a>
<a href="#about">about</a> --}}
@endsection
    {{-- <div class="header">
        <div class="header_left">
            <img src="https://cdn-icons.flaticon.com/png/512/3536/premium/3536505.png?token=exp=1652780516~hmac=dfd3a4b85e8093b33ff8410a2f50b67b" alt="">
            <div class="header_search">
                <i class="material-icons">search</i>
                <input type="text" placeholder="Search">
            </div>
        </div>

        <div class="header_right">
            <div class="headerOption">
                <i class="material-icons headerOption__icon"> home </i>
                <h3>Home</h3>
            </div>
            <div class="headerOption">
                <i class="material-icons headerOption__icon"> people </i>
                <h3>My Network</h3>
            </div>
            <div class="headerOption">
                <i class="material-icons headerOption__icon"> work </i>
                <h3>Jobs</h3>
            </div>
            <div class="headerOption">
                <i class="material-icons headerOption__icon"> chat </i>
                <h3>Messaging</h3>
            </div>
            <div class="headerOption">
                <i class="material-icons headerOption__icon"> notifications </i>
                <h3>Notifications</h3>
            </div>
            <div class="headerOption">
                <i class="material-icons headerOption__icon"> account_circle </i>
                <h3>Me</h3>
            </div>

        </div>
    </div> --}}
    {{-- Header Ends --}}

    {{-- Main body starts --}}
    <div class="body_main">
        {{-- sidebar starts --}}
        <div class="sidebar">
            <div class="sidebar_top">
                <img src="https://as2.ftcdn.net/v2/jpg/03/27/99/07/1000_F_327990761_K0Gmk1n92BqJMTrUPwAnC3o1Q6JZRKyb.jpg" alt="">
                <i class="material-icons sidebar_topAvatar"> account_circle </i> 
                <h2>{{$name}}</h2>
                <h4>{{$email}}</h4>               
            </div>
            <div class="sidebar_stats">
                {{-- <div class="sidebar_stat">
                    <p>Who Viewed You</p>
                    <p class="sidebar_statNumber">
                        2543
                    </p>
                </div>
                <div class="sidebar_stat">
                    <p>Views on post</p>
                    <p class="sidebar_statNumber">
                        2850
                    </p>
                </div> --}}
            </div>

            <div class="sidebar_bottom">
                <p>Recent</p>
                <div class="sidebar_recentItem">
                    <span class="sidebar_hash">#</span>
                    <p>reactjs</p>
                </div>
                <div class="sidebar_recentItem">
                    <span class="sidebar_hash">#</span>
                    <p>Programming</p>
                </div>
                <div class="sidebar_recentItem">
                    <span class="sidebar_hash">#</span>
                    <p>SoftwareEngineering</p>
                </div>
                <div class="sidebar_recentItem">
                    <span class="sidebar_hash">#</span>
                    <p>design</p>
                </div>
                <div class="sidebar_recentItem">
                    <span class="sidebar_hash">#</span>
                    <p>developer</p>
                </div>
            </div>
        </div>
        {{-- sidebar ends --}}

        {{-- Feed Starts --}}
        <div class="feed">
            {{-- <div class="feed_inputContainer">
                <div class="feed_input">
                    <i class="material-icons"> create </i>
                    <form>
                        <input type="text">
                    </form>
                </div>
                <div class="feed_inputOptions">
                    <div class="inputOption">
                        <i style="color: #70b5f9" class="material-icons"> insert_photo </i>
                        <h4>Photo</h4>
                    </div>
                    <div class="inputOption">
                        <i style="color: #e7a33e" class="material-icons"> movie </i>
                        <h4>Video</h4>
                    </div>
                    <div class="inputOption">
                        <i style="color: #c0cbcd" class="material-icons"> event </i>
                        <h4>Event</h4>
                    </div>
                    <div class="inputOption">
                        <i style="color: #7fc15e" class="material-icons"> newspaper </i>
                        <h4>Write Article</h4>
                    </div>
                </div>
            </div> --}}

            {{-- Posts section --}}
            @foreach ($posts as $post)
            <form action="GET" action= "/applyform">
            <div class="post">
                <div class="post_header">
                    <i class="material-icons sidebar_topAvatar"> account_circle </i>
                    <div class="post_info">
                        <h2>{{$post->name}}</h2>
                        <p name="jobName">{{$post->categoryName}}</p>
                    </div>
                </div>
                <div class="post_body">
                        <p>{{$post->jobDescription}}</p>
                </div>
                <div class="feed_inputOptions">
                    {{-- <div class="inputOption">
                        <i style="color: gray" class="material-icons"> thumb_up </i>
                        <h4>Like</h4>
                    </div>
                    <div class="inputOption">
                        <i style="color: gray" class="material-icons"> comment </i>
                        <h4>Comment</h4>
                    </div>
                    <div class="inputOption">
                        <i style="color: gray" class="material-icons"> share </i>
                        <h4>Share</h4>
                    </div> --}}
                    <div class="inputOption">
                        <a href="{{ route('form',$post->jobID) }}" class="btn">Apply</a>
                    </div>
                    
                </div>
            </form>
            </div>
            @endforeach
            {{-- Posts section ends --}}
        </div>
        {{-- Feed Ends --}}
        

        {{-- Widgets Starts --}}

        <div class="widgets">
            <div class="widgets_header">
                <h2>Most in-demand jobs</h2>
                <i class="material-icons"> info </i>
            </div>
            <div class="widgets_article">
                <div class="widgets_articleLeft">
                    <i class="material-icons"> fiber_manual_record </i>
                </div>
                <div class="widgets_articleRight">
                    <h4>Artificial intelligence specialist</h4>
                    <p>Average annual salary: $144,000</p>
                </div>

            </div>
            <div class="widgets_article">
                <div class="widgets_articleLeft">
                    <i class="material-icons"> fiber_manual_record </i>
                </div>
                <div class="widgets_articleRight">
                    <h4>Data science specialist</h4>
                    <p>Average annual salary: $105,000 </p>
                </div>

            </div>
            <div class="widgets_article">
                <div class="widgets_articleLeft">
                    <i class="material-icons"> fiber_manual_record </i>
                </div>
                <div class="widgets_articleRight">
                    <h4>UX designer</h4>
                    <p>Average annual salary: $98,000</p>
                </div>

            </div>
            <div class="widgets_article">
                <div class="widgets_articleLeft">
                    <i class="material-icons"> fiber_manual_record </i>
                </div>
                <div class="widgets_articleRight">
                    <h4>Nurse</h4>
                    <p>Average annual salary: $89,000</p>
                </div>

            </div>
            <div class="widgets_article">
                <div class="widgets_articleLeft">
                    <i class="material-icons"> fiber_manual_record </i>
                </div>
                <div class="widgets_articleRight">
                    <h4>Healthcare supporting staff</h4>
                    <p>Average annual salary: $87,400</p>
                </div>

            </div>
            <div class="widgets_article">
                <div class="widgets_articleLeft">
                    <i class="material-icons"> fiber_manual_record </i>
                </div>
                <div class="widgets_articleRight">
                    <h4>Specialised engineer</h4>
                    <p>Average annual salary: $86,000</p>
                </div>

            </div>
        </div>

        {{-- Widgets Ends --}}
    </div>
    {{-- Main body ends --}}
</body>
</html>
