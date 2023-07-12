@extends('layouts.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Authentication</h5>
                    <form action="{{ route('login') }}" method="POST" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email"
                                placeholder="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password"
                                placeholder="password" required>
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="checkbox" name="remember" id="remember"> Remember me
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <p class="text-center mt-3">Don't have an account? <a href="{{ route('register') }}">Register</a>
                        <p class="text-center mt-3"><a href="{{ route('password.request') }}">Forgot your password?</a></p>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
