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
        <h1>Update Student</h1>
        <br>
        <form method="post" action="{{route('updateStudent',$studentData->id)}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      value="{{$studentData->name}}"  placeholder="Full Name">
            </div>
            <div class="form-group">
                <label for="">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                     value="{{$studentData->email}}"  placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" value="{{$studentData->address}}" name="address" class="form-control" id="" placeholder="Address">
            </div>
            <div class="form-group">
                <label for="">Mobile Number:</label>
                <input type="text" value="{{$studentData->mobileNo}}" name="mobileNo" class="form-control" id="" placeholder="Mobile Number">
            </div>

            <div class="form-group">
                <label for="">Bank Name</label>
                <select class="form-control" name="bankName" id="">
                    <option value="">--Choose Bank--</option>
                    <option @if($studentData->bankName==='Best Finance') selected @endif>Best Finance</option>
                    <option @if($studentData->bankName==='Banglamukhi Finance') selected @endif>Banglamukhi Finance</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Position</label>
                <select class="form-control" name="position" id="">
                    <option value="">--Choose Position--</option>
                    <option @if($studentData->position==='TRAINEE ASSISTANT') selected @endif>TRAINEE ASSISTANT</option>

                </select>
            </div>
            <div class="form-group">
                <label for="">Age</label>
                <input type="text" value="{{$studentData->age}}" class="form-control" name="age" id="" placeholder="Age">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
