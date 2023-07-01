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
                        @if (auth()->user())
                            <h3 class="text-white">{{ auth()->user()->level }}</h3>
                        @else
                            <h3 class="text-white">level 0</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <p>You can widthraw minimum 10$ per day with widthrawal fees of 10%. If your widthraw faild
                                please check your giving details again and your approve widthraw will be in your wallet
                                withing
                                working 20 hrs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="trans-sec container">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card">
                            <div class="card-title text-center">
                                <h2 style="color: #ffdb08">Widthraw Balance</h2>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('User.Widthraw.Request') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for=""><b>Your Account Title</b></label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Enter your account title" style="color: black">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b>Widthraw Amount</b></label>
                                        <input type="number" name="amount" class="form-control"
                                            placeholder="Enter amount you want to widthraw" style="color: black">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b>Wallet Address</b></label>
                                        <input type="text" name="wallet" class="form-control"
                                            placeholder="Enter your Wallet Address" style="color: black">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><b>Security Pin</b></label>
                                        <input type="number" name="pin" class="form-control"
                                            placeholder="Enter your secret pin of 5 digits" style="color: black"
                                            maxlength="5">
                                    </div>
                                    <div class="">
                                        <button class="btn btn-warning text-white btn-block">Request For Widthraw</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
    <!-- Page content end -->
    </div>
    </div>
@endsection
