<?php 
ob_start();
session_start();
include('inc/header.php');
include 'Inventory.php';
$inventory = new Inventory();
$inventory->checkLogin();
?>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/common.js"></script>
<?php include('inc/container.php');?>
<main>
	<div class="container-fluid px-4">
		<h1 class="mt-4">Dashboard</h1>
		<!-- <ol class="breadcrumb mb-4"> -->
			<!-- <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li> -->
			<!-- <li class="breadcrumb-item active">Sidenav Light</li> -->
		<!-- </ol> -->
		<div class="card mb-4">
			<div class="card-body">
				Hello, <?php echo $_SESSION['name']; ?>
			</div>
		</div>
	</div>
</main>
<?php include('inc/footer.php');?>
</div>
</div>	






