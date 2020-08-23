
@extends('layouts.layout')

@section('title','dashboard')

@section('content')

@include('layouts.navbar')

<h1 class="text-center">Add Member</h1>
<div class="container">
    <form action="?do=insert" method="POST" enctype="multipart/form-data">
        <!--  Start Field Username  -->
        <div class="form-group row">
            <label class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10 col-md-6">
                <input type="text" class="form-control" name="username" placeholder="Username To Login Shop" required = "required">
            </div>
        </div>
        <!--  End Field Username  -->

        <!--  Start Field Password  -->
        <div class="form-group row">
            <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10 col-md-6">
                <input type="password" class="password form-control" name="password" autocomplete="new-password" placeholder="Password Must be Complexe" required = "required">
                <i class="show-pass fa fa-eye fa-1x"></i>
            </div>
        </div>
        <!--  End Field Password  -->

        <!--  Start Field Email  -->
        <div class="form-group row">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10 col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Email Must Be Valid" required = "required">
            </div>
        </div>
        <!--  End Field Email  -->

        <!--  Start Field Full name  -->
        <div class="form-group row">
            <label class="col-sm-2 control-label">Full name</label>
            <div class="col-sm-10 col-md-6">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name Appear In Your Profil Page" required = "required">
            </div>
        </div>
        <!--  End Field Full name  -->

        <!--  Start Field Avatar  -->
        <div class="form-group row">
            <label class="col-sm-2 control-label">User Avatar</label>
            <div class="col-sm-10 col-md-6">
                <div class="custom-file">
                    <input type="file" name='avatar' class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                </div>
            </div>
        </div>
        <!--  End Field Avatar  -->

        <!--  Start Field Submit  -->
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <input type="submit" class="btn btn-success" value="Add member">
            </div>
        </div>
        <!--  End Field Submit  -->
    </form>
</div>

@endsection
