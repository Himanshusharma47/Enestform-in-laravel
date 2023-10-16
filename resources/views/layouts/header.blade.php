<!DOCTYPE html>
<html>
<head>
	<title>
         @stack('title')
    </title>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="main-div">
		<div class="head-div">
            <div class="main">
                <div class="head">
                    <span>EVEST</span>
                    <p>THE BIGGEST CHOICE OF THE WEB</p>
                </div>
                <div class="btn">
                    @if (Auth::check())
                        <!-- Show the "Logout" button when the user is authenticated -->
                        @if (session()->has('username'))
                        <a href="{{ route('logout') }}">
                            <input type="button" value="Logout ({{ session('username') }})">
                        </a>
                        @else
                            <a href="{{ route('logout') }}">
                                <input type="button" value="Logout">
                            </a>
                        @endif
                    @else
                        <!-- Show the "Login" button when the user is not authenticated -->
                        <a href="{{ url('login-form') }}">
                            <input type="button" value="Log In">
                        </a>
                    @endif
                </div>
            </div>
        </div>
        <div class="home-page">
            <div class="pagnation">
                <div class="list">
                    <ul>
                        <li><a href="index5.php">HOME</a></li>
                        <li>NEW PROJECT</li>
                        <li>SPECIAL</li>
                        <li>ALL PRODUCTS</li>
                        <li>REVIEWS</li>
                        <li><a href="index.php">CONTACT</a></li>
                        <li>FAQS</li>
                    </ul>
                </div>
                <div class="search">
                    <div class="search-1">
                        <div class="input">
                            <input type="text" name="">
                        </div>
                        <div class="btnn">
                            <input type="button" name="" value="Search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="null">
        </div>

		<div class="main-categorious">
