<?php 
ob_start();
session_start();
include('inc/header.php');
include 'Inventory.php';
$inventory = new Inventory();
$inventory->checkLogin();
?>

<link href="css/design5.css" rel="stylesheet" />
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/brand.js"></script>
<script src="js/common.js"></script>
<?php include('inc/container.php');?>
<main>
	<div class="container-fluid px-4">
		<h1 class="mt-4">Brand</h1>
		<div class="d-flex justify-content-between">
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
				<li class="breadcrumb-item active">Brand</li>
			</ol>
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
				<button type="button" name="add" id="addBrand" class="btn btn-primary bg-success btn-sm rounded-0"><i class="far fa-plus-square"></i> New Brand</button>
			</div>
		</div>
		<div class="card mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 table-responsive">
						<table id="brandList" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Brand Name</th>
									<th>Category</th>
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
<div id="brandModal" class="modal fade">
	<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title"><i class="fa fa-plus"></i> Add Brand</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<div class="modal-body">
					<form method="post" id="brandForm">
					<input type="hidden" name="id" id="id" />
					<input type="hidden" name="btn_action" id="btn_action" />
						<div class="mb-3">
							<select name="categoryid" id="categoryid" class="form-select rounde-0" required>
								<option value="">Select Category</option>
								<?php echo $inventory->categoryDropdownList(); ?>
							</select>
						</div>
						<div class="mb-3">
							<label>Enter Brand Name</label>
							<input type="text" name="bname" id="bname" class="form-control  rounde-0" required />
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<input type="submit" name="action" id="action" class="btn btn-primary btn-sm rounded-0" value="Add" form="brandForm"/>
					<button type="button" class="btn btn-danger btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
	</div>
</div>
