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
		<h1 class="mt-4">Inventory</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
			<li class="breadcrumb-item active">Inventory</li>
		</ol>
		<div class="card mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 table-responsive">
						<table id="inventoryDetails" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>#</th>      
									<th>Product/Code</th>      
									<th>Starting Inventory</th> 
									<th>Inventory Recieved</th> 									
									<th>Inventory Shipped</th>
									<th>Inventory on Hand</th>								
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php include('inc/footer.php');?>
</div>
</div>	