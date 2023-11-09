<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cari Tukang</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                <a class="navbar-brand" href="index.html"><strong>Cari Tukang</strong></a>
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
                <a href="form.php"><i class="fa fa-edit"></i> Claim </a>
                </li>
                <li>
                <a href="empty.php"><i class="fa fa-fw fa-table"></i> Tabel Claim</a>
                </li>
                    <li>
                <a class="active-menu" href="userplus.php"><i class="fa fa-fw fa-user"></i> Tambah User</a>
                </li>
                    <li>
                <a href="user.php"><i class="fa fa-fw fa-table"></i> Tabel User</a>
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
                        <h1 class="page-header">
                            Claim
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="userplus.php" method="post" name="form1">
                                        <div class="form-group col-lg-6">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="nama" required>
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username" required>
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div> 
                                    <div class="form-group col-lg-6">
                                        <label>Level</label>
                                        <select class="form-control" name="level" placeholder="">
                                        <option>admin</option>
                                        <option>supervisor</option>
                                        <option>claim</option>                                        
                                        </select>
                                    </div>
                                        <center>
                                        <input type="submit" name="Submit" value="Tambah data" class="btn btn-success">
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
                                        </center>                                    
                                    </form>

                                    <?php
 
                                    // Check If form submitted, insert form data into users table.
                                    if(isset($_POST['Submit'])) {                                       
                                        $nama = $_POST['nama'];
                                        $username = $_POST['username'];
                                        $password = $_POST['password'];
                                        $level = $_POST['level'];
                                        
                                        // include database connection file
                                        include_once("config.php");
                                                
                                        // Insert user data into table
                                        $result = mysqli_query($mysqli,"INSERT INTO `user`(`nama`, `username`, `password`, `level`) 
                                        VALUES ('$nama','$username','$password','$level')");
                                        
                                        // Show message when user added
                                    }
                                    ?>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
			</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

</body>
</html> 