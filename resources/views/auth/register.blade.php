@extends('layouts.auth')

@section('content')
<div class="ibox-content">
    <form method="POST" class="m-t" role="form" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <input id="name" type="text" class="form-control" placeholder="Name" required="" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="email" type="email" class="form-control" placeholder="Email" required="" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="password" type="password" class="form-control" placeholder="Password" required="" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <input  id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" required=""  name="password_confirmation" required autocomplete="new-password" >

        </div>
        <button type="submit" class="btn btn-primary block full-width m-b">{{ __('Register') }}</button>

        <p class="text-muted text-center">
            <small>Alreday have an account?</small>
        </p>
        <a class="btn btn-sm btn-white btn-block" href="{{ route('login') }}">Login</a>
    </form>
    <p class="m-t">
        <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
    </p>
</div
@endsection
