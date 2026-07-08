<?php
$page_title = "Add Product";
$active_page = "add-product";
$search_placeholder = "Search users, orders, reports";
include __DIR__ . '/../pages/header.php';
require '../connection/conn.php';
global $conn;
$id = $_GET['id'];
$select = "SELECT * FROM tbl_product WHERE id=$id";
$ex = $conn->query($select);
$row = mysqli_fetch_assoc($ex);
?>
<div class="page-heading">
    <div class="page-heading-copy">
        <span class="page-icon"><i class="bi bi-plus-square" aria-hidden="true"></i></span>
        <div>
            <p class="eyebrow mb-1">Inventory</p>
            <h1 class="h3 mb-1">Add Product</h1>
            <p class="text-muted mb-0">Create a new product listing in your inventory.</p>
        </div>
    </div>
    <div class="heading-actions">
        <a class="btn btn-outline-secondary btn-sm" href="products.php">
            <i class="bi bi-arrow-left" aria-hidden="true"></i> Back to Products
        </a>
    </div>
</div>

<section class="row g-3">
    <div class="col-12">
        <form class="panel needs-validation" action="updateProduct.php" method="post" enctype="multipart/form-data" novalidate>
            <div class="panel-header">
                <div>
                    <h2 class="h5 mb-1 section-title"><i class="bi bi-plus-square" aria-hidden="true"></i><span>Product Information</span></h2>
                    <p class="text-muted mb-0">Add details for the new inventory item.</p>
                </div>
            </div>
            <input type="hidden" name="id" value="<?= $row['id'] ?>" >
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label" for="productName">Product Name</label>
                    <input class="form-control" name="pro_name" value="<?= $row['pro_name'] ?>" id="productName" type="text" required>
                    <div class="invalid-feedback">Product name is required.</div>
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="category">Category</label>
                    <select class="form-select" name="cate_id" id="category" required>
                        <option value="" disabled selected> ---other---</option>
                        <?php
                        $cate = 'select * from tbl_category';
                        $exx = $conn->query($cate);
                        while ($roww = mysqli_fetch_assoc($exx)) {
                        ?>
                            <option
                                value="<?= $roww['id'] ?>"
                                <?= $roww['id'] == $row['cate_id'] ? 'selected' : '' ?>>
                                <?= $roww['cate_name'] ?>
                            </option> 
                        <?php
                        }
                    ?>
                    </select>
                    <div class="invalid-feedback">Please choose a category.</div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="price">Price ($)</label>
                    <input class="form-control" value="<?= $row['price'] ?>" name="price" id="price" type="number" step="0.01" min="0" required>
                    <div class="invalid-feedback">Enter a valid price.</div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="stock">Stock Quantity</label>
                    <input class="form-control" name="qty" value="<?= $row['qty'] ?>" id="stock" type="number" min="0" required>
                    <div class="invalid-feedback">Enter stock quantity.</div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="stock">Image</label>
                    <input class="form-control" name="file"  type="file" >
              
                </div>
                <div class="col-12">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control"  name="des" id="description" rows="4" placeholder="Enter product specifications, descriptions, and notes"><?= $row['description'] ?></textarea>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-end gap-2 mt-4">
                <a class="btn btn-outline-secondary" href="products.php">Cancel</a>
                <button name="btnSubmit" class="btn btn-primary" type="submit">
                    <i class="bi bi-check-square" aria-hidden="true"></i> Create Product
                </button>
            </div>
        </form>
    </div>
</section>
<?php
$footer_subtext = "Validated product entry.";
include __DIR__ . '/../pages/footer.php';
?>