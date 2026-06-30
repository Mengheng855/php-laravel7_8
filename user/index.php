<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ByteStore | Computer Shop</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <style>
    :root {
      --shop-primary: #006b63;
      --shop-primary-dark: #003f3b;
      --shop-accent: #ff7a1a;
      --shop-text: #003b37;
      --shop-muted: #46716d;
      --shop-border: #d7e7e4;
      --shop-bg: #f7fbfa;
      --shop-surface: #ffffff;
      --shop-shadow: 0 18px 44px rgba(0, 63, 59, 0.08);
    }

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      background: var(--shop-bg);
      color: var(--shop-text);
      font-family: "Segoe UI", Arial, sans-serif;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    .shop-container {
      width: min(1240px, calc(100% - 2rem));
      margin: 0 auto;
    }

    .site-header {
      position: sticky;
      top: 0;
      z-index: 10;
      border-bottom: 1px solid var(--shop-border);
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(14px);
    }

    .site-nav {
      min-height: 76px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
    }

    .brand {
      display: inline-flex;
      align-items: center;
      gap: 0.65rem;
      font-size: 1.35rem;
      font-weight: 900;
      color: var(--shop-primary-dark);
      letter-spacing: 0;
    }

    .brand-icon {
      width: 36px;
      height: 36px;
      display: grid;
      place-items: center;
      border-radius: 8px;
      background: linear-gradient(135deg, var(--shop-primary), #0ea5a0);
      color: #ffffff;
      font-size: 1.15rem;
    }

    .brand span span {
      color: var(--shop-accent);
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 1.6rem;
      color: var(--shop-primary-dark);
      font-weight: 800;
    }

    .nav-links a {
      transition: color 0.16s ease;
    }

    .nav-links a:hover,
    .nav-links a:focus {
      color: var(--shop-primary);
    }

    .nav-actions {
      display: flex;
      align-items: center;
      gap: 0.9rem;
    }

    .login-link {
      color: var(--shop-primary-dark);
      font-weight: 900;
      transition: color 0.16s ease;
    }

    .login-link:hover,
    .login-link:focus {
      color: var(--shop-primary);
    }

    .register-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 42px;
      padding: 0.62rem 1.1rem;
      border-radius: 8px;
      background: var(--shop-primary);
      color: #ffffff;
      font-weight: 900;
      box-shadow: 0 10px 22px rgba(0, 107, 99, 0.16);
      transition: background 0.16s ease, transform 0.16s ease, box-shadow 0.16s ease;
    }

    .register-btn:hover,
    .register-btn:focus {
      background: var(--shop-primary-dark);
      color: #ffffff;
      transform: translateY(-1px);
      box-shadow: 0 14px 28px rgba(0, 63, 59, 0.2);
    }

    .hero {
      position: relative;
      min-height: 464px;
      display: grid;
      align-items: center;
      overflow: hidden;
      border-bottom: 1px solid var(--shop-border);
      background:
        linear-gradient(90deg, rgba(247, 251, 250, 0.97) 0%, rgba(247, 251, 250, 0.9) 46%, rgba(247, 251, 250, 0.62) 100%),
        url("../assets/images/ecommerce/product-10.jpg") center / cover no-repeat;
    }

    .hero-grid {
      display: grid;
      grid-template-columns: minmax(0, 1.05fr) minmax(320px, 0.95fr);
      gap: 2rem;
      align-items: center;
      padding: 4rem 0;
    }

    .eyebrow {
      margin-bottom: 0.9rem;
      color: var(--shop-primary);
      font-size: 0.86rem;
      font-weight: 900;
      text-transform: uppercase;
    }

    .hero h1 {
      max-width: 640px;
      margin-bottom: 1rem;
      color: var(--shop-primary-dark);
      font-size: clamp(2.7rem, 6vw, 5.05rem);
      font-weight: 950;
      line-height: 0.96;
      letter-spacing: 0;
    }

    .hero p {
      max-width: 620px;
      margin-bottom: 1.55rem;
      color: var(--shop-text);
      font-size: 1.08rem;
      font-weight: 750;
    }

    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 0.75rem;
    }

    .btn-shop {
      min-height: 46px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.45rem;
      padding: 0.7rem 1.25rem;
      border-radius: 6px;
      border: 1px solid var(--shop-primary);
      font-weight: 900;
      transition: transform 0.16s ease, box-shadow 0.16s ease, background 0.16s ease;
    }

    .btn-shop:hover,
    .btn-shop:focus {
      transform: translateY(-1px);
      box-shadow: 0 12px 24px rgba(0, 107, 99, 0.18);
    }

    .btn-filled {
      background: var(--shop-primary);
      color: #ffffff;
    }

    .btn-outline {
      background: #ffffff;
      color: var(--shop-primary-dark);
    }

    .hero-card {
      justify-self: end;
      width: min(100%, 544px);
      overflow: hidden;
      border: 1px solid var(--shop-border);
      border-radius: 8px;
      background: #ffffff;
      box-shadow: var(--shop-shadow);
    }

    .hero-card img {
      width: 100%;
      aspect-ratio: 16 / 9;
      display: block;
      object-fit: cover;
      object-position: center;
    }

    .section {
      padding: 2.8rem 0;
    }

    .section-head {
      display: flex;
      align-items: end;
      justify-content: space-between;
      gap: 1rem;
      margin-bottom: 1.4rem;
    }

    .section-head h2 {
      margin: 0 0 0.45rem;
      color: var(--shop-primary-dark);
      font-size: clamp(1.75rem, 3vw, 2.25rem);
      font-weight: 950;
      letter-spacing: 0;
    }

    .section-head p {
      margin: 0;
      color: var(--shop-muted);
      font-weight: 650;
    }

    .category-filter {
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-end;
      gap: 0.5rem;
    }

    .category-filter button {
      min-height: 38px;
      padding: 0.45rem 0.85rem;
      border: 1px solid var(--shop-primary);
      border-radius: 6px;
      background: #ffffff;
      color: var(--shop-primary-dark);
      font-weight: 900;
    }

    .category-filter button.active {
      background: var(--shop-primary);
      color: #ffffff;
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(4, minmax(0, 1fr));
      gap: 1rem;
    }

    .product-card {
      overflow: hidden;
      border: 1px solid var(--shop-border);
      border-radius: 8px;
      background: var(--shop-surface);
      box-shadow: 0 8px 22px rgba(0, 63, 59, 0.04);
      transition: transform 0.16s ease, box-shadow 0.16s ease, border-color 0.16s ease;
    }

    .product-card:hover {
      transform: translateY(-3px);
      border-color: #9ccfca;
      box-shadow: var(--shop-shadow);
    }

    .product-media {
      position: relative;
      margin: 0.75rem 0.75rem 0;
      overflow: hidden;
      border: 1px solid var(--shop-border);
      border-radius: 6px;
      background: #eff7f6;
    }

    .product-media img {
      width: 100%;
      aspect-ratio: 4 / 3;
      display: block;
      object-fit: cover;
      object-position: center;
    }

    .tag {
      position: absolute;
      right: 0.6rem;
      bottom: 0.6rem;
      padding: 0.32rem 0.52rem;
      border-radius: 6px;
      background: var(--shop-primary);
      color: #ffffff;
      font-size: 0.78rem;
      font-weight: 900;
    }

    .product-body {
      padding: 0.85rem;
    }

    .product-body h3 {
      margin: 0 0 0.35rem;
      color: #002d2a;
      font-size: 1.05rem;
      font-weight: 950;
    }

    .product-body p {
      min-height: 48px;
      margin: 0 0 0.8rem;
      color: var(--shop-muted);
      font-size: 0.94rem;
      font-weight: 650;
    }

    .product-bottom {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 0.75rem;
    }

    .price {
      color: var(--shop-primary-dark);
      font-size: 1.15rem;
      font-weight: 950;
    }

    .add-btn {
      width: 38px;
      height: 38px;
      display: grid;
      place-items: center;
      border: 1px solid var(--shop-primary);
      border-radius: 6px;
      background: #ffffff;
      color: var(--shop-primary);
    }

    .promo-band {
      display: grid;
      grid-template-columns: minmax(0, 1fr) auto;
      gap: 1rem;
      align-items: center;
      margin-bottom: 3rem;
      padding: 1.25rem;
      border: 1px solid var(--shop-border);
      border-radius: 8px;
      background: linear-gradient(135deg, rgba(0, 107, 99, 0.1), rgba(255, 122, 26, 0.08)), #ffffff;
    }

    .promo-band h2 {
      margin: 0 0 0.35rem;
      color: var(--shop-primary-dark);
      font-weight: 950;
    }

    .promo-band p {
      margin: 0;
      color: var(--shop-muted);
      font-weight: 650;
    }

    .site-footer {
      border-top: 1px solid var(--shop-border);
      background: #ffffff;
      color: var(--shop-muted);
      font-weight: 650;
    }

    .footer-main {
      display: grid;
      grid-template-columns: minmax(260px, 1.25fr) 0.7fr 0.7fr minmax(270px, 0.9fr);
      gap: 2rem;
      padding: 2.4rem 0;
      align-items: start;
    }

    .footer-brand {
      display: grid;
      gap: 1rem;
    }

    .footer-brand p {
      max-width: 360px;
      margin: 0;
      color: var(--shop-muted);
      line-height: 1.65;
    }

    .social-links {
      display: flex;
      align-items: center;
      gap: 0.55rem;
    }

    .social-links a {
      width: 40px;
      height: 40px;
      display: inline-grid;
      place-items: center;
      border: 1px solid var(--shop-border);
      border-radius: 8px;
      background: #ffffff;
      color: var(--shop-primary-dark);
      font-size: 0.82rem;
      font-weight: 950;
      transition: border-color 0.16s ease, color 0.16s ease, box-shadow 0.16s ease;
    }

    .social-links a:hover,
    .social-links a:focus {
      border-color: var(--shop-primary);
      color: var(--shop-primary);
      box-shadow: 0 8px 18px rgba(0, 107, 99, 0.1);
    }

    .footer-col h2,
    .contact-card h2 {
      margin: 0 0 1rem;
      color: #0c1f1d;
      font-size: 0.98rem;
      font-weight: 950;
      letter-spacing: 0;
      text-transform: uppercase;
    }

    .footer-links {
      display: grid;
      gap: 0.65rem;
    }

    .footer-links a {
      color: var(--shop-muted);
      font-weight: 750;
      transition: color 0.16s ease;
    }

    .footer-links a:hover,
    .footer-links a:focus {
      color: var(--shop-primary-dark);
    }

    .contact-card {
      padding: 1.1rem;
      border: 1px solid var(--shop-border);
      border-radius: 8px;
      background: #ffffff;
    }

    .contact-list {
      display: grid;
      gap: 0.85rem;
    }

    .contact-list div {
      display: grid;
      grid-template-columns: auto 1fr;
      gap: 0.7rem;
      align-items: start;
    }

    .contact-list i {
      width: 32px;
      height: 32px;
      display: inline-grid;
      place-items: center;
      border-radius: 8px;
      background: #eef8f6;
      color: var(--shop-primary);
    }

    .contact-list strong,
    .contact-list span {
      display: block;
    }

    .contact-list strong {
      color: var(--shop-primary-dark);
      font-size: 0.9rem;
      font-weight: 900;
    }

    .contact-list span {
      color: var(--shop-muted);
      font-size: 0.92rem;
      line-height: 1.45;
    }

    .footer-bottom {
      border-top: 1px solid var(--shop-border);
    }

    .footer-bottom-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
      padding: 1.05rem 0;
      color: var(--shop-muted);
      font-size: 0.92rem;
    }

    .footer-bottom-row strong {
      color: var(--shop-primary-dark);
    }

    @media (max-width: 1100px) {
      .product-grid {
        grid-template-columns: repeat(3, minmax(0, 1fr));
      }
    }

    @media (max-width: 900px) {
      .nav-links {
        display: none;
      }

      .hero-grid {
        grid-template-columns: 1fr;
      }

      .hero-card {
        justify-self: start;
      }

      .section-head,
      .promo-band,
      .footer-bottom-row {
        align-items: flex-start;
        flex-direction: column;
      }

      .footer-main {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }

      .category-filter {
        justify-content: flex-start;
      }

      .product-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }
    }

    @media (max-width: 575.98px) {
      .shop-container {
        width: min(100% - 1rem, 1240px);
      }

      .site-nav {
        min-height: 66px;
      }

      .brand {
        font-size: 1.1rem;
      }

      .hero {
        min-height: auto;
      }

      .hero-grid {
        padding: 2.4rem 0;
      }

      .hero-actions .btn-shop {
        width: 100%;
      }

      .product-grid {
        grid-template-columns: 1fr;
      }

      .nav-actions {
        gap: 0.6rem;
      }

      .register-btn {
        min-height: 38px;
        padding: 0.52rem 0.85rem;
      }

      .footer-main {
        grid-template-columns: 1fr;
        gap: 1.5rem;
        padding: 2rem 0;
      }
    }
  </style>
