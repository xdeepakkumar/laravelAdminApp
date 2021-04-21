@extends('layouts.master')
@section('content')
@if ($message=Session::get('success'))
    <style>
        .alert {
            padding: 20px;
            background-color: rgb(38, 116, 38); /* Red */
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
        {{$message}}
      </div>
@endif
    @if ($errors->any())
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
    <ul>
    @foreach ($errors as $error)
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        {{$message}}
      </div>
    @endforeach
    </ul>
    @endif
    <h3 class="title1">Available Posts <span style="float:right"><a class="btn btn-primary btn-sm" href="{{route('posts.create')}}">Create Post</a></span></h3>
    <table class="table table-striped table-bordered">
        <thead>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Slug(URL)</th>
            <th>Photo</th>
            <th>Category</th>
            <th colspan="3" class="text-center">Action</th>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($posts as $post)
            <tr>
            <td>{{$i++}}</td>
            <td>{{$post->post_title}}</td>
            <td>{{Str::limit($post->post_description, 25)}}</td>
            <td>{{Str::limit($post->post_slug, 20)}}</td>
            <td><img src="{{asset('uploads/post/' . $post->image)}}" alt="no image" style="max-width: 50px; height:40px"></td>
            <td>{{$post->cat_name}}</td>
            <td>
                <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary btn-sm">Show</a>
                <td>
                    <a class="btn btn-warning btn-sm" href="{{route('posts.edit', $post->id)}}">Edit</a>
                </td>
                <td>
                    <form action="{{route('posts.destroy',$post->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$posts->links()}}
@endsection
