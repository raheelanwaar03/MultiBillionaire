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
        <section class="container">
            <div class="form-row-group with-icons">
                <form action="{{ route('User.Update.Pin') }}" method="POST">
                    @csrf
                    <div class="form-row no-padding">
                        <i class="fa fa-lock"></i>
                        <input type="number" name="oldPin" class="form-element" placeholder="Old Pin">
                    </div>
                    <div class="form-row no-padding">
                        <i class="fa fa-lock"></i>
                        <input type="number" name="newPin" class="form-element" placeholder="New Pin">
                    </div>
                    <div class="form-row no-padding">
                        <i class="fa fa-lock"></i>
                        <input type="number" name="pin_confirmation" class="form-element" placeholder="Confirm New Pin">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-success">Change Pin</button>
                    </div>
                </form>
            </div>
        </section>
        <footer>
            <div class="container">
            </div>
        </footer>
    </main>
    <!-- Page content end -->
    </div>
    </div>
@endsection
