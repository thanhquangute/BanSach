<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Welcom PiBook Online Shop Admin">
    <meta name="author" content="">
    <base href="{{asset('')}}">
    <title>Welcom PiBook Online Shop Admin</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>

    <!-- MetisMenu CSS -->
    <link href="css/admin/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="css/admin/upload.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/admin/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="css/admin/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="css/admin/dataTables.responsive.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">
          @include('admin.layout.header')
        <!-- Navigation -->
      

        <!-- Page Content -->
            @yield('content')
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src ="Javascript/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src ="bootstrap/js/bootstrap.min.js "></script>

    <!-- Metis Menu Plugin JavaScript -->
     <script src="css/admin/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="css/admin/sb-admin-2.js"></script>
    <script src="css/admin/upload.js"></script>
    <!-- DataTables JavaScript -->
    <script src="css/admin/jquery.dataTables.min.js"></script>
    <script src="css/admin/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
    @yield('script')
</body>

</html>
