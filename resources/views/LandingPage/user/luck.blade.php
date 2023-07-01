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
            <h4 class="title-main mt-0 ">Luck</h4>
            <div class="container">
                <div class="col-sm-12 d-flex justify-content-center align-items-center mb-3">
                    @foreach ($lucks as $luck)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('images/'. $luck->image)}}" alt="image cap">
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text">Try Your Luck and win exiciting prizes.</p>
                        </div>
                        <div class="card-body">
                          <a href="#" class="card-link">Card link</a>
                        </div>
                      </div>
                        {{-- <div class="col-sm-4">
                            <a href="#" class="text-decoration-none">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="{{ asset('images/' . $luck->image) }}" alt="image"
                                                class="img-responsive" height="100px" width="100px">
                                        </div>
                                        <h5 class="text-decoration-none text-center">{{ $luck->title }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                    @endforeach
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <ul>
                </ul>
                <p>Copyright © All Right Reserved</p>
            </div>
        </footer>
    </main>
    <!-- Page content end -->
    </div>
    </div>
@endsection
