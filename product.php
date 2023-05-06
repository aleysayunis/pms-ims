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
<script src="js/product.js"></script>
<script src="js/common.js"></script>
<?php include('inc/container.php');?>
<main>
	<div class="container-fluid px-4">
		<h1 class="mt-4">Products</h1>
		<div class="d-flex justify-content-between">
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
				<li class="breadcrumb-item active">Products</li>
			</ol>
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
                <button type="button" name="add" id="addProduct" class="btn btn-primary bg-gradient rounded-0 btn-sm"><i class="far fa-plus-square"></i> Add Product</button>
			</div>
		</div>
		<div class="card mb-4">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 table-responsive">
                        <table id="productList" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>      
                                    <th>Category</th>	
                                    <th>Brand Name</th>									
                                    <th>Product Name</th>
                                    <th>Product Model</th>
                                    <th>Quantity</th>
                                    <th>Supplier Name</th>
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
<div id="productModal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-plus"></i> Add Product</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="productForm">
                        <input type="hidden" name="pid" id="pid" />
                        <input type="hidden" name="btn_action" id="btn_action" />
                        <div class="form-group">
                            <label>Select Category</label>
                            <select name="categoryid" id="categoryid" class="form-select rounded-0" required>
                                <option value="">Select Category</option>
                                <?php echo $inventory->categoryDropdownList();?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select Brand</label>
                            <select name="brandid" id="brandid" class="form-select rounded-0" required>
                                <option value="">Select Brand</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="pname" id="pname" class="form-control rounded-0" required />
                        </div>
                        <div class="form-group">
                            <label>Product Model</label>
                            <input type="text" name="pmodel" id="pmodel" class="form-control rounded-0" required />
                        </div>
                        <div class="form-group">
                            <label>Product Description</label>
                            <textarea name="description" id="description" class="form-control rounded-0" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Product Quantity</label>
                            <div class="input-group">
                                <input type="text" name="quantity" id="quantity" class="form-control rounded-0" required pattern="[+-]?([0-9]*[.])?[0-9]+" /> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Product Base Price</label>
                            <input type="text" name="base_price" id="base_price" class="form-control rounded-0" required pattern="[+-]?([0-9]*[.])?[0-9]+" />
                        </div>
                        <div class="form-group">
                            <label>Product Tax (%)</label>
                            <input type="text" name="tax" id="tax" class="form-control rounded-0" required pattern="[+-]?([0-9]*[.])?[0-9]+" />
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
                    <input type="submit" name="action" id="action" class="btn btn-primary rounded-0 btn-sm" value="Add" form="productForm"/>
                    <button type="button" class="btn btn-default border rounded-0 btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
    </div>
</div>
<div id="productViewModal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <form method="post" id="product_form">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-th-list"></i> Product Details</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <Div id="productDetails"></Div>
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>
