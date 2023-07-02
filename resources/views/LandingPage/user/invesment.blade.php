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

        <section class="trans-sec container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="title-main mt-0 ">Recent Transactions</h4>
                <a href="{{ route('User.Vip.Levels') }}" class="btn btn-warning text-white">Invest More</a>
            </div>
            <ul class="transaction-list list-unstyled mb-0">
                @foreach ($records as $record)
                    <li>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="img-xs" src="{{ asset('assets/img/vip.jpg') }}" alt="coin image">
                                <div class="ml-10">
                                    <h4 class="coin-name">{{ $record->level }}</h4>
                                    <small class="text-muted">{{ $record->created_at }}</small>
                                </div>
                            </div>
                            <div>
                                <small class="d-block mb-0 txt-green">{{ $record->status }}</small>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </section>
        <div class="clearfix"></div>
    </main>
    <!-- Page content end -->
    </div>
    </div>
@endsection
