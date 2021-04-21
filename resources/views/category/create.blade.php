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
                <h4>Create New Category :</h4>
            </div>
            <div class="form-body">
                <form action="{{route('Category.store')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="title">Enter Title</label>
                        <input type="text" class="form-control" name="cat_name" id="cat_name" placeholder="post title">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<a class="btn btn-primary btn-sm" href="{{route('Category.index')}}" style="margin-top: 10px">Back</a>
@endsection

