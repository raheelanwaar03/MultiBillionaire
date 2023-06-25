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
                        <a href="#" class="profile-av"><img
                                src="{{ asset('assets/img/content/avatar/avatar.png') }}"></a>
                    </div>
                </div>
            </div>
        </div>

        <section class="trans-sec container">
            <h4 class="title-main mt-0 ">Recent Transactions</h4>
            <ul class="transaction-list list-unstyled mb-0">
                @foreach ($users as $user)
                    <li>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <img class="img-xs" src="{{ asset('assets/img/avatar.png') }}" alt="coin image">
                                <div class="ml-10">
                                    <h4 class="coin-name">{{ $user->name }}</h4>
                                    <small class="text-muted">{{ $user->created_at }}</small>
                                </div>
                            </div>
                            <div>
                                <small class="d-block mb-0 txt-green">{{ $user->status }}</small>
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
