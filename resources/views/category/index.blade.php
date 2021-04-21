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
    <h3 class="title1">Available Categories <span style="float:right"><a class="btn btn-primary btn-sm" href="{{route('Category.create')}}">Create Category</a></span></h3>
    <table class="table table-striped table-bordered">
        <thead>
            <th>#</th>
            <th>Title</th>
            <th colspan="3" class="text-center">Action</th>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($cats as $cat)
            <tr>
            <td>{{$i++}}</td>
            <td>{{$cat->cat_name}}</td>
                <td>
                    <a class="btn btn-warning btn-sm" href="{{route('Category.edit', $cat->id)}}">Edit</a>
                </td>
                <td>
                    <form action="{{route('Category.destroy', $cat->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$cats->links()}}
@endsection
