@extends('layouts.app')


@section('content')
    <main class="margin mt-0">

        <div class="dash-balance">
            <div class="dash-content relative">
                <h3 class="w-text">Try Your Luck</h3>
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
                                    <a onclick="copy()" class="ref-copy pr-4" style="border-radius:10px;"><i class="fa fa-copy"></i></a>
                                </div>
                            </div>
                            <img src="{{ asset('assets/img/content/qr.png') }}" alt="" class="mt-15">
                            <h4>You have to pay {{$luck->price}}$ for participate in this campaign.</h4>
                            <p class="g-text mb-0">Enter TRX Id and Screen shot of the payment you have sended for {{ $luck->title }}</p>
                        </div>
                    </div>
                    <div class="card active">
                        <div class="card-title">
                            <h4 class="text-center">Enter Details and Submit</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('User.Lucky.Investors',['id'=>$luck->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-gorup">
                                    <label for="">TRX ID</label>
                                    <input type="text" name="trx_id" class="form-control" style="color:black;"
                                        placeholder="Enter Transcation ID">
                                </div>
                                <div class="form-gorup">
                                    <label for="">Image</label>
                                    <input type="file" name="image" class="form-control" style="color:black;">
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
