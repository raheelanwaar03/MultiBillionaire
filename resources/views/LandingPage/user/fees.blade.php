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

            <section class="wallets-list container">
                <h4 class="title-main">Cryptocoins Wallets</h4>
                <!--expendable list item -->
                <div class="expandable-item accordion active" data-group="accordion1">
                    <div class="expandable-header purp">
                        <i class="cc BTC-alt"></i>
                        <h3 class="list-title">Bitcoin Wallet</h3>
                        <i class="list-arrow fa fa-angle-down"></i>
                    </div>
                    <div class="expandable-content">
                        <div class="padding-content">
                            <div class="wallet-address">
                                <h4 class="w-text mt-0">Bitcoin Wallet Address</h4>
                                <div class="form-row-group with-icons">
                                    <div class="form-row no-padding">
                                        <i class="cc BTC text-muted"></i>
                                        {{-- <input type="text" class="form-control"
                                    value="{{ route('register', ['referal' => Auth::user()->email]) }}" id="myInput"
                                    readonly> --}}
                                        <input type="text" name="aaa" id="myInput" class="form-element"
                                            value="TGMWTRrTDc7LjQe6gFzu1gtNENsbgRRvF4" readonly>
                                        <a onclick="copy()" class="ref-copy pr-4" style="border-radius:10px;"><i
                                                class="fa fa-copy"></i></a>
                                    </div>
                                </div>
                                <img src="{{ asset('assets/img/content/qr.jpeg') }}" alt="" class="mt-15">
                                <h4>You have to pay {{ $level->invest }}$ for unlock {{ $level->level }}</h4>
                                <p class="g-text mb-0">Enter TRX Id and Screen shot of the payment you have sended for
                                    unlocking {{ $level->level }}</p>
                            </div>
                        </div>
                        <div class="card active">
                            <div class="card-title">
                                <h4 class="text-center">Enter Details and Submit</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('User.Level.Fees', ['id' => $level->id]) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-gorup">
                                        <label for="">TRX ID</label>
                                        <input type="text" name="trxId" class="form-control" style="color:black;"
                                            placeholder="Enter Transcation ID">
                                    </div>
                                    <div class="form-gorup">
                                        <label for="">Image</label>
                                        <input type="file" name="img" class="form-control" style="color:black;">
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
                <footer>
                    <div class="container">
                        <p>Copyright © All Right Reserved</p>
                    </div>
                </footer>
    </main>

    <script>
        function copy() {
            // Get the text field
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);
            // Alert the copied text
            alert("Copied the text: " + copyText.value);
        }
    </script>
@endsection
