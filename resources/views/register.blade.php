@extends('layouts.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Authentication</h5>
                    <form action="{{ route('register') }}" method="POST" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Name</label>
                            <input type="email" name="name" class="form-control" id="email" placeholder="name"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="email"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password"name="password" class="form-control" id="password" placeholder="password"
                                required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                        <p class="text-center mt-3">Already have an account? <a href="{{ route('login') }}">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
