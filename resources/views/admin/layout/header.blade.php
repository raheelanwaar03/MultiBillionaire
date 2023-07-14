<!DOCTYPE html>
<html lang="en">

<head>

    <!-- All Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="{{ env('APP_NAME') }}">
    <meta name="robots" content="">
    <meta name="keywords"
        content="bootstrap admin, card, clean, credit card, dashboard template, elegant, invoice, modern, money, transaction, Transfer money, user interface, wallet">
    <meta name="description"
        content="Dompet is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
    <meta property="og:title" content="Dompet - Payment Admin Dashboard Bootstrap Template">
    <meta property="og:description"
        content="Dompet is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
    <meta property="og:image" content="social-image.png') }}">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin/images/favicon.png') }}') }}">

    <title>{{ env('APP_NAME') }} - Admin Dashboard To Controle All Mangement</title>


    <link href="{{ asset('admin/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/vendor/nouislider/nouislider.min.css') }}">
    <!-- Style css -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <div id="main-wrapper">
        <div class="nav-header">
            <a href="{{ route('Admin.Dashbaord') }}" class="brand-logo">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="60px" height="60px">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item">
                                <div class="input-group search-area">
                                    <input type="text" class="form-control" placeholder="Search here...">
                                    <span class="input-group-text"><a href="javascript:void(0)"><i
                                                class="flaticon-381-search-2"></i></a></span>
                                </div>
                            </li>
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-theme-mode p-0" href="javascript:void(0);">
                                    <i id="icon-light" class="fas fa-sun"></i>
                                    <i id="icon-dark" class="fas fa-moon"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <img src="{{ asset('admin/images/profile/pic1.jpg') }}" width="20" alt="">
                            <div class="header-info ms-3">
                                <span class="font-w600 ">Hi,<b>{{ auth()->user()->name }}</b></span>
                                <small class="text-end font-w400">{{ auth()->user()->email }}</small>
                            </div>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="{{ route('Admin.Dashbaord') }}" aria-expanded="false">
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-gear fw-bold"></i>
                            <span class="nav-text">Users</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.All.Users') }}">All Users</a></li>
                            <li><a href="{{ route('Admin.Pending.Users') }}">Pending Users</a></li>
                            <li><a href="{{ route('Admin.Approved.Users') }}">Approved Users</a></li>
                            <li><a href="{{ route('Admin.Rejected.Users') }}">Rejected Users</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-072-printer"></i>
                            <span class="nav-text">Widthraw</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.All.Widthraw') }}">All</a></li>
                            <li><a href="{{ route('Admin.Pending.Widthraw') }}">Pending</a></li>
                            <li><a href="{{ route('Admin.Approved.Widthraw') }}">Approved</a></li>
                            <li><a href="{{ route('Admin.Rejected.Widthraw') }}">Rejected</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-041-graph"></i>
                            <span class="nav-text">Tasks</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.Add.Task') }}">Add Task</a></li>
                            <li><a href="{{ route('Admin.All.Task') }}">All Task</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-086-star"></i>
                            <span class="nav-text">Level</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.Level.Requests.From.Users') }}">Pendings Requests</a></li>
                            <li><a href="{{ route('Admin.Unlock.Users') }}">Unlocked Levels</a></li>
                            <li><a href="{{ route('Admin.All.Rejected.level') }}">Rejected Level Requests</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-045-heart"></i>
                            <span class="nav-text">Luck</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Admin.Add.Luck') }}">Add Details</a></li>
                            <li><a href="{{ route('Admin.All.Luck') }}">All luck Items</a></li>
                            <li><a href="{{ route('Admin.All.Investors') }}">All Investors</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="copyright">
                    <p><strong>{{ env('APP_NAME') }} Admin Dashboard</strong> © 2021 All Rights Reserved</p>
                    <p class="fs-12">Made with <span class="heart"></span> by {{ env('APP_NAME') }}</p>
                </div>
            </div>
        </div>
