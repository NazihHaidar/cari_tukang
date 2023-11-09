<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cari Tukang </title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong>Cari Tukang </strong></a>
            </div>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">		
            <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                <a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                <a  class="active-menu" href="empty.php"><i class="fa fa-fw fa-star"></i> Monitoring Rating</a>
                </li>
                <li>
                <a href="user.php"><i class="fa fa-fw fa-table"></i> Tabel Customer</a>
                </li>
                <li>
                <a href="tukang.php"><i class="fa fa-fw fa-hammer"></i> Tabel Tukang</a>
                </li>
                <li>
                        <a href="logout.php"><i class="fa fa-sign-out"></i> LogOut</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                    </div>
                </div> 
                 <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel Claim
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ID Tukang</th>
                                            <th>ID Pesanan</th>
                                            <th>ID Customer</th>
                                            <th>Rating</th>
                                            <th>Ulasan</th>
                                            <th>Action</th>                                                                             
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $fetchqry = "SELECT * FROM rating";
                                        include 'cons.php';
                                        $result=mysqli_query($koneksi,$fetchqry);
                                        $num=mysqli_num_rows($result);
                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>
                                        <tr>
                                        <td><?php echo $row['id_rating'];?></td>    
                                        <td><?php echo $row['id_tukang'];?></td>
                                        <td><?php echo $row['pesanan_id'];?></td>
                                        <td><?php echo $row['id_customer'];?></td>
                                        <td><?php echo $row['rating'];?> <i class="fa fa-fw fa-star"></i></td>
                                        <td><?php echo $row['ulasan'];?></td>
                                        <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>								
                                        <?php } ?>
                                        </tr>		
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>
               <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
    </div>
            </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
   
</body>
</html>
