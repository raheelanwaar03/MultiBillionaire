@extends('layouts.app')

@section('content')
    <main class="margin mt-0">

        <div class="dash-balance">
            <div class="dash-content relative">
                <h3 class="w-text">Affiliate System</h3>
            </div>
        </div>

        <section class="bal-section container">
            <div class="ref-card c1">
                <div class="d-flex align-items-center">
                    <div class="d-flex flex-grow">
                        <div class="mr-auto">
                            <h1 class="b-val"> $1,249.03 </h1>
                            <p class="g-text mb-10">Total Referal Earnings</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ref-card c2">
                <div class="d-flex align-items-center">
                    <div class="d-flex flex-grow">
                        <div class="mr-auto">
                            <h1 class="b-val"> $336,32 </h1>
                            <p class="g-text mb-10">Pending Earnings</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ref-card c3 mb-0">
                <div class="d-flex align-items-center">
                    <div class="d-flex flex-grow">
                        <div class="mr-auto">
                            <h1 class="b-val"> $1,249.03 </h1>
                            <p class="g-text mb-10">Ready to Payout</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container refer mt-15">
            <div id="cont">

                <div id="content-body">
                    <div class="content-head purp">
                        <div class="d-flex align-items-center">
                            <div class="d-flex flex-grow">
                                <div class="mr-auto">
                                    <h3 class="w-text mt-0 mb-0">Refer Fiends & Earn</h3>
                                    <p class="mb-0" style="color:gold">More You refer more you earn</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ref-content">
                        <h4 class="mt-0">Your Referal Link</h4>
                        <div class="form-row-group relative">
                            <div class="form-row no-padding">
                                <input type="text" name="aaa" class="form-element"
                                    value="{{ route('register', ['referal' => Auth::user()->email]) }}" id="myInput">
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
