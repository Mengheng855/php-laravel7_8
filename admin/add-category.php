<?php
$page_title = "Add Category";
$active_page = "add-category";
$search_placeholder = "Search users, orders, reports";
include __DIR__ . '/../pages/header.php';
?>
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-folder-plus" aria-hidden="true"></i></span>
              <div>
                <p class="eyebrow mb-1">Classification</p>
                <h1 class="h3 mb-1">Add Category</h1>
                <p class="text-muted mb-0">Create a new product classification group.</p>
              </div>
            </div>
            <div class="heading-actions">
              <a class="btn btn-outline-secondary btn-sm" href="categories.php">
                <i class="bi bi-arrow-left" aria-hidden="true"></i> Back to Categories
              </a>
            </div>
          </div>

          <section class="row g-3">
            <div class="col-12">
              <form class="panel needs-validation" novalidate>
                <div class="panel-header">
                  <div>
                    <h2 class="h5 mb-1 section-title"><i class="bi bi-folder-plus" aria-hidden="true"></i><span>Category Information</span></h2>
                    <p class="text-muted mb-0">Create a new product catalog category.</p>
                  </div>
                </div>
                <div class="row g-3">
                  <div class="col-md-6">
                    <label class="form-label" for="categoryName">Category Name</label>
                    <input class="form-control" id="categoryName" type="text" required>
                    <div class="invalid-feedback">Category name is required.</div>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="slug">Slug</label>
                    <input class="form-control" id="slug" type="text" required>
                    <div class="invalid-feedback">Slug is required.</div>
                  </div>
                  <div class="col-md-12">
                    <label class="form-label" for="status">Status</label>
                    <select class="form-select" id="status" required>
                      <option value="">Choose status</option>
                      <option>Active</option>
                      <option>Inactive</option>
                    </select>
                    <div class="invalid-feedback">Please choose a status.</div>
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" id="description" rows="4" placeholder="Brief explanation of what products fit into this category"></textarea>
                  </div>
                </div>
                <div class="d-flex flex-wrap justify-content-end gap-2 mt-4">
                  <a class="btn btn-outline-secondary" href="categories.php">Cancel</a>
                  <button class="btn btn-primary" type="submit">
                    <i class="bi bi-check-circle" aria-hidden="true"></i> Create Category
                  </button>
                </div>
              </form>
            </div>
          </section>
<?php
$footer_subtext = "Validated category entry.";
include __DIR__ . '/../pages/footer.php';
?>
