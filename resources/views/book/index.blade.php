@extends('layout.master')

@section('title', 'Book Page')

@section('content')
    <div class="container-fluid mt-3">
        <div class="alert alert-danger mt-3">
            <strong>There is no available book in the library</strong>
        </div>
        <div class="text-right">
            <a href="{{ url('/book/create') }}">
                <button class="btn btn-primary">Create Book</button>
            </a>
        </div>
        <form class="form-inline">
            <label class="sr-only" for="inlineFormInputName2">Search</label>
            <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Search book name">
            <button type="submit" class="btn btn-primary mb-2">Search</button>
        </form>
        <div class="row p-2">
            {{-- LOOP LIST OF BOOK HERE --}}
            <div class="col-md-3 mb-2 pl-1 pr-1">
                <div class="card border-primary">
                    <div class="card">
                        <img src="[LINK]" class="card-img-top" height="300px;">
                        <div class="card-body">
                            <h5 class="card-title" style="min-height: 50px;">[NAME]</h5>
                            <p class="card-text">Category:<br><strong>[CATEGORY]</strong></p>
                        </div>
                        <div class="card-footer">
                            <div class="mb-2">
                                <form class="d-inline" action="{{ url("book/edit/{id}") }}">
                                    <button class="col-md-4 btn btn-warning btn-sm">Edit</button>
                                </form>
                                <form class="d-inline" action="{{ url("book/destroy") }}" method="POST">
									<input type="hidden" name="id" value="[ID]">
                                    <button class="col-md-4 btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                            <div class="">
                                <a href="{{ url("book/{id}") }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END OF LOOP --}}
        </div>
    </div>
@endsection
