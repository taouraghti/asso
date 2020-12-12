
@extends('layouts.layout')

@section('title','Edit Post')

@section('content')

@include('layouts.navbar')

<style>
.is-invalid{
    background-image: none !important;
}
</style>

<h1 class="text-center">Edit Post</h1>
    <div class="container">
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="postid" value = "{{$post->id}}">
            <!--  Start Field Description  -->
            <div class="form-group row">
                <label class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10 col-md-6">
                    <input type="text" class="form-control" name="description" value="{{$post->description}}" required = "required">
                </div>
            </div>
            <!--  End Field Description  -->

            <!--  Start Field Full name  -->
            <div class="form-group row">
                <label class="col-sm-2 control-label">activity</label>
                <div class="col-sm-10 col-md-6">
                    <input type="text" class="form-control" name="activity" value="test" required = "required">
                </div>
            </div>
            <!--  End Field Full name  -->

            <!--  Start Field Submit  -->
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <input type="submit" class="btn btn-success" value="save">
                </div>
            </div>
            <!--  End Field Submit  -->
        </form>
    </div>
@endsection
