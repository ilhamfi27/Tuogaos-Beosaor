<?php  
include '../koneksi.php';
if (isset($_POST['submit'])) {
	$kategori =$_POST['kategori'];

	$query ="INSERT INTO `kategori`(
								`kategori`) 
			VALUES ('$kategori')";
	$succes = mysqli_query($conn,$query);
	if ($succes) {
		header('location: ../input_kategori.php');
	}else{
		// header('location: ../input_kategori.php');
		mysqli_error($conn);
	}
}
?>