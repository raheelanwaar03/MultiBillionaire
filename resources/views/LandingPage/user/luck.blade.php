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

        <section class="trans-sec container mb-5">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="title-main mt-0 ">Luck</h4>
                @if ($luck->created_at->diffInDays($currentDate) >= 30)
                <a href="{{ route('User.See.Winer') }}" class="btn btn-warning text-white">See Winner</a>
                @else
                <p>Winner will annouce after 30 days</p>
                @endif
                <h4 class="title-main mt-0 ">Total Pariticipated: {{ participated() }}</h4>
            </div>
            <div class="container mb-5 mt-3">
                <div class="col-sm-12 d-flex justify-content-center align-items-center mb-5">
                    @foreach ($lucks as $luck)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('images/' . $luck->image) }}" height="120px"
                                alt="image cap">
                            <div class="card-body">
                                <h3 class="card-title">{{ $luck->title }}</h3>
                                <h4>Price: {{ $luck->price }}</h4>
                                <p class="card-text">Try Your Luck and win exiciting prizes.</p>
                            </div>
                            <div class="card-body" style="margin-top: -30px">
                                <h3>
                                    <a href="{{ route('User.Try.Luck', ['id' => $luck->id]) }}"
                                        class="btn btn-warning text-white">Try it now</a>
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    <!-- Page content end -->
    </div>
    </div>
@endsection
