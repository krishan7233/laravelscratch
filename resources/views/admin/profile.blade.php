@extends('admin.layout.commonlayout')
@section('title','User List')
@section('page-content')

<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Profile</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Profile  Data
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    @if (\Session::has('success'))

                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        {!! \Session::get('success') !!}
                                    </div>
                                    @endif
                                        <div >
                                            <h5>Name : {{ Auth::user()->name}}</h5>
                                            <h5>Email : {{ Auth::user()->email}}</h5>
                                            <h5>Mobile : {{ Auth::user()->mobile}}</h5>
                                            <h5>Picture : <img src="{{asset('assets/user_picture/'.Auth::user()->picture)}}" style="height: 100px;width: 100px;"/></h5>
                                            <a class="btn btn-success" href="{{URL('profileform')}}">Update Profile</a>
                                        </div>
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
