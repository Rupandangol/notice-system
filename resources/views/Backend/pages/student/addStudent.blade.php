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
        <h1>Add Student</h1>
        <br>
            @if(session('studentCreate'))
            <div class="alert alert-success">
                {{session('studentCreate')}}
            </div>
            @endif
        <form method="post" action="{{route('addStudent')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Full Name">
            </div>
            <div class="form-group">
                <label for="">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" name="address" class="form-control" id="" placeholder="Address">
            </div>
            <div class="form-group">
                <label for="">Mobile Number:</label>
                <input type="text" name="mobileNo" class="form-control" id="" placeholder="Mobile Number">
            </div>

            <div class="form-group">
                <label for="">Bank Name</label>
                <select class="form-control" name="bankName" id="">
                    <option value="">--Choose Bank--</option>
                    <option>Best Finance</option>
                    <option>Banglamukhi Finance</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Position</label>
                <select class="form-control" name="position" id="">
                    <option value="">--Choose Position--</option>
                    <option>TRAINEE ASSISTANT</option>

                </select>
            </div>
            <div class="form-group">
                <label for="">Age</label>
                <input type="text" class="form-control" name="age" id="" placeholder="Age">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
