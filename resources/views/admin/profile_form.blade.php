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
                                    <div class="alert alert-success">
                                        <ul>
                                            <li>{!! \Session::get('success') !!}</li>
                                        </ul>
                                    </div>
                                    @endif
                                        <div >
                                           
                                        <form role="form" method="post" enctype="multipart/form-data" action="{{ URL('updateprofiledata')}}">
                                        @csrf
                                                <div class="form-group">
                                                    <label> Name :</label>
                                                    <input type="text" name="name" value="{{Auth::user()->name}}" placeholder="Enter Name" class="form-control">
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>Email  :</label>
                                                    <input class="form-control"   value="{{Auth::user()->email}}" placeholder="Enter Email" name="email" type="email">
                                                </div>

                                                <div class="form-group">
                                                    <label> Picture</label>
                                                    <input type="file" class="form-control" name="picture">
                                                </div>
                                                <div class="form-group">
                                                    <label>Mobile</label>
                                                    <input class="form-control"   value="{{Auth::user()->mobile}}" placeholder="Enter Mobile" name="mobile" type="text">
                                                </div>

                                                
                                                                                        
                                                <button type="submit" class="btn btn-success">Submit Button</button>
                                                <button type="reset" class="btn btn-danger">Reset Button</button>
                                            </form>
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
