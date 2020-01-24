@include('Backend.myLayouts.header')
<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Notice System</div>
        <div class="list-group list-group-flush">
            <a href="{{route('dashboard')}}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
{{--            Admin--}}
            <div>
                <button class="list-group-item list-group-item-action bg-light" type="button" data-toggle="collapse" data-target="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                    Admin <i class="fa fa-arrow-down"></i>
                </button>
                <div class="collapse {{$admin_active??''}}" id="collapseExample">
                    <a href="{{route('addAdmin')}}" class="list-group-item list-group-item-action bg-light">- Add Admin</a>
                    <a href="{{route('manageAdmin')}}" class="list-group-item list-group-item-action bg-light">- Manage Admin</a>

                </div>
            </div>
{{--            student--}}
            <div>
                <button class="list-group-item list-group-item-action bg-light" type="button" data-toggle="collapse" data-target="#collapseExample1"
                        aria-expanded="false" aria-controls="collapseExample1">
                    Student <i class="fa fa-arrow-down"></i>
                </button>
                <div class="collapse {{$student_active??''}}" id="collapseExample1">
                    <a href="{{route('addStudent')}}"  class="list-group-item list-group-item-action bg-light">- Add Student</a>
                    <a href="{{route('manageStudent')}}" class="list-group-item list-group-item-action bg-light">- Manage Student</a>

                </div>
            </div>

            <a href="#" class="list-group-item list-group-item-action bg-light">Result</a>

        </div>
    </div>
    <!-- /#sidebar-wrapper -->


    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Setting
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

@include('Backend.myLayouts.footer')