</head>

<body>
  <header class="site-header">
    <div class="shop-container site-nav">
      <a class="brand" href="#">
        <span class="brand-icon"><i class="bi bi-lightning-charge-fill" aria-hidden="true"></i></span>
        <span>Byte<span>Store</span></span>
      </a>

      <nav class="nav-links" aria-label="Main navigation">
        <a href="#">Home</a>
        <a href="#products">Product</a>
        <a href="#category">Category <i class="bi bi-chevron-down" aria-hidden="true"></i></a>
      </nav>
      <?php 
          if(!isset($_SESSION['is_admin'])){
            echo '
              <div class="nav-actions">
                <a class="login-link" href="../auth/login.php">Login</a>
                <a class="register-btn" href="../auth/register.php">Register</a>
              </div>
            ';
          }else{
            echo '
              <a class="register-btn" href="../auth/logout.php">Logout</a>
            ';
          }
       ?>
    </div>
  </header>

  <main>
    <section class="hero">
      <div class="shop-container hero-grid">
        <div>
          <p class="eyebrow">Computer Store</p>
          <h1>Laptop, desktop, and accessories essentials.</h1>
          <p>Fresh computer products for study, work, gaming, and creative projects.</p>
          <div class="hero-actions">
            <a class="btn-shop btn-filled" href="#products">Browse products</a>
            <a class="btn-shop btn-outline" href="#featured">View featured</a>
          </div>
        </div>

        <div class="hero-card" id="featured">
          <img src="../assets/images/ecommerce/product-1.jpg" alt="Featured computer product">
        </div>
      </div>
    </section>

    <section class="section" id="products">
      <div class="shop-container">
        <div class="section-head">
          <div>
            <h2>Featured products</h2>
            <p>Only products marked as featured are shown here.</p>
          </div>

          <div class="category-filter" id="category" aria-label="Product category filter">
            <button class="active" type="button">All</button>
            <button type="button">Laptop</button>
            <button type="button">Desktop</button>
            <button type="button">Monitor</button>
            <button type="button">Accessories</button>
          </div>
        </div>

        <div class="product-grid">
          <article class="product-card">
            <div class="product-media">
              <img src="../assets/images/ecommerce/product-2.jpg" alt="UltraBook Pro 14 laptop">
              <span class="tag">Laptop</span>
            </div>
            <div class="product-body">
              <h3>UltraBook Pro 14</h3>
              <p>Lightweight Intel i7 laptop with 16GB RAM and 1TB SSD.</p>
              <div class="product-bottom">
                <span class="price">$1,249</span>
                <button class="add-btn" type="button" aria-label="Add UltraBook Pro 14 to cart"><i class="bi bi-cart-plus" aria-hidden="true"></i></button>
              </div>
            </div>
          </article>

          <article class="product-card">
            <div class="product-media">
              <img src="../assets/images/ecommerce/product-3.jpg" alt="Creator Workstation desktop">
              <span class="tag">Desktop</span>
            </div>
            <div class="product-body">
              <h3>Creator Workstation</h3>
              <p>Ryzen 9 desktop with RTX graphics for design and editing.</p>
              <div class="product-bottom">
                <span class="price">$2,180</span>
                <button class="add-btn" type="button" aria-label="Add Creator Workstation to cart"><i class="bi bi-cart-plus" aria-hidden="true"></i></button>
              </div>
            </div>
          </article>

          <article class="product-card">
            <div class="product-media">
              <img src="../assets/images/ecommerce/product-4.jpg" alt="Vision 4K monitor">
              <span class="tag">Monitor</span>
            </div>
            <div class="product-body">
              <h3>Vision 4K Monitor</h3>
              <p>27 inch 4K display with USB-C and sharp color quality.</p>
              <div class="product-bottom">
                <span class="price">$399</span>
                <button class="add-btn" type="button" aria-label="Add Vision 4K Monitor to cart"><i class="bi bi-cart-plus" aria-hidden="true"></i></button>
              </div>
            </div>
          </article>

          <article class="product-card">
            <div class="product-media">
              <img src="../assets/images/ecommerce/product-5.jpg" alt="Gaming Laptop G15">
              <span class="tag">Laptop</span>
            </div>
            <div class="product-body">
              <h3>Gaming Laptop G15</h3>
              <p>RTX 4060 laptop with 165Hz display and strong cooling.</p>
              <div class="product-bottom">
                <span class="price">$1,599</span>
                <button class="add-btn" type="button" aria-label="Add Gaming Laptop G15 to cart"><i class="bi bi-cart-plus" aria-hidden="true"></i></button>
              </div>
            </div>
          </article>

          <article class="product-card">
            <div class="product-media">
              <img src="../assets/images/ecommerce/product-6.jpg" alt="Office Mini PC">
              <span class="tag">Desktop</span>
            </div>
            <div class="product-body">
              <h3>Office Mini PC</h3>
              <p>Compact computer for office work, study, and home setup.</p>
              <div class="product-bottom">
                <span class="price">$489</span>
                <button class="add-btn" type="button" aria-label="Add Office Mini PC to cart"><i class="bi bi-cart-plus" aria-hidden="true"></i></button>
              </div>
            </div>
          </article>

          <article class="product-card">
            <div class="product-media">
              <img src="../assets/images/ecommerce/product-7.jpg" alt="Pro Dock Station">
              <span class="tag">Accessory</span>
            </div>
            <div class="product-body">
              <h3>Pro Dock Station</h3>
              <p>USB-C docking station with HDMI, LAN, and fast charging.</p>
              <div class="product-bottom">
                <span class="price">$179</span>
                <button class="add-btn" type="button" aria-label="Add Pro Dock Station to cart"><i class="bi bi-cart-plus" aria-hidden="true"></i></button>
              </div>
            </div>
          </article>

          <article class="product-card">
            <div class="product-media">
              <img src="../assets/images/ecommerce/product-8.jpg" alt="Mechanical keyboard">
              <span class="tag">Accessory</span>
            </div>
            <div class="product-body">
              <h3>Mechanical Keyboard</h3>
              <p>RGB mechanical keyboard for gaming and daily typing.</p>
              <div class="product-bottom">
                <span class="price">$89</span>
                <button class="add-btn" type="button" aria-label="Add Mechanical Keyboard to cart"><i class="bi bi-cart-plus" aria-hidden="true"></i></button>
              </div>
            </div>
          </article>

          <article class="product-card">
            <div class="product-media">
              <img src="../assets/images/ecommerce/product-9.jpg" alt="Wireless mouse">
              <span class="tag">Accessory</span>
            </div>
            <div class="product-body">
              <h3>Wireless Mouse Pro</h3>
              <p>Comfortable wireless mouse with silent clicks and fast sensor.</p>
              <div class="product-bottom">
                <span class="price">$49</span>
                <button class="add-btn" type="button" aria-label="Add Wireless Mouse Pro to cart"><i class="bi bi-cart-plus" aria-hidden="true"></i></button>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <div class="shop-container" id="cart">
      <section class="promo-band">
        <div>
          <h2>Build your full computer setup</h2>
          <p>Buy a laptop or desktop with monitor and accessories to get a better bundle price.</p>
        </div>
        <a class="btn-shop btn-filled" href="#products">Shop bundle</a>
      </section>
    </div>
  </main>

  <footer class="site-footer">
    <div class="shop-container footer-main">
      <div class="footer-brand">
        <a class="brand" href="#">
          <span class="brand-icon"><i class="bi bi-lightning-charge-fill" aria-hidden="true"></i></span>
          <span>Byte<span>Store</span></span>
        </a>
        <p>Quality computers, laptops, monitors, and accessories for work, gaming, and study.</p>
        <div class="social-links" aria-label="Social links">
          <a href="#" aria-label="Facebook">FB</a>
          <a href="#" aria-label="Instagram">IG</a>
          <a href="#" aria-label="Telegram">TG</a>
        </div>
      </div>

      <div class="footer-col">
        <h2>Shop</h2>
        <nav class="footer-links" aria-label="Shop links">
          <a href="#products">All products</a>
          <a href="#category">Laptop</a>
          <a href="#category">Desktop</a>
          <a href="#category">Monitor</a>
          <a href="#category">Accessories</a>
        </nav>
      </div>

      <div class="footer-col">
        <h2>Help</h2>
        <nav class="footer-links" aria-label="Help links">
          <a href="#">About us</a>
          <a href="#">Delivery</a>
          <a href="#">Warranty</a>
          <a href="#">Returns</a>
          <a href="#">Support</a>
        </nav>
      </div>

      <div class="contact-card">
        <h2>Contact</h2>
        <div class="contact-list">
          <div>
            <i class="bi bi-geo-alt" aria-hidden="true"></i>
            <span><strong>Address</strong><span>Phnom Penh, Cambodia</span></span>
          </div>
          <div>
            <i class="bi bi-telephone" aria-hidden="true"></i>
            <span><strong>Phone</strong><span>+855 12 345 678</span></span>
          </div>
          <div>
            <i class="bi bi-envelope" aria-hidden="true"></i>
            <span><strong>Email</strong><span>support@bytestore.com</span></span>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="shop-container footer-bottom-row">
        <span>© 2026 TosTinh. All rights reserved.</span>
        <span><strong>ByteStore</strong> · Computer Shop</span>
      </div>
    </div>
  </footer>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
