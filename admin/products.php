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
                    <th scope="col">SKU</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-end">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <div class="avatar-img avatar-sm bg-light-subtle border d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; border-radius: 6px;">
                          <i class="bi bi-phone text-primary" style="font-size: 1.2rem;"></i>
                        </div>
                        <div>
                          <p class="fw-semibold mb-0">iPhone 15 Pro</p>
                          <p class="text-muted small mb-0">256GB Space Gray</p>
                        </div>
                      </div>
                    </td>
                    <td><code class="text-dark">PHN-IPH15P-256</code></td>
                    <td>Electronics</td>
                    <td>$999.00</td>
                    <td>142 units</td>
                    <td><span class="badge text-bg-success">In Stock</span></td>
                    <td class="text-end"><button class="btn btn-light btn-sm" type="button">Edit</button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <div class="avatar-img avatar-sm bg-light-subtle border d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; border-radius: 6px;">
                          <i class="bi bi-activity text-success" style="font-size: 1.2rem;"></i>
                        </div>
                        <div>
                          <p class="fw-semibold mb-0">Nike Air Max</p>
                          <p class="text-muted small mb-0">Black & White Running Shoes</p>
                        </div>
                      </div>
                    </td>
                    <td><code class="text-dark">SHO-NJKAM-009</code></td>
                    <td>Apparel</td>
                    <td>$129.99</td>
                    <td>8 units</td>
                    <td><span class="badge text-bg-warning">Low Stock</span></td>
                    <td class="text-end"><button class="btn btn-light btn-sm" type="button">Edit</button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <div class="avatar-img avatar-sm bg-light-subtle border d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; border-radius: 6px;">
                          <i class="bi bi-house text-warning" style="font-size: 1.2rem;"></i>
                        </div>
                        <div>
                          <p class="fw-semibold mb-0">Ergonomic Office Chair</p>
                          <p class="text-muted small mb-0">High-back mesh workspace chair</p>
                        </div>
                      </div>
                    </td>
                    <td><code class="text-dark">FUR-ERGOCH-002</code></td>
                    <td>Home & Kitchen</td>
                    <td>$249.50</td>
                    <td>0 units</td>
                    <td><span class="badge text-bg-danger">Out of Stock</span></td>
                    <td class="text-end"><button class="btn btn-light btn-sm" type="button">Edit</button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <div class="avatar-img avatar-sm bg-light-subtle border d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; border-radius: 6px;">
                          <i class="bi bi-heart text-danger" style="font-size: 1.2rem;"></i>
                        </div>
                        <div>
                          <p class="fw-semibold mb-0">Matte Lipstick - Red</p>
                          <p class="text-muted small mb-0">Velvet finish long-lasting</p>
                        </div>
                      </div>
                    </td>
                    <td><code class="text-dark">COS-MATLIP-005</code></td>
                    <td>Cosmetics</td>
                    <td>$18.00</td>
                    <td>235 units</td>
                    <td><span class="badge text-bg-success">In Stock</span></td>
                    <td class="text-end"><button class="btn btn-light btn-sm" type="button">Edit</button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <div class="avatar-img avatar-sm bg-light-subtle border d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; border-radius: 6px;">
                          <i class="bi bi-keyboard text-info" style="font-size: 1.2rem;"></i>
                        </div>
                        <div>
                          <p class="fw-semibold mb-0">Wireless Keyboard</p>
                          <p class="text-muted small mb-0">Multi-device Bluetooth keyboard</p>
                        </div>
                      </div>
                    </td>
                    <td><code class="text-dark">TEC-WIRKEY-012</code></td>
                    <td>Electronics</td>
                    <td>$45.00</td>
                    <td>0 units</td>
                    <td><span class="badge text-bg-danger">Out of Stock</span></td>
                    <td class="text-end"><button class="btn btn-light btn-sm" type="button">Edit</button></td>
                  </tr>
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
