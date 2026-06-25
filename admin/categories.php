<?php
$page_title = "Categories";
$active_page = "categories";
$search_placeholder = "Search users, roles, teams";
include __DIR__ . '/../pages/header.php';
?>
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-tags" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Classification</p>
                <h1 class="h3 mb-1">Categories</h1>
                <p class="text-muted mb-0">Search, review, and group products into structured categories.</p>
              </div>
            </div>
            <div class="heading-actions">
              <a class="btn btn-outline-secondary btn-sm" href="tables.php">
                <i class="bi bi-download" aria-hidden="true"></i> Export
              </a>
              <a class="btn btn-primary btn-sm" href="add-category.php">
                <i class="bi bi-folder-plus" aria-hidden="true"></i> Add Category
              </a>
            </div>
          </div>

          <section class="row g-3 mt-1" aria-label="Category summary">
            <div class="col-12 col-sm-6 col-xl-4">
              <article class="metric-card metric-primary">
                <div class="metric-top">
                  <span class="metric-label">Total Categories</span>
                  <span class="metric-icon"><i class="bi bi-tags" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">12</div>
                <div class="metric-meta">
                  <span class="text-success">+2 new</span>
                  <span>this quarter</span>
                </div>
              </article>
            </div>

            <div class="col-12 col-sm-6 col-xl-4">
              <article class="metric-card metric-success">
                <div class="metric-top">
                  <span class="metric-label">Active Categories</span>
                  <span class="metric-icon"><i class="bi bi-check2-circle" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">10</div>
                <div class="metric-meta">
                  <span class="text-success">83.3%</span>
                  <span>currently visible</span>
                </div>
              </article>
            </div>

            <div class="col-12 col-sm-12 col-xl-4">
              <article class="metric-card metric-warning">
                <div class="metric-top">
                  <span class="metric-label">Empty Categories</span>
                  <span class="metric-icon"><i class="bi bi-folder" aria-hidden="true"></i></span>
                </div>
                <div class="metric-value">2</div>
                <div class="metric-meta">
                  <span class="text-warning">No products assigned</span>
                  <span>requires attention</span>
                </div>
              </article>
            </div>
          </section>

          <section class="panel mt-3">
            <div class="panel-header">
              <div>
                <h2 class="h5 mb-1 section-title"><i class="bi bi-table" aria-hidden="true"></i><span>Category List</span></h2>
                <p class="text-muted mb-0">Search and organize product categories.</p>
              </div>
              <div class="d-flex align-items-center gap-2 flex-grow-1 justify-content-end">
                <input class="form-control form-control-sm table-search" type="search" placeholder="Search categories"
                  data-table-search="categoriesTable" aria-label="Search categories">
                <a class="btn btn-primary btn-sm text-nowrap" href="add-category.php">
                  <i class="bi bi-folder-plus" aria-hidden="true"></i> Add Category
                </a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-middle mb-0" id="categoriesTable" data-searchable-table>
                <thead>
                  <tr>
                    <th scope="col">Category Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Description</th>
                    <th scope="col">Products Count</th>
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
                        <strong>Electronics</strong>
                      </div>
                    </td>
                    <td><code class="text-dark">electronics</code></td>
                    <td>Smart devices, computing, phones, and peripherals.</td>
                    <td>428 items</td>
                    <td><span class="badge text-bg-success">Active</span></td>
                    <td class="text-end"><button class="btn btn-light btn-sm" type="button">Edit</button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <div class="avatar-img avatar-sm bg-light-subtle border d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; border-radius: 6px;">
                          <i class="bi bi-activity text-success" style="font-size: 1.2rem;"></i>
                        </div>
                        <strong>Apparel</strong>
                      </div>
                    </td>
                    <td><code class="text-dark">apparel</code></td>
                    <td>Clothing, shoes, footwear, and accessory fashion.</td>
                    <td>312 items</td>
                    <td><span class="badge text-bg-success">Active</span></td>
                    <td class="text-end"><button class="btn btn-light btn-sm" type="button">Edit</button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <div class="avatar-img avatar-sm bg-light-subtle border d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; border-radius: 6px;">
                          <i class="bi bi-house text-warning" style="font-size: 1.2rem;"></i>
                        </div>
                        <strong>Home & Kitchen</strong>
                      </div>
                    </td>
                    <td><code class="text-dark">home-kitchen</code></td>
                    <td>Furnishings, utensils, chairs, tables, and home decor.</td>
                    <td>184 items</td>
                    <td><span class="badge text-bg-success">Active</span></td>
                    <td class="text-end"><button class="btn btn-light btn-sm" type="button">Edit</button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <div class="avatar-img avatar-sm bg-light-subtle border d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; border-radius: 6px;">
                          <i class="bi bi-heart text-danger" style="font-size: 1.2rem;"></i>
                        </div>
                        <strong>Cosmetics</strong>
                      </div>
                    </td>
                    <td><code class="text-dark">cosmetics</code></td>
                    <td>Beauty items, makeup, skincare, and fragrance collections.</td>
                    <td>98 items</td>
                    <td><span class="badge text-bg-success">Active</span></td>
                    <td class="text-end"><button class="btn btn-light btn-sm" type="button">Edit</button></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <div class="avatar-img avatar-sm bg-light-subtle border d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; border-radius: 6px;">
                          <i class="bi bi-book text-info" style="font-size: 1.2rem;"></i>
                        </div>
                        <strong>Books</strong>
                      </div>
                    </td>
                    <td><code class="text-dark">books</code></td>
                    <td>Educational books, novels, guides, and magazines.</td>
                    <td>0 items</td>
                    <td><span class="badge text-bg-secondary">Inactive</span></td>
                    <td class="text-end"><button class="btn btn-light btn-sm" type="button">Edit</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 mt-3">
              <p class="text-muted small mb-0">Showing 1 to 5 of 12 categories</p>
              <nav aria-label="Categories pagination">
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
$footer_subtext = "Category control panel.";
include __DIR__ . '/../pages/footer.php';
?>
