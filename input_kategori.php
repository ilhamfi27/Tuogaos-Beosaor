<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php include_once 'head_content.php' ?>
</head>

<body>

    <div id="wrapper">

        <?php include_once 'navbar.php'; ?>

        <div id="page-wrapper">
        	<?php  
        	if (isset($_SESSION['aksi_sukses'])) {
        	?>
        	<div class="row">
        		<div class="col-md-12">
        			<div class="alert alert-success" role="alert"><?php echo $_SESSION['aksi_sukses']; ?></div>
        		</div>
        	</div>
        	<?php 
        	unset($_SESSION['aksi_sukses']);
        	}
        	?>
        	<?php  
        	if (isset($_SESSION['aksi_gagal'])) {
        	?>
        	<div class="row">
        		<div class="col-md-12">
        			<div class="alert alert-success" role="alert"><?php echo $_SESSION['aksi_gagal']; ?></div>
        		</div>
        	</div>
        	<?php
        	unset($_SESSION['aksi_gagal']); 
        	}
        	?>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">Input Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
            	<div class="col-md-12">
            		<form action="proses/proses_kategori.php?aksi=input" method="post">
            			<div class="form-group">
            				<label>Kategori</label>
            				<input type="text" name="kategori" class="form-control">
            			</div>
            			<div class="form-group">
            				<button type="submit" name="submit" class="btn btn-primary pull-right">Tambah</button>
            			</div>
            		</form>
            	</div>
            	
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="asset/js/sb-admin-2.js"></script>

</body>

</html>
