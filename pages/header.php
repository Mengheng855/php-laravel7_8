<?php
  session_start();
  if(!isset($_SESSION['is_admin'])){
    header('location: ../auth/login.php');
    exit;
  }
  if($_SESSION['is_admin']!=1){
    header('location: ../index.php');
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<?php
$active_page = isset($active_page) ? $active_page : '';
$layout_variant = isset($layout_variant) ? $layout_variant : 'admin';
$is_store_layout = $layout_variant === 'store';
$brand_title = isset($brand_title) ? $brand_title : ($is_store_layout ? 'ByteStore' : 'adminHMD');
$brand_subtitle = isset($brand_subtitle) ? $brand_subtitle : ($is_store_layout ? 'Computer Sales' : 'Admin Template');
$brand_icon = isset($brand_icon) ? $brand_icon : ($is_store_layout ? 'bi-pc-display' : 'bi-grid-1x2-fill');
$home_link = isset($home_link) ? $home_link : ($is_store_layout ? 'index.php' : 'home.php');
$profile_name = isset($profile_name) ? $profile_name : ($is_store_layout ? 'Sokha Dara' : 'Admin Hasan');
$profile_workspace = isset($profile_workspace) ? $profile_workspace : ($is_store_layout ? 'Store Manager' : 'Active Workspace');
$profile_avatar = isset($profile_avatar) ? $profile_avatar : '../assets/images/avatar/avatar.jpg';
$profile_link = isset($profile_link) ? $profile_link : ($is_store_layout ? 'index.php#customers' : 'profile.php');
$settings_link = isset($settings_link) ? $settings_link : ($is_store_layout ? 'index.php#stock' : 'settings.php');
$signout_link = isset($signout_link) ? $signout_link : ($is_store_layout ? 'index.php' : 'login.php');
$sidebar_status_text = isset($sidebar_status_text) ? $sidebar_status_text : ($is_store_layout ? 'Ready to shop' : 'System running smoothly');
$default_search = $is_store_layout ? 'Search laptops, desktops, orders' : 'Search users, orders, reports';
$nav_items = isset($nav_items) ? $nav_items : (
  $is_store_layout
    ? [
      ['key' => 'store-dashboard', 'href' => 'index.php', 'icon' => 'bi-speedometer2', 'label' => 'Dashboard'],
      ['key' => 'catalog', 'href' => 'index.php#catalog', 'icon' => 'bi-laptop', 'label' => 'Catalog'],
      ['key' => 'orders', 'href' => 'index.php#orders', 'icon' => 'bi-bag-check', 'label' => 'Orders'],
      ['key' => 'customers', 'href' => 'index.php#customers', 'icon' => 'bi-people', 'label' => 'Customers'],
      ['key' => 'stock', 'href' => 'index.php#stock', 'icon' => 'bi-boxes', 'label' => 'Stock'],
      ['key' => 'promotions', 'href' => 'index.php#promotions', 'icon' => 'bi-percent', 'label' => 'Promotions'],
    ]
    : [
      ['key' => 'dashboard', 'href' => 'home.php', 'icon' => 'bi-speedometer2', 'label' => 'Dashboard'],
      ['key' => 'users', 'href' => 'users.php', 'icon' => 'bi-people', 'label' => 'Users'],
      ['key' => 'add-user', 'href' => 'add-user.php', 'icon' => 'bi-person-plus', 'label' => 'Add User'],
      ['key' => 'products', 'href' => 'products.php', 'icon' => 'bi-box-seam', 'label' => 'Products'],
      ['key' => 'add-product', 'href' => 'add-product.php', 'icon' => 'bi-plus-square', 'label' => 'Add Product'],
      ['key' => 'categories', 'href' => 'categories.php', 'icon' => 'bi-tags', 'label' => 'Categories'],
      ['key' => 'add-category', 'href' => 'add-category.php', 'icon' => 'bi-folder-plus', 'label' => 'Add Category'],
    ]
);
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="adminHMD professional admin dashboard template">
  <title><?php echo isset($page_title) ? $page_title . " | " . $brand_title : $brand_title; ?></title>

  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <div class="admin-shell">
    <div class="sidebar-backdrop" data-sidebar-close></div>

    <aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
      <div class="sidebar-header">
        <a class="brand-mark" href="<?php echo $home_link; ?>" aria-label="<?php echo $brand_title; ?> dashboard">
          <span class="brand-icon"><i class="bi <?php echo $brand_icon; ?>" aria-hidden="true"></i></span>
          <span class="brand-copy">
            <span class="brand-title"><?php echo $brand_title; ?></span>
            <span class="brand-subtitle"><?php echo $brand_subtitle; ?></span>
          </span>
        </a>
      </div>

      <nav class="sidebar-nav">
        <?php foreach ($nav_items as $nav_item) : ?>
          <a class="nav-link<?php echo ($active_page == $nav_item['key']) ? ' active' : ''; ?>" href="<?php echo $nav_item['href']; ?>"<?php echo ($active_page == $nav_item['key']) ? ' aria-current="page"' : ''; ?>>
            <span class="nav-icon"><i class="bi <?php echo $nav_item['icon']; ?>" aria-hidden="true"></i></span>
            <span class="nav-text"><?php echo $nav_item['label']; ?></span>
          </a>
        <?php endforeach; ?>
      </nav>

      <div class="sidebar-user">
        <img class="avatar-img avatar-md sidebar-user-avatar" src="<?php echo $profile_avatar; ?>"
          alt="<?php echo $profile_name; ?>">
        <strong><?php echo $profile_name; ?></strong>
        <small><?php echo $profile_workspace; ?></small>
      </div>

      <div class="sidebar-footer">
        <span class="status-dot"></span>
        <span class="sidebar-footer-text"><?php echo $sidebar_status_text; ?></span>
      </div>
    </aside>

    <div class="admin-main">
      <nav class="navbar admin-navbar navbar-expand bg-white">
        <div class="container-fluid px-3 px-lg-4">
          <button class="sidebar-toggle" type="button" data-sidebar-toggle aria-controls="adminSidebar"
            aria-expanded="true" aria-label="Toggle sidebar">
            <span></span>
            <span></span>
            <span></span>
          </button>

          <form class="d-none d-md-flex ms-3 flex-grow-1" role="search">
            <input class="form-control search-input" type="search" placeholder="<?php echo isset($search_placeholder) ? $search_placeholder : $default_search; ?>"
              aria-label="Search">
          </form>

          <div class="navbar-actions ms-auto">
            <button class="icon-button theme-toggle" type="button" data-theme-toggle aria-label="Switch color theme"
              title="Switch color theme">
              <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
            </button>
            <div class="dropdown">
              <button class="icon-button" type="button" data-bs-toggle="dropdown" aria-expanded="false"
                aria-label="Notifications">
                <span class="notification-dot"></span>
                <i class="bi bi-bell" aria-hidden="true"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end notification-menu">
                <div class="dropdown-header fw-bold text-body">Notifications</div>
                <?php if ($is_store_layout) : ?>
                  <a class="dropdown-item" href="index.php#orders">
                    <span class="notification-title">Gaming laptop deal is live</span>
                    <span class="notification-time">4 minutes ago</span>
                  </a>
                  <a class="dropdown-item" href="index.php#stock">
                    <span class="notification-title">New desktop bundle added</span>
                    <span class="notification-time">32 minutes ago</span>
                  </a>
                  <a class="dropdown-item" href="index.php#promotions">
                    <span class="notification-title">Weekend monitor discount</span>
                    <span class="notification-time">1 hour ago</span>
                  </a>
                <?php else : ?>
                  <a class="dropdown-item" href="users.php">
                    <span class="notification-title">New user registered</span>
                    <span class="notification-time">4 minutes ago</span>
                  </a>
                  <a class="dropdown-item" href="charts.php">
                    <span class="notification-title">Revenue target reached</span>
                    <span class="notification-time">32 minutes ago</span>
                  </a>
                  <a class="dropdown-item" href="settings.php">
                    <span class="notification-title">Security review completed</span>
                    <span class="notification-time">1 hour ago</span>
                  </a>
                <?php endif; ?>
              </div>
            </div>

            <div class="dropdown">
              <button class="profile-button dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img class="avatar-img avatar-sm" src="<?php echo $profile_avatar; ?>" alt="<?php echo $profile_name; ?>">
                <span class="profile-name d-none d-sm-inline"><?php echo $profile_name; ?></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="<?php echo $profile_link; ?>">Profile</a></li>
                <li><a class="dropdown-item" href="<?php echo $settings_link; ?>">Account settings</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="../auth/logout.php">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
