@extends('admin.layout.commonlayout')
@section('title','Add User')

@section('page-content')
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Add User</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Add User Form
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                       
                                       <div class="col-lg-12">

                                       <form  action="{{URL('createuser')}}" role="form" method="post" enctype="multipart/form-data" >
                                        @csrf
                                                <div class="form-group">
                                                    <label>User Name :</label>
                                                    <input type="text" name="user_name" placeholder="Enter User Name" class="form-control">
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>User Email :</label>
                                                    <input class="form-control" placeholder="Enter User Email" name="user_email" type="email">
                                                </div>

                                                <div class="form-group">
                                                    <label>User Mobile Number :</label>
                                                    <input class="form-control" placeholder="Enter User Mobile" name="mobile" type="text">
                                                </div>

                                                <div class="form-group">
                                                    <label>User Picture :</label>
                                                    <input class="form-control" placeholder="Enter User Picture" name="picture" type="file">
                                                </div>

                                              
                                                <div class="form-group">
                                                    <label>User Password :</label>
                                                    <input class="form-control" placeholder="Enter User Password" name="user_password" type="password">
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