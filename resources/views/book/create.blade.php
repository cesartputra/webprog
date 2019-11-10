@extends('layout.master')

@section('title', 'Create Book Page')

@section('content')
    <div class="col-md-6 offset-md-3 h-100" style="top: 6vh;">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                Create new book
            </div>
            <div class="card-body">
                <form action="{{ url('book/create') }}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="{{old('title')}}">
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" class="form-control">
                            <option value="">Chooose Category</option>
                            @foreach($categories as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" value="{{old('description')}}"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="picture">Picture</label>
                        <input type="file" name="picture" class="form-control" style="border:unset;padding:0;">
                    </div>

                    <button class="form-control btn btn-primary">Create Book</button>

                    @if($errors->any())
                        <div class="alert alert-danger mt-3">
                            <!-- $errors->first(); kalo hanya 1 -->
                            <ul>
                            @foreach($errors->all() as $e)
                                <li>
                                    <strong>{{$e}}</strong>    
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    @endif

					
                    @if(Session::get('success'))
                        <div class="alert alert-success mt-3">
                            <strong>{{Session::get('success')}}</strong>
                        </div>
                    @endif
                    
                </form>
            </div>
        </div>
    </div>
@endsection
