@extends('admin.layout.commonlayout')
@section('title','Product List')
@section('page-content')

<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Products</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Products List
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

                                        @if(count($products)>0)
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Created_at</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($products as $key=>$product)

                                                <tr class="odd gradeX">
                                                <td>{{$key+1}}</td>
                                                    <td>{{$product->product_name}}</td>
                                                    <td>{{$product->product_price}}</td>
                                                    <td>{{$product->product_description}}</td>
                                                    <td><img src="{{asset('assets/product_images/'.$product->product_image)}}" style="height:100px;width:100px"/></td>
                                                    <td>{{$product->created_at}}</td>
                                                    <td class="center">
                                                        <a href="{{URL('editproduct/'.$product->id)}}" class="btn btn-success">EDIT</a>|<a href="{{URL('deleteproduct/'.$product->id)}}" class="btn btn-danger">DELETE</a>

                                                    </td>
                                                </tr>
                                               @endforeach
                                            </tbody>
                                        @else
                                           <p class="text text-success">{{"Data Not Found"}}</p>
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
