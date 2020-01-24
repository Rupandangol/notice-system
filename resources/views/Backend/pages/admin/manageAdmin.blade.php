@extends('Backend.master')
@section('my-header')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection


@section('content')
    @if(session('adminCreate'))
        <div class="alert alert-success">
            {{session('adminCreate')}}
        </div>
    @endif
    @if(session('fail'))
        <div class="alert alert-danger">
            {{session('fail')}}
        </div>
    @endif

    <h1>Manage Admin</h1>
    <table id="myTable" class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col" >Edit</th>
            <th scope="col" >Delete</th>
        </tr>
        </thead>
        <tbody>
        @forelse($admins as $key=>$value)
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{$value->username}}</td>
            <td>{{$value->email}}</td>
            <td><a class="btn btn-primary" href="{{route('updateAdmin',$value->id)}}">Edit</a></td>
            <td><a class="btn btn-danger" href="{{route('deleteAdmin',$value->id)}}">Delete</a></td>
        </tr>
            @empty
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
