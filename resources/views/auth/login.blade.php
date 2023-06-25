@extends('auth.layout.index')

@section('content')
    <div class="wrapper">
        <div class="wrapper-inline">
            <header>
                <a class="go-back-link" href="{{route('LandingPage')}}"><i class="fa fa-arrow-left"></i></a>
                <h1 class="page-title">LOGIN</h1>
            </header>
            <main>

                <div class="container">
                    <div class="form-divider"></div>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-row-group with-icons">
                            <div class="form-row no-padding">
                                <i class="fa fa-envelope"></i>
                                <input type="email" name="email" class="form-element" placeholder="Your Working Email">
                            </div>
                            <div class="form-row no-padding">
                                <i class="fa fa-lock"></i>
                                <input type="password" name="password" class="form-element" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-row txt-center mt-15">
                            <a href="#" data-loader="show">Forgot password?</a>
                        </div>

                        <div class="form-divider"></div>

                        <div class="form-row">
                            <button type="submit" class="button circle block orange">Login</button>
                        </div>
                    </form>


                    <div class="form-row txt-center mt-15">
                        Don't you have an account yet? <a href="{{ route('register') }}" data-loader="show">Sign Up</a>
                    </div>

                </div>
            </main>
        </div>
    </div>
@endsection
