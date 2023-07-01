@extends('layouts.app')

@section('content')
    <main class="margin mt-0">
        <div class="dash-balance">
            <div class="dash-content relative">
                <h3 class="w-text">Change Security Pin</h3>
            </div>
        </div>
        <section class="container bal-section">

            <div class="form-row txt-center">
                <div class="profile-image">
                    <img class="avatar-img" alt="User Avatar" src="{{ asset('assets/img/avatar.png') }}" width="100"
                        height="100">
                </div>
            </div>

            <div class="trader-info">
                <h3>Change Login Password</h3>
            </div>
        </section>

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
