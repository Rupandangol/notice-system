@extends('Backend.master')
@section('my-header')
    <link rel="stylesheet" href="{{URL::to('/css/customCss/addAdmin.css')}}">
@endsection

@section('content')
    <br>
    <div class="container" id="myContainer">
        @if($errors->all())
            <div class="alert alert-danger">
                Errors: <br>
                @foreach($errors->all() as $error)
                    <i>- {{$error}}</i><br>
                @endforeach
            </div>
        @endif
        <h1>Update Admin</h1>
        <br>

        <form method="post" action="{{route('updateAdmin',$adminData->id)}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                      value="{{$adminData->username}}" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                      value="{{$adminData->email}}" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                       placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1"
                       placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
