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
<script src="js/supplier.js"></script>
<script src="js/common.js"></script>
<?php include('inc/container.php');?>
<main>
	<div class="container-fluid px-4">
		<h1 class="mt-4">Supplier</h1>
		<div class="d-flex justify-content-between">
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
				<li class="breadcrumb-item active">Supplier</li>
			</ol>
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
				<button type="button" name="add" id="addSupplier" data-bs-toggle="modal" data-bs-target="#userModal" class="btn btn-primary bg-success btn-sm rounded-0"><i class="far fa-plus-square"></i> Add Supplier</button>
			</div>
		</div>
		<div class="card mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 table-responsive">
						<table id="supplierList" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>										
									<th>Name</th>
									<th>Mobile</th>
									<th>Address</th>
									<th>Status</th>										
									<th>Action</th>
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
<div id="supplierModal" class="modal fade">
	<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title"><i class="fa fa-plus"></i> Add Supplier</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<div class="modal-body">
					<form method="post" id="supplierForm">
						<input type="hidden" name="supplier_id" id="supplier_id" />
						<input type="hidden" name="btn_action" id="btn_action" />
						<div class="mb-3">
							<label>Supplier Name</label>
							<input type="text" name="supplier_name" id="supplier_name" class="form-control rounded-0" required />
						</div>	
						<div class="mb-3">
							<label>Mobile</label>
							<input type="text" name="mobile" id="mobile" class="form-control rounded-0" required />
						</div>								
						<div class="mb-3">
							<label>Address</label>
							<textarea name="address" id="address" class="form-control rounded-0" rows="5" required></textarea>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<input type="submit" name="action" id="action" class="btn btn-primary rounded-0 btn-sm" value="addSupplier" form="supplierForm"/>
					<button type="button" class="btn btn-danger btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
	</div>
</div>
