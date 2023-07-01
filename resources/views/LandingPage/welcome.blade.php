@extends('layouts.app')

@section('content')
    <!-- Page content start -->
    <main class="margin mt-0">

        <div class="dash-balance">
            <div class="d-flex align-items-center mt-30">
                <div class="d-flex flex-grow">
                    <div class="mr-auto">
                        @if (auth()->user())
                            <h1 class="b-val"> ${{ auth()->user()->balance }} </h1>
                            <p class="g-text mb-0">Total Balance</p>
                        @else
                            <h1 class="b-val"> $0.0 </h1>
                            <p class="g-text mb-0">Total Balance</p>
                        @endif

                    </div>
                    <div class="ml-auto align-self-end">
                        <h3 class="text-white">{{ auth()->user()->level }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <section class="trans-sec container">
            <h4 class="title-main mt-0 ">User Dashboard</h4>
            <div class="container">
                <div class="col-sm-12 d-flex justify-content-center align-items-center mb-3">
                    <div class="col-sm-4">
                        <a href="{{ route('User.Widthraw.Page') }}" class="text-decoration-none">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <i class="fa fa-money" aria-hidden="true" style="font-size:35px;color:#FFDB08;"></i>
                                    </div>
                                    <h5 class="text-decoration-none text-center">Widthraw</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ route('User.Finance.Records') }}" class="text-decoration-none">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <i class="fa fa-line-chart" style="font-size:35px;color:#FFDB08;"></i>
                                    </div>
                                    <h5 class="text-decoration-none text-center">Finance Records</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ route('User.Investment.Record') }}" class="text-decoration-none">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <i class="fa fa-building-o" style="font-size:35px;color:#FFDB08;"></i>
                                    </div>
                                    <h5 class="text-decoration-none text-center">Investment record</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 d-flex justify-content-center align-items-center">
                    <div class="col-sm-4">
                        <a href="#" class="text-decoration-none">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <i class="fa fa-unlock" style="font-size:35px;color:#FFDB08;"></i>
                                    </div>
                                    <h5 class="text-decoration-none text-center">Modify Login password</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{ route('User.Change.Pin') }}" class="text-decoration-none">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <i class="fa fa-id-card" style="font-size:35px;color:#FFDB08;"></i>
                                    </div>
                                    <h5 class="text-decoration-none text-center">Modify Security password</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://chat.whatsapp.com/Cr5EheYCyLJ3ZMzouKjon8" target="_blank"
                            class="text-decoration-none">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{ asset('assets/img/whatsUp.png') }}" alt="img" height="40px"
                                            width="40px">
                                    </div>
                                    <h5 class="text-decoration-none text-center">Gruop link</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 d-flex justify-content-center align-items-center mt-3">
                    <div class="col-sm-4">
                        <a href="#" class="text-decoration-none">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <i class="fa fa-user-o" style="font-size:35px;color:#FFDB08;"></i>
                                    </div>

                                    @if (auth()->user())
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <div class="text-center mt-3">
                                                <button type="submit" class="btn btn-warning text-white">Logout</button>
                                            </div>
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}">
                                            <h5 class="text-decoration-none text-center">Login</h5>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
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
