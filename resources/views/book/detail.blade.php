@extends('layout.master')

@section('title', 'Detail Book Page')

@section('content')
    <div class="container-fluid mt-3">
        <div class="card mb-3">
            <div class="row no-gutters border border-primary">
                <div class="col-md-3">
                    <img src="[LINK]" class="card-img">
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">[TITLE]</h5>
                        <p class="card-text">[CATEGORY]</p>
                        <p class="card-text">[DESCRIPTION]</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
