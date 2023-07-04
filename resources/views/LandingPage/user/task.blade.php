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
                    <div class="ml-auto align-self-end">
                        <h3 class="text-white">{{ auth()->user()->level }}</h3>
                    </div>
                </div>
            </div>
        </div>

        <section class="container">
            <div class="tab-item">
                <div class="tab-menu fix-width">
                    <a class="menu-item active" href="javascript:void(0);" data-content="pending"
                        style="width: 50%;">Processing</a>
                </div>
                <div class="tab-content pb-5">
                    @foreach ($tasks as $task)
                        <div class="content-item active pb-5" id="{{ $task->status }}">
                            <div class="resources-card-wrapper">
                                <div class="wallet-card mr-10 round">
                                    <div class="flex-column flex-md-row">
                                        <img src="{{ asset('images/' . $task->img) }}" height="120px" width="120px"
                                            alt="">
                                        <h3 class="">For: {{ $task->level }}</h3>
                                        <p class="mb-0 font-weight-medium">Price: {{ $task->price }}$</p>
                                        <p>Success Rate: {{ $task->rate }}%</p>
                                        <a href="{{ route('User.Do.Task', ['id' => $task->id]) }}"
                                            class="btn btn-success">Complete Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
