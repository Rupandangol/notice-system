@extends('Backend.master')
@section('my-header')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection


@section('content')
    @if(session('studentCreate'))
        <div class="alert alert-success">
            {{session('studentCreate')}}
        </div>
    @endif
    @if(session('fail'))
        <div class="alert alert-danger">
            {{session('fail')}}
        </div>
    @endif
    <h1>Manage Student</h1>
    <table id="myTable" class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Student ID</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Position</th>
            <th scope="col">Age</th>
            <th scope="col">Bank Name</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @forelse($students as $key=>$value)
            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$value->studentID}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->mobileNo}}</td>
                <td>{{$value->position}}</td>
                <td>{{$value->age}}</td>
                <td>{{$value->bankName}}</td>
                <td><a class="btn btn-primary" href="{{route('updateStudent',$value->id)}}">Edit</a></td>
                <td><a class="btn btn-danger" href="{{route('deleteStudent',$value->id)}}">Delete</a></td>
            </tr>
        @empty
            <tr>
                <td>NO Data</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection


@section('my-footer')
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
@endsection
