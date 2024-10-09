<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel Auth') }}</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <div class="my-dasboard-created-by-josephat-ndunguru">

        <div id="side-navigation" class="side-navigation">

            <div class="top-side-navigation">
                <div class="head-dashboard">
                    <p class="logo"><i class="fa fa-th-large" aria-hidden="true"></i>{{ Auth::user()->name }}</p>
                </div>
                <div class="side-bar-menus">
                    <li class="dashboard-"><a href="{{ route('dashboard') }}"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a></li>
                    <li><a href="{{ route('messages') }}"><i class="fa fa-comments" aria-hidden="true"></i>Messages</a></li>
                    <li><a href="{{ route('users') }}"><i class="fa fa-users" aria-hidden="true"></i>Users</a></li>
                    <li><a href="{{ route('subscribers') }}"><i class="fa fa-envelope-open" aria-hidden="true"></i>Subscribers</a></li>
                    <li><a href="{{ route('posts') }}"><i class="fa fa-clipboard" aria-hidden="true"></i>Posts</a></li>               
                </div>
            </div>
            <div class="user-setting">
                <li class="tools-">User tools</li>
                <li><a href="{{ route('adminprofile') }}"><i class="fa fa-user" aria-hidden="true"></i>Profile</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        
                        <button type="submit" style="border: none; background: none;">
                            <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                        </button>

                    </form>
                </li>
            </div>

        </div>

        <div class="main-dashboard-contents">

            <div class="main-dashboard-pannel-top">
                <div class="pannel-navigation-left">
                    <p>Pages/ <span>Dashboard</span></p>
                    <h4>Dashboard</h4>
                </div>
                <div class="pannel-navigation-right">
                    <div class="search-input"><img src="{{ asset('assets/images/search-interface-symbol.png') }}" alt=""><input type="search" name="search" id="search-input-text" placeholder="Search..."></div>
                    <div class="user-avatar">
                        <img src="" alt="">
                        <img src="{{ asset('assets/images/user.png') }}" alt="User" class="user-icon">
                    </div>
                    <div class="notification">
                        <img onclick="myFunction()" class="notification-btn" src="{{ asset('assets/images/notification.png') }}" alt="">
                        <div id="notifys" class="notification-contents">
                            <a href="">
                                <div class="notifys-contents">
                                    <div class="image-notifys" style="padding: 12px;"><img src="user.png" alt=""></div>
                                    <div class="notification-date">
                                        <h5 class="" style="font-size: 12px;"><span>Joe Moses |</span> 7, May 2014 | 16:47 PM</h5>
                                        <P style="font-size: 10px;">Lorem, ipsum dolor sit amet consectetur! Quis recusandae deserunt qu...</P>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="media-btn">
                    <img src="{{ asset('assets/images/menu.png') }}" alt="" id="menu-icon">
                </div>
            </div>

            <div class="below-dashboard-pannel-top">

                <div class="pannel-contents-below">
                    <div class="left-pannel-cont">
                        <h4 class="pannel-cont-head">Current Subscribers</h4>
                        <p class="pannel-cont-desc">1,200 <span>+23%</span></p>
                    </div>
                    <img src="{{ asset('assets/images/customer-location.png') }}" alt="">
                </div>
                <div class="pannel-contents-below">
                    <div class="left-pannel-cont">
                        <h4 class="pannel-cont-head">Today's Visits</h4>
                        <p class="pannel-cont-desc">1,200 <span>+23%</span></p>
                    </div>
                    <img src="{{ asset('assets/images/database.png') }}" alt="">
                </div>
                <div class="pannel-contents-below">
                    <div class="left-pannel-cont">
                        <h4 class="pannel-cont-head">Popular Posts</h4>
                        <p class="pannel-cont-desc">1,200 <span>+23%</span></p>
                    </div>
                    <img src="{{ asset('assets/images/bookmark (2).png') }}" alt="">
                </div>
                <div class="pannel-contents-below">
                    <div class="left-pannel-cont">
                        <h4 class="pannel-cont-head">Online Ads</h4>
                        <p class="pannel-cont-desc">1,200 <span>+23%</span></p>
                    </div>
                    <img src="{{ asset('assets/images/media.png') }}" alt="">
                </div>

            </div>

