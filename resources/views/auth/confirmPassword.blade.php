@extends('layouts.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Confirm Password</h5>
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{ request('token') }}">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password"
                                placeholder="password" required>
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Confirm password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
