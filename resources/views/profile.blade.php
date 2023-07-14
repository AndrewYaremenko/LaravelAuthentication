@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">{{ request()->user()->name }}</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ request()->user()->email }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
