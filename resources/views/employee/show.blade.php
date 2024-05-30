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
<<<<<<< HEAD
                    <a onclick ="return confirm('Are you sure?')"class="btn btn-info m-2 " href="#">Add New Employee</a></td>
=======

>>>>>>> fdacb48aea57983c4027f7f64d849018ab8fafde
                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Address</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Zip</th>
                                        <th>Age</th>
                                        <th>Birthday</th>
                                        <th>Hired Date</th>
                                        <th>Department</th>
                                        <th>Division</th>
                                        <th>Action</th>
                                 
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($employees as $st)
                                    <tr>
                                        <td>{{ $st->id }}</td>
                                        <td>{{ $st->fname}}</td>
                                        <td>{{ $st->mname}}</td>
                                        <td>{{ $st->lname}}</td>
                                        <td>{{ $st->address}}</td>
                                        <td>{{ $st->country}}</td>
                                        <td>{{ $st->state}}</td>
                                        <td>{{ $st->city}}</td>
                                        <td>{{ $st->zip}}</td>
                                        <td>{{ $st->age}}</td>
                                        <td>{{ $st->bdate}}</td>
                                        <td>{{ $st->dhired}}</td>
                                        <td>{{ $st->dept}}</td>
                                        <td>{{ $st->div}}</td>
                                 
                                  
                                        <td class="d-flex p-2">
<<<<<<< HEAD
<<<<<<< HEAD
                                        <a class="btn btn-info m-2 " href="{{ url('employee/'.$st->id.'/edit')}}">Edit</a>
=======
                                        <a class="btn btn-danger m-2 " href="{{ url('employee/'.$st->id.'/edit')}}">Edit</a>
>>>>>>> fdacb48aea57983c4027f7f64d849018ab8fafde
=======
                                        <a class="btn btn-info m-2 " href="{{ url('employee/'.$st->id.'/edit')}}">Edit</a>
>>>>>>> fcb4fa8915e416efbbecd99f4674967905f5d350
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