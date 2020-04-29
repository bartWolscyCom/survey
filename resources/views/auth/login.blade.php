@extends('layouts.app')
@section('content')

<div class="container-fluid full-height">
    <div class="row row-height">
        {{-- leftWrapper --}}
        @include('layouts.frame.content.leftWrapper')
        <!-- /content-left-wrapper -->

        <div class="col-lg-6 content-right" id="start">
            <div id="wizard_container">
                <!-- /top-wizard -->

                <h3 class="main_question wizard-header">{{ __('Login') }}</h3>
                <div class="flex-center position-ref full-height">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group terms">
                            <label class="container_check">{{ __('Remember Me') }} <a href="#" data-toggle="modal" data-target="#terms-txt"></a>
                                <input type="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                       <span class="checkmark"></span>
                            </label>
                        </div>

                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                        @endif

                        <div class="form-group mb-0" id="bottom-wizard">
                            <button type="submit" class="submit">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
