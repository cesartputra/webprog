@extends('layout.master')

@section('title', 'Edit Book Page')

@section('content')
    <div class="col-md-6 offset-md-3 h-100" style="top: 6vh;">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                Edit book
            </div>
            <div class="card-body">
                <form action="{{ url('book/update') }}" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="id" value="[ID]">
					<div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" class="form-control">
                            <option value="">Chooose Category</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="picture">Picture</label>
                        <input type="file" name="picture" class="form-control" style="border:unset;padding:0;">
                    </div>
                    <button class="form-control btn btn-primary">Create Book</button>
					<div class="alert alert-danger mt-3">
						<strong>[ERROR MESSAGE]</strong>
					</div>
					<div class="alert alert-success mt-3">
						<strong>[SUCCESS MESSAGE]</strong>
					</div>
                </form>
            </div>
        </div>
    </div>
@endsection
