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
<script src="js/purchase.js"></script>
<script src="js/common.js"></script>
<?php include('inc/container.php');?>
<main>
	<div class="container-fluid px-4">
		<h1 class="mt-4">Purchases</h1>
		<div class="d-flex justify-content-between">
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
				<li class="breadcrumb-item active">Purchases</li>
			</ol>
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
                <button type="button" name="addPurchase" id="addPurchase" class="btn btn-primary btn-sm rounded-0"><i class="far fa-plus-square"></i> Add Purchase</button>
			</div>
		</div>
		<div class="card mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 table-responsive">
                        <table id="purchaseList" class="table table-bordered table-striped">
                                <thead><tr>
                                    <th>ID</th> 									
									<th>Product</th>	
									<th>Quantity</th>	
									<th>Supplier</th>                                           
                                    <th>Action</th>
                                </tr></thead>
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
<div id="purchaseModal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-plus"></i> Add Purchase</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">                           
                    <form method="post" id="purchaseForm">
                    <input type="hidden" name="purchase_id" id="purchase_id" />
                    <input type="hidden" name="btn_action" id="btn_action" />
                        <div class="form-group">
                            <label>Product Name</label>
                            <select name="product" id="product" class="form-select rounded-0" required>
                                <option value="">Select Product</option>
                                <?php echo $inventory->productDropdownList();?>
                            </select>
                        </div>	                           
                        <div class="form-group">
                            <label>Product Quantity</label>
                            <div class="input-group">
                                <input type="text" name="quantity" id="quantity" class="form-control rounded-0" required pattern="[+-]?([0-9]*[.])?[0-9]+" />        
                            </div>
                        </div>                           
                        <div class="form-group">
                            <label>Supplier</label>
                            <select name="supplierid" id="supplierid" class="form-select rounded-0" required>
                                <option value="">Select Supplier</option>
                                <?php echo $inventory->supplierDropdownList();?>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="action" id="action" class="btn btn-primary btn-sm rounded-0" value="Add" form="purchaseForm"/>
                    <button type="button" class="btn btn-default border btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
    </div>
</div>
