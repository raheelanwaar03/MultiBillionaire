@extends('layouts.app')

@section('content')
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
                    <div class="">
                        <img src="{{ asset('assets/baner.png') }}" alt="banner" height="100px" width="100px" class="img-responsive">
                    </div>
                    <div class="ml-auto align-self-end">
                        @if (auth()->user())
                            <h3 class="text-white">{{ auth()->user()->level }}</h3>
                        @else
                            <h3 class="text-white">level 0</h3>
                        @endif
                    </div>
                </div>
            </div>

        <section class="bal-section container">
            <div id="content">

                <div id="content-body">
                    <div class="content-head">
                        <div class="d-flex align-items-center">
                            <div class="d-flex flex-grow">
                                <div class="mr-auto">
                                    <p class="mb-0">Total Balance</p>
                                </div>
                                <div class="ml-auto align-self-end">
                                    <h3 class="text-muted mt-0 mb-0">${{ auth()->user()->balance }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-row">
                        <div class="content-col">
                            <img src="{{ asset('assets/img/content/p1.png') }}" class="mb-5" alt="">
                            <span>Invest( ${{ investment() }} )</span>
                        </div>
                        {{-- <div class="content-col">
                            <img src="{{ asset('assets/img/content/p2.png') }}" class="mb-5" alt="">
                            <span>Recieve( $50 )</span>
                        </div> --}}
                        <div class="content-col">
                            <img src="{{ asset('assets/img/content/p3.png') }}" class="mb-5" alt="">
                            <span>Widthraw( ${{ userApprovedBalance() }} )</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container">
            <h4 class="title-main">Recent Widthrawal Transactions</h4>
            <ul class="transaction-list list-unstyled">
                @foreach ($widthraws as $widthraw)
                <li>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img class="img-xs" src="{{ asset('assets/img/content/s2.png') }}" alt="coin image">
                            <div class="ml-10">
                                <h4 class="coin-name">Dollars ${{ $widthraw->amount }}</h4>
                                <small class="text-muted">{{ $widthraw->created_at }}</small>
                            </div>
                        </div>
                        <div>
                            <small class="d-block mb-0 txt-green">{{ $widthraw->status }}</small>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </section>
    </main>
@endsection
