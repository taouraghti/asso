@extends('layouts.layout')

@section('title','Posts')

@section('content')

@include('layouts.navbar')


<h1 class="text-center">Manage Posts</h1>
<div class="container">
    @if(!count($posts))
        <div class="alert alert-info" style="">No member to display</div>
    @else
        <div class="table-responsive">
            <table class="main-table text-center table table-bordered">
                <tr style="font-weight: bold; color: #fff; background-color: rgba(33,37,41,.9);">
                    <td>#ID</td>
                    <td>Username</td>
                    <td>Description</td>
                    <td>Activity</td>
                    <td>Created at</td>
                    <td>Control</td>
                </tr>
                    @foreach($posts as $post)
                        <tr>
                        <td> {{$post->id}} </td>
                        <td> {{$post->username}} </td>
                        <td> {{$post->description}} </td>
                        <td> football </td>
                        <td> {{$post->created_at}}</td>
                        <td>
                            <a href="{{route('admin.edit.post', ['id' => $post->id])}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                            <a href="#" class="btn btn-danger confirm"><i class="fas fa-times"></i> Delete</a>
                                <a href="#" class="btn btn-success activate-btn"><i class="fas fa-check"></i> Approuve</a>

                        </td>
                        </tr>
                    @endforeach
            </table>
        </div>
    @endif
    <a href="#" class="btn btn-primary" style="margin-bottom:50px"><i class="fa fa-plus"></i> New Post</a>
</div>
@endsection
