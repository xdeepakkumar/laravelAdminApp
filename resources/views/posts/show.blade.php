@extends('layouts.master')
@section('content')
<h3 class="title1">Here is the Post Details</h3>
<table class="table-bordered" style="padding: 3px; margin-top:20">
    <tr>
        <td><img src="{{asset('uploads/post/' . $post->image)}}" alt="no image" style="max-width: 950px; height:340px; margin: 0 auto;"></td>
    </tr>
    <tr>
        <td style="padding: 10px; "><span class="text-danger"><b>Post Title : </b></span> {{$post->post_title}}</td>
    </tr>
    <tr>
        <td style="padding: 10px;"><span class="text-danger"><b>Category : </b></span>{{$post->cat_name}}</td>
    </tr>
    <tr>
        <td style="padding: 10px;"><span class="text-danger"><b>Slug(Custom URL) : </b></span>{{$post->post_slug}}</td>
    </tr>
    <tr>
        <td style="padding: 10px;"><span class="text-danger"><b>Description : <br> </b></span>{{$post->post_description}}</td>
    </tr>
    <tr>
        <td style="padding: 10px;"><span class="text-danger"><b>Created at : <br> </b></span>{{$post->created_at}}</td>
    </tr>
</table>
<a class="btn btn-primary btn-sm" href="{{route('posts.index')}}" style="margin-top: 10px">Back</a>
@endsection
