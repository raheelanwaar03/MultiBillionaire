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

            <section class="bal-section container">
                <div class="ref-card c1">
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-grow">
                            <div class="mr-auto">
                                <h1 class="b-val"> $0.0 </h1>
                                <p class="g-text mb-10">Total Referal Earnings</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ref-card c2">
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-grow">
                            <div class="mr-auto">
                                <h1 class="b-val"> $0.0 </h1>
                                <p class="g-text mb-10">Pending Earnings</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ref-card c3 mb-0">
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-grow">
                            <div class="mr-auto">
                                <h1 class="b-val"> $0.0 </h1>
                                <p class="g-text mb-10">Ready to Payout</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container refer mb-5">
                <div id="cont">
                    <div id="content-body">
                        <div class="content-head purp">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-grow">
                                    <div class="mr-auto">
                                        <h3 class="w-text mt-0 mb-0">Refer Fiends & Earn</h3>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="mb-0" style="color:gold">More You refer more you earn</p>
                                            <a href="{{ route('User.All.Members') }}" class="btn btn-danger ml-3">See
                                                Referal
                                                Friends</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ref-content">
                            <h4 class="mt-0">Your Referal Link</h4>
                            <div class="form-row-group relative">
                                <div class="form-row no-padding">
                                    <input type="text" class="form-control"
                                        value="{{ route('register', ['referal' => auth()->user()->email]) }}"
                                        style="color:black" id="myInput" readonly>
                                    <a onclick="copy()" class="ref-copy"><i class="fa fa-copy"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
