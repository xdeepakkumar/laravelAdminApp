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
                <h4>Edit Category :</h4>
            </div>
            <div class="form-body">
                <form action="{{route('Category.update', $category->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Enter Title</label>
                        <input type="text" value="{{$category->cat_name}}" class="form-control" name="cat_name" id="cat_name" placeholder="category title">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<a class="btn btn-primary btn-sm" href="{{route('Category.index')}}" style="margin-top: 10px">Back</a>
@endsection

