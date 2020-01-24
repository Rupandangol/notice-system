@extends('Backend.master')
@section('content')
    <h1>Dashboard</h1>
    <div class="row">
        <div class="col-md-3">
            <div class="card" style="">
                <div class="card-body">
                    <h5 class="card-title">Total Admins</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{count($admin)}}</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="">
                <div class="card-body">
                    <h5 class="card-title">Total Cadidates</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{count($student)}}</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
@endsection
