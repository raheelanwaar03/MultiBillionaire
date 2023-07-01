@extends('layouts.app')

@section('content')
    <main class="margin mt-0">
        <div class="dash-balance">
            <div class="dash-content relative">
                <h3 class="w-text">Change Login Password</h3>
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
                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <x-input-label for="current_password" :value="__('Current Password')" />
                        <x-text-input id="current_password" class="form-control" name="current_password" type="password"
                            class="mt-1 block w-full" autocomplete="current-password" />
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>

                    <div class="form-group">
                        <x-input-label for="password" :value="__('New Password')" />
                        <x-text-input id="password" class="form-control" name="password" type="password"
                            class="mt-1 block w-full" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                    </div>

                    <div class="form-group">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" class="form-control" name="password_confirmation"
                            type="password" class="mt-1 block w-full" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button class="btn btn-warning">{{ __('Save') }}</x-primary-button>

                        @if (session('status') === 'password-updated')
                            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                        @endif
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
