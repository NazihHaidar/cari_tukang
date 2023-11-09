<?php 
session_start();
 
include 'conf.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($koneksi,"select * from tb_admin where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['status']=="admin"){
 
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "admin";

		header("location:admin/index.php");
 
	}else if($data['status']=="Customer"){

		$_SESSION['username'] = $username;
		$_SESSION['status'] = "Customer";

		header("location:cust/index.php");
 
	}else if($data['status']=="Tukang"){

		$_SESSION['username'] = $username;
		$_SESSION['status'] = "Tukang";
		
        header("location:tukang/index.php");
 
	}else{
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>