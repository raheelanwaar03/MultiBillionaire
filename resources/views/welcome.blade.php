@extends('layouts.app')

@section('content')
        <!-- Page content start -->
        <main class="margin mt-0">

            <div class="dash-balance">
                <div class="d-flex align-items-center mt-30">
                    <div class="d-flex flex-grow">
                        <div class="mr-auto">
                            <h1 class="b-val"> $2,589.50 </h1>
                            <p class="g-text mb-0">Total Balance</p>
                        </div>
                        <div class="ml-auto align-self-end">
                            <a href="profile.html" class="profile-av"><img
                                    src="{{ asset('assets/img/content/avatar/avatar.png') }}"></a>
                        </div>
                    </div>
                </div>

                <div class="services-bulk">
                    <div class="content-row">
                        <div class="serv-item">
                            <a href="#" class="serv-icon"><img src="{{ asset('assets/img/content/icon1.png') }}"
                                    class="mb-5" alt=""></a>
                            <span>Send </span>
                        </div>
                        <div class="serv-item">
                            <a href="#" class="serv-icon"><img src="{{ asset('assets/img/content/icon2.png') }}"
                                    class="mb-5" alt=""></a>
                            <span>Recieve </span>
                        </div>
                        <div class="serv-item">
                            <a href="#" class="serv-icon"><img src="{{ asset('assets/img/content/icon4.png') }}"
                                    class="mb-5" alt=""></a>
                            <span>Loan </span>
                        </div>
                        <div class="serv-item">
                            <a href="#" class="serv-icon"><img src="{{ asset('assets/img/content/icon3.png') }}"
                                    class="mb-5" alt=""></a>
                            <span>Topup </span>
                        </div>
                    </div>
                </div>
            </div>

            <section class="trans-sec container">
                <h4 class="title-main mt-0 ">Recent Transactions</h4>
                <ul class="transaction-list list-unstyled mb-0">
                    <li>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="img-xs" src="{{ asset('assets/img/content/coin1.png') }}" alt="coin image">
                                <div class="ml-10">
                                    <h4 class="coin-name">Bitcoin</h4>
                                    <small class="text-muted">08-24 <span class="ml-10">20.04PM</span></small>
                                </div>
                            </div>
                            <div>
                                <small class="d-block mb-0 txt-green">+0.94853</small>
                                <small class="text-muted d-block">$2,748.94</small>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="img-xs" src="{{ asset('assets/img/content/coin2.png') }}" alt="coin image">
                                <div class="ml-10">
                                    <h4 class="coin-name">Ethereum</h4>
                                    <small class="text-muted">08-24 <span class="ml-10">20.04PM</span></small>
                                </div>
                            </div>
                            <div>
                                <small class="d-block mb-0 txt-green">+1.84993</small>
                                <small class="text-muted d-block">$3,748.94</small>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="img-xs" src="{{ asset('assets/img/content/coin3.png') }}" alt="coin image">
                                <div class="ml-10">
                                    <h4 class="coin-name">Dashcoin</h4>
                                    <small class="text-muted">08-24 <span class="ml-10">20.04PM</span></small>
                                </div>
                            </div>
                            <div>
                                <small class="d-block mb-0 txt-red">-23.84523</small>
                                <small class="text-muted d-block">$1,493.03</small>
                            </div>
                        </div>
                    </li>
                    <li class="mb-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="img-xs" src="{{ asset('assets/img/content/coin4.png') }}" alt="coin image">
                                <div class="ml-10">
                                    <h4 class="coin-name">Ripple</h4>
                                    <small class="text-muted">08-24 <span class="ml-10">20.04PM</span></small>
                                </div>
                            </div>
                            <div>
                                <small class="d-block mb-0 txt-green">+500.347</small>
                                <small class="text-muted d-block">$239.94</small>
                            </div>
                        </div>
                    </li>
                </ul>
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
