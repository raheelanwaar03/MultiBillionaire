@extends('layouts.app')

@section('content')
    <main class="margin mt-0">
        <div class="dash-balance">
            <div class="dash-content relative">
                <h3 class="w-text">User Porfile</h3>
            </div>
        </div>
        <section class="container bal-section">

            <div class="form-row txt-center">
                <div class="profile-image">
                    <img class="avatar-img" alt="User Avatar" src="{{ asset('assets/img/avatar.png') }}" width="100"
                        height="100">
                </div>
            </div>

            <div class="trader-info">
                <h3>{{ auth()->user()->name }}</h3>
                <p>Pakistan</p>
                <ul class="trader-info-list list-unstyled">
                    <li>
                        <div class="profile1"></div>
                        <h2>$324</h2>
                        <small class="txt-muted">Invest</small>
                    </li>
                    <li>
                        <div class="profile2"></div>
                        <h2>$70,504</h2>
                        <small class="txt-muted">Receieved</small>
                    </li>
                    <li>
                        <div class="profile3"></div>
                        <h2>$10,283</h2>
                        <small class="txt-muted">Widthraw</small>
                    </li>
                </ul>
            </div>
        </section>

        <section class="container">
            <h4 class="title-main">Account Info</h4>
            <div class="form-row-group with-icons">
                <div class="form-row no-padding">
                    <i class="fa fa-user"></i>
                    <input type="text" name="name" class="form-element" placeholder="Username"
                        value="{{ auth()->user()->name }}">
                </div>
                <div class="form-row no-padding">
                    <i class="fa fa-envelope"></i>
                    <input type="email" name="email" class="form-element" placeholder="Email"
                        value="{{ auth()->user()->email }}">
                </div>
                <div class="form-row no-padding">
                    <i class="fa fa-lock"></i>
                    <input type="number" name="pin" class="form-element" placeholder="Pin"
                        value="{{ auth()->user()->pin }}">
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <p>Copyright © All Right Reserved</p>
            </div>
        </footer>
    </main>
    <!-- Page content end -->
    </div>
    </div>
@endsection
