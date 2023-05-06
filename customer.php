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
<script src="js/customer.js"></script>
<script src="js/common.js"></script>
<?php include('inc/container.php');?>
<main>
	<div class="container-fluid px-4">
		<h1 class="mt-4">Customer</h1>
		<div class="d-flex justify-content-between">
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
				<li class="breadcrumb-item active">Customer</li>
			</ol>
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
				<button type="button" name="add" id="addCustomer" data-bs-toggle="modal" data-bs-target="#userModal" class="btn btn-primary bg-gradient btn-sm rounded-0"><i class="far fa-plus-square"></i> New Customer</button>
			</div>
		</div>
		<div class="card mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 table-responsive">
						<table id="customerList" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>										
									<th>Name</th>
									<th>Address</th>
									<th>Mobile</th>
									<th>Balance</th>
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
<div id="customerModal" class="modal">
	<div class="modal-dialog modal-dialog-centered  rounded-0">
			<div class="modal-content rounded-0">
				<div class="modal-header">
					<h4 class="modal-title"><i class="fa fa-plus"></i> Add Customer</h4>
					<button type="button" class="btn-close text-xs" data-bs-dismiss="modal"></button>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<form method="post" id="customerForm">
							<input type="hidden" name="userid" id="userid" />
							<input type="hidden" name="btn_action" id="btn_action" value="customerAdd" />
							<div class="mb-3">
								<label class="control-label">Name</label>
								<input type="text" name="cname" id="cname" class="form-control rounded-0" required />
							</div>
							<div class="mb-3">
								<label class="control-label">Mobile</label>
								<input type="number" name="mobile" id="mobile" class="form-control rounded-0" required />
							</div>
							<div class="mb-3">
								<label class="control-label">Balance</label>
								<input type="number" name="balance" id="balance" class="form-control rounded-0" required />
							</div>
							<div class="mb-3">
								<label class="control-label">Address</label>
								<textarea name="address" id="address" class="form-control rounded-0" rows="5" required></textarea>
							</div>
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" name="action" id="action" class="btn btn-sm rounded-0 btn-primary" form="customerForm" >Save</button>
					<button type="button" class="btn btn-sm rounded-0 btn-default border" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
	</div>
</div>
