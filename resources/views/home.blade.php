@extends('layouts.app')

@section('content')
    
    <!-- Start content -->
    <div class="content">


        @include('includes.nav-top')

        <div class="page-content-wrapper ">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="float-right page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <h5 class="page-title">Dashboard</h5>
                    </div>
                </div>

                <div id="api" class="row"></div>


            </div><!-- container fluid -->

        </div> <!-- Page content Wrapper -->

    </div> <!-- content -->

    @include('includes.footer')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $.get('https://jsonplaceholder.typicode.com/users', function(data){
                data.forEach(function(user){                    
                    $('#api').append('<div class="col-xl-3 col-md-6"><div class="card mini-stat m-b-30"><div class="p-3 bg-primary text-white"><div class="mini-stat-icon"><i class="mdi mdi-account float-right mb-0"></i></div><h6 class="text-uppercase mb-0">'+user.name+'</h6></div><div class="card-body"><div class="border-bottom pb-4"><span class="badge badge-success"> +11% </span> <span class="ml-2 text-muted">From previous period</span></div><div class="mt-4 text-muted"><div class="float-right"><p class="m-0">Last : 1325</p></div><h5 class="m-0">1456<i class="mdi mdi-arrow-up text-success ml-2"></i></h5></div></div></div></div></div>')
                })
            })
        })
    </script>

@endsection
