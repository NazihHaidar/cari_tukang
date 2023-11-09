<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: edit.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tb_claim WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Claim </title>
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
                <a class="navbar-brand" href="index.html"><strong>Cari Tukang </strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
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
                           Edit Claim 
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
                                    <form action="editproses.php" method="POST" name="form1">
                                    <div class="form-group col-lg-12">                                            
                                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
                                        </div>
                                        <div class="form-group col-lg-6 ">
                                            <label>Kantor</label>
                                            <?php $kantor = $data['kantor']; ?>
                                        <select class="form-control" name="kantor">
                                            <option <?php echo ($kantor == 'JEGLES') ? "selected": "" ?>>JEGLES</option>
                                            <option <?php echo ($kantor == 'MATARAM') ? "selected": "" ?>>MATARAM</option>
                                            <option <?php echo ($kantor == 'PARE') ? "selected": "" ?>>PARE</option>
                                            <option <?php echo ($kantor == 'TULUNGAGUNG') ? "selected": "" ?>>TULUNGAGUNG</option>
                                            <option <?php echo ($kantor == 'MADIUN') ? "selected": "" ?>>MADIUN</option>
                                            <option <?php echo ($kantor == 'BLITAR') ? "selected": "" ?>>BLITAR</option>
                                        </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Divisi</label>
                                            <input class="form-control" name="divisi" value="<?php echo $data['divisi'] ?>">
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Tanggal Mulai</label>
                                            <input class="form-control" type="date" name="tgl_mulai" value="<?php echo $data['tgl_mulai'] ?>">
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Tanggal Berakir</label>
                                            <input class="form-control" type="date" name="tgl_berakir" value="<?php echo $data['tgl_berakir'] ?>">
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Promo</label>
                                            <input type="text" class="form-control" name="promo" value="<?php echo $data['promo'] ?>">
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Barang</label>
                                            <input type="text" class="form-control" name="barang" value="<?php echo $data['barang'] ?>" required>
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Mekanisme</label>
                                            <input type="text" class="form-control" name="mekanisme" value="<?php echo $data['mekanisme'] ?>" required>
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Jumlah Barang</label>
                                            <input type="number" class="form-control" name="jml_barang" value="<?php echo $data['jml_barang'] ?>" required>
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Jumlah Rupiah</label>
                                            <input type="text" class="form-control" name="jml_rupiah" value="<?php echo $data['jml_rupiah'] ?>" required>
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Activity</label>
                                            <input type="text" class="form-control" name="activity" value="<?php echo $data['activity'] ?>" required>
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Implementasi</label>
                                            <input type="text" class="form-control" name="implementasi" value="<?php echo $data['implementasi'] ?>" required>
                                        </div> 
                                        <div class="form-group col-lg-6">
                                            <label>Keterangan</label>
                                            <input type="text" name="keterangan" class="form-control" value="<?php echo $data['keterangan'] ?>">
                                        </div>  
                                        </div> 
                                        <center>
                                        <input type="submit" name="simpan" value="SIMPAN" class="btn btn-success">                                        
                                        </center>                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>              
            </div>
			<footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
			</div>             
            </div>         
        </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

</body>
</html>