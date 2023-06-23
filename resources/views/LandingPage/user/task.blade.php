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
                    <a class="menu-item active" href="javascript:void(0);" data-content="pending" style="width: 50%;">Processing</a>
                    <a class="menu-item" href="javascript:void(0);" data-content="completed" style="width: 50%;">Completed</a>
                </div>
                <div class="tab-content">
                    <div class="content-item active" id="pending">
                        <section class="mt-15 mb-15 container">
                            <div class="coin-box">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="img-xs" src="img/content/coin2.png" alt="coin image">
                                        <div class="ml-10">
                                            <h3 class="coin-name">Ethereum</h3>
                                            <small class="text-muted">$55,532,854</small>
                                        </div>
                                    </div>
                                    <div>
                                        <small class="d-block mb-0 txt-green"><i
                                                class="txt-green fa fa-arrow-up mr-10 mb-5"></i>$1,013</small>
                                        <small class="text-muted d-block">increase 7.96%</small>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="content-item" id="completed">
                        <section class="mt-15 mb-15 container">
                            <div class="coin-box">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img class="img-xs" src="img/content/coin2.png" alt="coin image">
                                        <div class="ml-10">
                                            <h3 class="coin-name">completed</h3>
                                            <small class="text-muted">$55,532,854</small>
                                        </div>
                                    </div>
                                    <div>
                                        <small class="d-block mb-0 txt-green"><i
                                                class="txt-green fa fa-arrow-up mr-10 mb-5"></i>$1,013</small>
                                        <small class="text-muted d-block">increase 7.96%</small>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
