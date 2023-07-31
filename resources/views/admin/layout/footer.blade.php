 <!-- jQuery -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{ asset('assets/js/raphael.min.js') }}"></script>
        <script src="{{ asset('assets/js/morris.min.js') }}"></script>


          <!-- DataTables JavaScript -->
          <script src="{{ asset('assets/js/dataTables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/dataTables/dataTables.bootstrap.min.js') }}"></script>


        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('assets/js/startmin.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>
    </body>

</html>