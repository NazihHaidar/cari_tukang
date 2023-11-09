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
                <a class="active-menu" href="form.php"><i class="fa fa-edit"></i> Claim </a>
                </li>
                <li>
                <a href="empty.php"><i class="fa fa-fw fa-table"></i> Tabel Claim</a>
                </li>
                    <li>
                <a href="userplus.php"><i class="fa fa-fw fa-user"></i> Tambah User</a>
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
                                    <form action="form.php" method="post" name="form1">
                                    <div class="form-group col-lg-6">
                                        <label>Kantor</label>
                                        <select type="text" class="form-control" name="kantor" placeholder="">
                                        <option>JEGLES</option>
                                        <option>MATARAM</option>
                                        <option>PARE</option>
                                        <option>TULUNGAGUNG</option>
                                        <option>MADIUN</option>
                                        <option>BLITAR</option>
                                        </select>
                                    </div>
                                        <div class="form-group col-lg-6">
                                            <label>Divisi</label>
                                            <input class="form-control" name="divisi" required>
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Tanggal Mulai</label>
                                            <input class="form-control" type="date" name="tgl_mulai" required>
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Tanggal Berakir</label>
                                            <input class="form-control" type="date" name="tgl_berakir" required>
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Promo</label>
                                            <input type="text" class="form-control" name="promo" required>
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Barang</label>
                                            <input type="text" class="form-control" name="barang" required>
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Mekanisme</label>
                                            <input type="text" class="form-control" name="mekanisme" required>
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Jumlah Barang</label>
                                            <input type="number" class="form-control" name="jml_barang" required>
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Jumlah Rupiah</label>
                                            <input type="text" class="form-control" name="jml_rupiah" required>
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Activity</label>
                                            <input type="text" class="form-control" name="activity" required>
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Implementasi</label>
                                            <input type="text" class="form-control" name="implementasi" required>
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Keterangan</label>
                                            <input type="text" name="keterangan" class="form-control" required>
                                        </div>  
                                        <center>
                                        <input type="submit" name="Submit" value="Tambah data" class="btn btn-success">
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
                                        </center>                                    
                                    </form>

                                    <?php
 
                                    // Check If form submitted, insert form data into users table.
                                    if(isset($_POST['Submit'])) {                                       
                                        $kantor = $_POST['kantor'];
                                        $divisi = $_POST['divisi'];
                                        $tgl_mulai = $_POST['tgl_mulai'];
                                        $tgl_berakir = $_POST['tgl_berakir'];
                                        $promo = $_POST['promo'];
                                        $barang = $_POST['barang'];
                                        $mekanisme = $_POST['mekanisme'];
                                        $jml_barang = $_POST['jml_barang'];
                                        $jml_rupiah = $_POST['jml_rupiah'];
                                        $activity = $_POST['activity'];
                                        $implementasi = $_POST['implementasi'];
                                        $keterangan = $_POST['keterangan'];
                                  
                                        // include database connection file
                                        include_once("config.php");
                                                
                                        // Insert user data into table
                                        $result = mysqli_query($mysqli,"INSERT INTO `tb_claim`(`kantor`, `divisi`, `tgl_mulai`, `tgl_berakir`, `promo`, `barang`, `mekanisme`, `jml_barang`, 
                                        `jml_rupiah`, `activity`, `implementasi`, `keterangan`) 
                                        VALUES ('$kantor','$divisi','$tgl_mulai','$tgl_berakir','$promo','$barang','$mekanisme','$jml_barang','$jml_rupiah',
                                        '$activity','$implementasi','$keterangan')");
                                        
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