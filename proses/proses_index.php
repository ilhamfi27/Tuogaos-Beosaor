<?php  
include '../koneksi.php';
if (isset($_POST['submit'])) {
	$user_auth = $_POST['user_auth'];
	$password = md5($_POST['password']);

	$query ="SELECT `id`, `username`, `email`, `password`, `level` FROM `user` WHERE username = '$user_auth' OR email = '$user_auth' AND password = '$password'";
	$succes = mysqli_query($conn,$query);
	$num = mysqli_num_rows($succes);
	if ($num>0) {
		$data = mysqli_fetch_assoc($succes);
		session_start();
		$_SESSION['id'] = $data['id'];
		$_SESSION['username'] = $data['username'];
		header('location: ../dashboard.php');
	}else{
		header('location: ../index.php');
	}
	

}
?>