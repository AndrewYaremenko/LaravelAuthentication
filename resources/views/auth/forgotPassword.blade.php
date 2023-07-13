@extends('layouts.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Password recovery</h5>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        We have emailed your password reset link!
                    </div>   
                    @endif
                    <form action="{{ route('password.request') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email"
                                placeholder="email" value="{{ old('email') }}" required>
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Send reset link</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
