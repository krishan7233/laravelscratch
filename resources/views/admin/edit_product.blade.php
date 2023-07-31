@extends('admin.layout.commonlayout')
@section('title','Add Product')

@section('page-content')
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Update Product</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Update Product Form
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                       
                                       <div class="col-lg-12">

                                       <form role="form" method="post" enctype="multipart/form-data" action="{{ URL('updateproductdata')}}">
                                        @csrf
                                        <input type="hidden" value="{{$productdata->id}}" name="id" />
                                                <div class="form-group">
                                                    <label>Product Name :</label>
                                                    <input type="text" value="{{$productdata->product_name}}" name="product_name" placeholder="Enter Product Name" class="form-control">
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>Product Price :</label>
                                                    <input class="form-control" value="{{$productdata->product_price}}" placeholder="Enter Product Price" name="product_price" type="text">
                                                </div>

                                                <div class="form-group">
                                                    <label>Product Picture</label>
                                                    <input type="file" class="form-control" name="product_picture">
                                                </div>
                                                <div class="form-group">
                                                    <label>Product Description</label>
                                                    <textarea class="form-control" rows="3" name="product_desc">{{$productdata->product_description}}</textarea>
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