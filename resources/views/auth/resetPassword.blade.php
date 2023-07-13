@extends('layouts.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Change Password</h5>
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{ request('token') }}">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email"
                                placeholder="email" value="{{ old('email', request('email')) }}" required>
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
                            <label for="password" class="form-label">Confirm password</label>
                            <input type="password" name="password_confirmation"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                id="confirm_password" placeholder="сonfirm password" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Save password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
