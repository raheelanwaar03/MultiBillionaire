@extends('auth.layout.index')

@section('content')
    <div class="wrapper">
        <div class="wrapper-inline">
            <header>
                <a class="go-back-link" href="#"><i class="fa fa-arrow-left"></i></a>
                <h1 class="page-title">REGISTER</h1>
            </header>
            <main>

                <div class="container">
                    <div class="form-divider"></div>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-row-group with-icons">
                            <div class="form-row no-padding">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="name" class="form-element" placeholder="Enter Your Name">
                            </div>
                            <div class="form-row no-padding">
                                <i class="fa fa-envelope"></i>
                                <input type="email" name="email" class="form-element" placeholder="Your Working Email">
                            </div>
                            <div class="form-row no-padding">
                                <i class="fa fa-lock"></i>
                                <input type="password" name="password" class="form-element"
                                    placeholder="Enter A Secure Password">
                            </div>
                            <div class="form-row no-padding">
                                <i class="fa fa-lock"></i>
                                <input type="password" name="password_confirmation" class="form-element"
                                    placeholder="Confirm Your Password">
                            </div>
                        </div>
                        <div class="form-divider"></div>

                        <div class="form-row">
                            <button type="submit" class="button circle block orange">Register</button>
                        </div>
                    </form>


                    <div class="form-row txt-center mt-15">
                        Don't you have an account yet? <a href="{{ route('login') }}" data-loader="show">Login</a>
                    </div>

                </div>
            </main>
        </div>
    </div>
@endsection
