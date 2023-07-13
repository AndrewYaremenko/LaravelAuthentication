@extends('layouts.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Verification</h5>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('verification.send')}}" method="POST" novalidate>
                        @csrf
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Reset verification link</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
