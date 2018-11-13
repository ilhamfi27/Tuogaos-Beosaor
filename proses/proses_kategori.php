<?php  
session_start();
include '../koneksi.php';
if (isset($_GET['aksi'])) {
	switch ($_GET['aksi']) {
		case 'input':
			$kategori = $_POST['kategori'];

			$query ="INSERT INTO `kategori`(
										`kategori`) 
					VALUES ('$kategori')";
			$succes = mysqli_query($conn,$query);
			if ($succes) {
				$_SESSION['aksi_sukses'] = "Input Kategori Sukses";
				header('location: ../input_kategori.php');
			}else{
				$_SESSION['aksi_gagal'] = "Input Kategori Gagal : " . mysqli_error($conn);
				header('location: ../input_kategori.php');
			}
			break;
		
		default:
			# code...
			break;
	}
}
?>