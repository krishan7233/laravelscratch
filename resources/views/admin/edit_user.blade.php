@extends('admin.layout.commonlayout')
@section('title','Add User')

@section('page-content')
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Update User</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Update User Form
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                       
                                       <div class="col-lg-12">

                                       <form  action="{{URL('updateuserdata')}}" role="form" method="post" enctype="multipart/form-data" >
                                        @csrf
                                        <input type="hidden" name="id" value="{{$userdata->id}}" />
                                        <div class="form-group">
                                                    <label>User Name :</label>
                                                    <input type="text" name="user_name" placeholder="Enter User Name" value="{{$userdata->name}}" class="form-control">
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>User Email :</label>
                                                    <input class="form-control" placeholder="Enter User Email" value="{{$userdata->email}}" name="user_email" type="email">
                                                </div>

                                                <div class="form-group">
                                                    <label>User Mobile Number :</label>
                                                    <input class="form-control" placeholder="Enter User Mobile" value="{{$userdata->mobile}}" name="mobile" type="text">
                                                </div>

                                                <div class="form-group">
                                                    <label>User Picture :</label>
                                                    <input class="form-control" placeholder="Enter User Picture" name="picture" type="file">
                                                </div>

                                              
                                                <div class="form-group">
                                                    <label>User Password :</label>
                                                    <input class="form-control" placeholder="Enter User Password" value="{{$userdata->password}}" name="user_password" type="password">
                                                </div>
                                                
                                             
                                                
                                                
                                                <button type="submit" class="btn btn-success">Submit Button</button>
                                                <button type="reset" class="btn btn-danger">Reset Button</button>
                                            </form>



                                        </div>
                                        
                                    </div>
                                    <!-- /.row (nested) -->
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
            <!-- /#page-wrapper -->

@endsection