@extends('layouts.app')

@section('content')
    <!-- Page content start -->
    <main class="margin mt-0">

        <div class="dash-balance">
            <div class="d-flex align-items-center mt-30">
                <div class="d-flex flex-grow">
                    <div class="mr-auto">
                        <h1 class="b-val">${{ auth()->user()->balance }}</h1>
                        <p class="g-text mb-0">Total Balance</p>
                    </div>
                    <div class="ml-auto align-self-end">
                        <a href="#" class="profile-av"><img
                                src="{{ asset('assets/img/content/avatar/avatar.png') }}"></a>
                    </div>
                </div>
            </div>
        </div>

        <section class="trans-sec container">
            <div class="container">
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