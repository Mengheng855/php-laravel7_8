<?php
$page_title = "Products";
$active_page = "products";
$search_placeholder = "Search users, roles, teams";
include __DIR__ . '/../pages/header.php';
?>
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-box-seam" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Inventory</p>
                <h1 class="h3 mb-1">Products</h1>
                <p class="text-muted mb-0">Search, review, and manage inventory items and stock levels.</p>
              </div>
            </div>
            <div class="heading-actions">
              <a class="btn btn-outline-secondary btn-sm" href="tables.php">
                <i class="bi bi-download" aria-hidden="true"></i> Export
              </a>
              <a class="btn btn-primary btn-sm" href="add-product.php">
                <i class="bi bi-plus-square" aria-hidden="true"></i> Add Product
              </a>
            </div>
          </div>

          <section class="row g-3 mt-1" aria-label="Product summary">
            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-primary">
                <div class="metric-top">
                  <span class="metric-label">Total Products</span>
                  <span class="metric-icon"><i class="bi bi-box-seam" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">1,482</div>
                <div class="metric-meta">
                  <span class="text-success">+12.4%</span>
                  <span>this month</span>
                </div>
              </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-success">
                <div class="metric-top">
                  <span class="metric-label">In Stock</span>
                  <span class="metric-icon"><i class="bi bi-check2-circle" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">1,390</div>
                <div class="metric-meta">
                  <span class="text-success">93.7%</span>
                  <span>healthy stock</span>
                </div>
              </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-warning">
                <div class="metric-top">
                  <span class="metric-label">Low Stock</span>
                  <span class="metric-icon"><i class="bi bi-exclamation-triangle" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">64</div>
                <div class="metric-meta">
                  <span class="text-warning">Needs attention</span>
                  <span>reorder suggested</span>
                </div>
              </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
              <article class="metric-card metric-danger">
                <div class="metric-top">
                  <span class="metric-label">Out of Stock</span>
                  <span class="metric-icon"><i class="bi bi-x-circle" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">28</div>
                <div class="metric-meta">
                  <span class="text-danger">Action required</span>
                  <span>immediate restocking</span>
                </div>
              </article>
            </div>
          </section>

          <section class="panel mt-3">
            <div class="panel-header">
              <div>
                <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Product List</span></h2>
                <p class="text-muted mb-0">Search, review, and manage inventory items.</p>
              </div>
              <div class="d-flex align-items-center gap-2 flex-grow-1 justify-content-end">
                <input class="form-control form-control-sm table-search" type="search" placeholder="Search products"
                  data-table-search="productsTable" aria-label="Search products">
                <a class="btn btn-primary btn-sm text-nowrap" href="add-product.php">
                  <i class="bi bi-plus-square" aria-hidden="true"></i> Add Product
                </a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-middle mb-0" id="productsTable" data-searchable-table>
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Admin</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    
                    <th scope="col" class="text-end">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    require '../connection/conn.php';
                    global $conn;
                    $select="SELECT p.id, p.pro_name, p.description, p.price, p.qty, p.image,
                    p.created_at, p.updated_at, c.cate_name, u.name
                    FROM tbl_product as p
                    INNER JOIN tbl_category as c
                    ON p.cate_id=c.id
                    INNER JOIN tbl_user as u
                    ON p.user_id=u.id
                    ";
                    $ex=$conn->query($select);
                    
                    while($row=mysqli_fetch_assoc($ex)){
                      echo '
                        <tr>
                          <td>'.$row['id'].'</td>
                          <td>'.$row['pro_name'].'</td>
                          <td>
                            <img src="'.$row['image'].'" width="30px" height="30px" alt="">
                          </td>
                          <td>'.$row['cate_name'].'</td>
                          <td>'.$row['price'].'</td>
                          <td>'.$row['qty'].'</td>
                          <td>'.$row['name'].'</td>
                          <td>'.$row['created_at'].'</td>
                          <td>'.$row['updated_at'].'</td>
                          <td>
                            <a href="deleteProduct.php?id='.$row['id'].'" onclick="return confirm(\'Are you sure?\')" class="btn btn-outline-danger btn-sm" type="button">Delete</a>
                            <a href="edit-product.php?id='.$row['id'].'" class="btn btn-outline-warning btn-sm" type="button">Edit</a>
                          </td>
      
                        </tr>
                      ';
                    }
                   ?>
                </tbody>
              </table>
            </div>
            <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mt-3">
              <p class="text-muted small mb-0">Showing 1 to 5 of 124 products</p>
              <nav aria-label="Products pagination">
                <ul class="pagination pagination-sm mb-0">
                  <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>
            </div>
          </section>
<?php
$footer_subtext = "Inventory control panel.";
include __DIR__ . '/../pages/footer.php';
?>
