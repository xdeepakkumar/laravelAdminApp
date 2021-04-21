@extends('layouts.master')
@section('content')
@if ($message=Session::get('success'))
    <div class="alert alert-success">
    <p> {{$message}}</p>
    </div>
@endif
@if ($errors->any())
    @foreach ($errors as $error)
        {{$error}}
    @endforeach

@endif
<div class="table-bordered">
    <div class="forms">
        <div class="form-grids row widget-shadow" data-example-id="basic-forms">
            <div class="form-title">
                <h4>Create New Post :</h4>
            </div>
            <div class="form-body">
                <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <select name="cat_name" id="category" style="width: 100%; border-radius:4px;">
                            <option value="" selected>Select category of the post</option>
                            @foreach ($cats  as $cat)
                                <option value="{{$cat->cat_name}}">{{$cat->cat_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Enter Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="post title">
                    </div>
                    <div class="form-group">
                        <label for="title">Slug(URL)</label>
                        <input type="text" class="form-control" name="slug" id="slug" placeholder="it will be generate automatically">
                    </div>
                    <div class="form-group">
                        <label for="desc">Enter Description</label>
                        <textarea type="text" class="form-control" name="description" id="desc"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">File input</label>
                        <input type="file" id="img" name="image">
                    </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<a class="btn btn-primary btn-sm" href="{{route('posts.index')}}" style="margin-top: 10px">Back</a>
@endsection

