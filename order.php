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
<script src="js/order.js"></script>
<script src="js/common.js"></script>
<?php include('inc/container.php');?>
<main>
	<div class="container-fluid px-4">
		<h1 class="mt-4">Orders</h1>
		<div class="d-flex justify-content-between">
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
				<li class="breadcrumb-item active">Orders</li>
			</ol>
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
                <button type="button" name="add" id="addOrder" class="btn btn-primary bg-success btn-sm rounded-0"><i class="far fa-plus-square"></i> New Order</button>
			</div>
		</div>
		<div class="card mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 table-responsive">
                        <table id="orderList" class="table table-bordered table-striped">
                                <thead><tr>
                                    <th>ID</th>      
									<th>Product</th>	
									<th>Total Item</th> 
									<th>Customer</th> 									
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
<div id="orderModal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-plus"></i> Add Order</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="orderForm">
                    <input type="hidden" name="order_id" id="order_id" />
                    <input type="hidden" name="btn_action" id="btn_action" />
                        <div class="mb-3">
                            <label>Product Name</label>
                            <select name="product" id="product" class="form-select rounded-0" required>
                                <option value="">Select Product</option>
                                <?php echo $inventory->productDropdownList();?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Total Item</label>
                            <div class="input-group">
                                <input type="text" name="shipped" id="shipped" class="form-control rounded-0" required />        
                            </div>
                        </div> 
                        <div class="mb-3">
                            <label>Customer Name</label>
                            <select name="customer" id="customer" class="form-select rounded-0" required>
                                <option value="">Select Customer</option>
                                <?php echo $inventory->customerDropdownList();?>
                            </select>
                        </div>	
                    </form>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="action" id="action" class="btn btn-primary rounded-0" value="Add" form="orderForm"/>
                    <button type="button" class="btn btn-danger btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
    </div>
</div>
