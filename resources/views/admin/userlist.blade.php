@extends('admin.layout.commonlayout')
@section('title','User List')
@section('page-content')

<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">User</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    User List
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    @if (\Session::has('success'))
                                    <div class="alert alert-success">
                                        <ul>
                                            <li>{!! \Session::get('success') !!}</li>
                                        </ul>
                                    </div>
                                    @endif
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            @if(count($userlist)>0)
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>User Name</th>
                                                    <th>Email</th>
                                                    <th>Mobile</th>
                                                    <th>Picture</th>
                                                    <th>Created at</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($userlist as $key=>$val)
                                                <tr class="odd gradeX">
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$val->name}}</td>
                                                    <td>{{$val->email}}</td>
                                                    <td>{{$val->mobile}}</td>
                                                    <td><img src="{{ asset('assets/user_picture/'.$val->picture)}}" style="height:100px;width:100px"> </td>
                                                    
                                                    <td class="center">{{$val->created_at}}</td>
                                                    <td><a href="{{URL('edituser/'.$val->id)}}" class="btn btn-success">EDIT</a>|<a  href="{{URL('deleteuser/'.$val->id)}}" class="btn btn-danger">DELETE</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            @else
                                            {{"Data Not Found"}}
                                            @endif
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                  
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
@endsection
