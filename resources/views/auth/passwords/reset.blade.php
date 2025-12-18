@extends('layouts.web')

@section('content')
<section class="">
    <div class="container mx-auto px-4 py-6">
        <div class="flex flex-col space-y-4   my-2 md:my-0 lg:flex-row lg:mx-4">
            <div class="panel w-full sm:w-[70%] lg:w-[35%] mx-auto py-5 ">
                <form action="{{ route('password.update') }}" method="POST"
                    class="form-style bg-white shadow-md rounded-lg px-4 pt-2 pb-6 flex flex-col w-full space-y-2">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="bg-gradient2 py-2 rounded-t-lg text-white">
                        <p class="text-3xl text-center text-white font-semibold">
                            {{ trans('global.reset_password') }}
                        </p>
                    </div>

                    <div class="mb-2">

                        <input id="email" type="email" placeholder="{{ trans('global.login_email') }}"
                            class="form-control form-input @error('email') is-invalid @enderror" name="email"
                            value="{{ $email ?? old('email') }}" required autocomplete="email" readonly autofocus>
                        @error('email')
                            <span class="text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                    </div>


                    <div class="mb-2">

                        <input id="password" type="password" placeholder="{{ trans('global.login_password') }}"
                            class=" form-input @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">
                        @error('password')
                            <span class="text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div>
                        <input id="password-confirm" type="password" placeholder="{{ trans('global.confirm_password') }}"
                            class="form-input" name="password_confirmation" required autocomplete="new-password">
                    </div>



                    <button type="submit" class="btn btn-primary btn-block btn-flat">
                        {{ __('Reset Password') }}
                    </button>


                </form>

            </div>
        </div>
    </div>
</section>
@endsection

