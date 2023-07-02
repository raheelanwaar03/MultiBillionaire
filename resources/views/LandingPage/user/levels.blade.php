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
                        <img src="{{ asset('assets/baner.png') }}" alt="banner" height="100px" width="100px"
                            class="img-responsive">
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
            <div class="container mb-5">
                <section class="bal-section container">
                    @foreach ($levels as $level)
                        <div class="resources-card-wrapper">
                            <div class="wallet-card mr-10 round">
                                <div class="flex-column flex-md-row">
                                    <img src="{{ asset('assets/img/vip.jpg') }}" class="max50" alt="">
                                    <h3 class="">Level {{ $level->level }}</h3>
                                    <p class="mb-0 font-weight-medium">Invest: {{ $level->invest }}$</p>
                                    <p>Daily Profit: {{ $level->dailyProfit }}$</p> <span>Duration: {{ $level->duration }}
                                        Days</span>
                                    <h5>Total Profit: {{ $level->totalProfit }}$</h5>
                                    <a href="{{ route('User.Unlock.Level', ['id' => $level->id]) }}"
                                        class="btn btn-success">Unlock Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>
            </div>
            <footer>
                <div class="container">
                    <p>Copyright © All Right Reserved</p>
                </div>
            </footer>
    </main>
@endsection
