<!DOCTYPE html>
<html lang="en">

  @include('admin.layout.header')
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            @include('admin.layout.navigation')

            @include('admin.layout.sidebar')
            <!-- /.sidebar -->

           @yield('page-content')
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

       @include('admin.layout.footer')