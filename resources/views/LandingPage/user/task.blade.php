@extends('layouts.app')

@section('content')
    <main class="margin mt-0">

        <div class="dash-balance">
            <div class="dash-content relative">
                <h3 class="w-text">Missions</h3>
            </div>
        </div>

        <section class="container">
            <div class="tab-item">
                <div class="tab-menu fix-width">
                    <a class="menu-item active" href="javascript:void(0);" data-content="pending"
                        style="width: 50%;">Processing</a>
                    <a class="menu-item" href="javascript:void(0);" data-content="completed"
                        style="width: 50%;">Completed</a>
                </div>
                <div class="tab-content">
                    <div class="content-item active" id="pending">
                        @foreach ($tasks as $task)
                        <div class="resources-card-wrapper">
                            <div class="wallet-card mr-10 round">
                                <div class="flex-column flex-md-row">
                                    <img src="{{ asset('images/'.$task->img) }}" height="200px" width="200px" alt="">
                                    <h3 class="">For: {{ $task->level }}</h3>
                                    <p class="mb-0 font-weight-medium">Price: {{ $task->price }}$</p>
                                    <p>Success Rate: {{ $task->rate }}%</p>
                                    <a href="#" class="btn btn-success">Complete Now</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="content-item" id="completed">
                        @foreach ($tasks as $task)
                        <div class="resources-card-wrapper">
                            <div class="wallet-card mr-10 round">
                                <div class="flex-column flex-md-row">
                                    <img src="{{ asset('images/'.$task->img) }}" height="200px" width="200px" alt="">
                                    <h3 class="">For: {{ $task->level }}</h3>
                                    <p class="mb-0 font-weight-medium">Price: {{ $task->price }}$</p>
                                    <p>Success Rate: {{ $task->rate }}%</p>
                                    <a href="#" class="btn btn-success">Completed</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
