@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employees') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="alert alert-info">
                     Employee Table
                    </div>

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Admin</th>
                                       
                                 
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($employees as $st)
                                    <tr>
                                        <td>{{ $st->id }}</td>
                                        <td>{{ $st->fname}}</td>
                                        <td>{{ $st->mname}}</td>
                                        <td>{{ $st->lname}}</td>
                                       
                                 
                                  
                                        <td class="d-flex p-2">

                                        <a class="btn btn-info m-2 " href="{{ url('employee/'.$st->id.'/edit')}}">Edit</a>

                                        <a onclick ="return confirm('Are you sure?')"class="btn btn-danger m-2 " href="{{ url('employee/'.$st->id.'/delete')}}">Delete</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                   
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection