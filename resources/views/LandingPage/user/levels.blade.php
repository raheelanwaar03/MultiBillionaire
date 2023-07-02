@extends('layouts.app')

@section('content')
    <main class="margin mt-0">

        <div class="dash-balance">
            <div class="dash-content relative">
                <h3 class="w-text">Open Vip Levels</h3>
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
                            <p>Daily Profit: {{ $level->dailyProfit }}$</p> <span>Duration: {{ $level->duration }} Days</span>
                            <h5>Total Profit: {{ $level->totalProfit }}$</h5>
                            <a href="{{ route('User.Unlock.Level',['id'=>$level->id]) }}" class="btn btn-success">Unlock Now</a>
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
