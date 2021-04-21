@extends('layouts.master')
@section('content')
@if($errors->any())
<style>
    .alert {
        padding: 20px;
        background-color: rgb(197, 10, 50); /* Red */
        color: white;
        margin-bottom: 15px;
    }

        /* The close button */
    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 10px;
        cursor: pointer;
        transition: 0.3s;
        }

        /* When moving the mouse over the close button */
        .closebtn:hover {
        color: black;
    }
</style>
<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    problem with input
  </div>
@endif
<div class="table-bordered">
    <div class="forms">
        <div class="form-grids row widget-shadow" data-example-id="basic-forms">
            <div class="form-title">
                <h4>Update Post :</h4>
            </div>
            <div class="form-body">
                <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <select name="cat_name" id="category" value="{{$post->cat_name}}" style="width: 100%; border-radius:4px;">
                            <option value="" selected>Select category of the post</option>
                            @foreach ($cats  as $cat)
                                <option value="{{$cat->cat_name}}">{{$cat->cat_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Enter Title</label>
                        <input type="text" value="{{$post->post_title}}" class="form-control" name="title" id="title" placeholder="post title">
                    </div>
                    <div class="form-group">
                        <label for="title">Slug(URL)</label>
                        <input type="text" value="{{$post->post_slug}}" class="form-control" name="slug" id="slug" placeholder="it will be generate automatically">
                    </div>
                    <div class="form-group">
                        <label for="desc">Enter Description</label>
                        <input type="text" value="{{$post->post_description}}" class="form-control" name="description" id="desc" style="padding-top: 30px; padding-bottom:30px">
                    </div>
                    <div class="form-group">
                        <label for="img">File input</label>
                        <input type="file" id="img" name="image" value="{{$post->post_title}}">
                    </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<a class="btn btn-primary btn-sm" href="{{route('posts.index')}}" style="margin-top: 10px">Back</a>
@endsection

