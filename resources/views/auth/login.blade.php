@extends('layouts.auth')

@section('content')
<div class="ibox-content">
    <form method="POST" class="m-t" role="form" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input id="email" type="email" class="form-control" placeholder="Username" required="" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="password"  type="password" class="form-control" placeholder="Password" required="" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">
            <small>Forgot password?</small>
        </a>
        @endif
        <p class="text-muted text-center">
            <small>Do not have an account?</small>
        </p>
        <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">Create an account</a>
    </form>
    <p class="m-t">
        <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
    </p>
</div>
@endsection
