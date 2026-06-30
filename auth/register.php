<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | ByteStore</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <style>
    :root {
      --auth-primary: #006b63;
      --auth-primary-dark: #003f3b;
      --auth-accent: #ff7a1a;
      --auth-text: #003b37;
      --auth-muted: #52736f;
      --auth-border: #d7e7e4;
      --auth-bg: #f7fbfa;
      --auth-shadow: 0 22px 58px rgba(0, 63, 59, 0.12);
    }

    * {
      box-sizing: border-box;
    }

    body {
      min-height: 100vh;
      margin: 0;
      background:
        linear-gradient(90deg, rgba(247, 251, 250, 0.98), rgba(247, 251, 250, 0.84)),
        url("../assets/images/ecommerce/product-10.jpg") center / cover no-repeat;
      color: var(--auth-text);
      font-family: "Segoe UI", Arial, sans-serif;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    .auth-page {
      min-height: 100vh;
      display: grid;
      place-items: center;
      padding: 2rem 1rem;
    }

    .auth-shell {
      width: min(1120px, 100%);
      display: grid;
      grid-template-columns: minmax(0, 0.95fr) minmax(360px, 0.8fr);
      overflow: hidden;
      border: 1px solid var(--auth-border);
      border-radius: 12px;
      background: rgba(255, 255, 255, 0.96);
      box-shadow: var(--auth-shadow);
    }

    .auth-visual {
      position: relative;
      min-height: 620px;
      padding: 2rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow: hidden;
      background:
        linear-gradient(180deg, rgba(0, 63, 59, 0.1), rgba(0, 107, 99, 0.2)),
        #eef8f6;
    }

    .auth-visual img {
      position: absolute;
      inset: auto -5rem 4.8rem auto;
      width: min(600px, 88%);
      border: 1px solid rgba(255, 255, 255, 0.7);
      border-radius: 10px;
      box-shadow: 0 28px 58px rgba(0, 63, 59, 0.18);
    }

    .brand {
      position: relative;
      z-index: 1;
      display: inline-flex;
      align-items: center;
      gap: 0.65rem;
      width: fit-content;
      color: var(--auth-primary-dark);
      font-size: 1.35rem;
      font-weight: 950;
    }

    .brand-icon {
      width: 38px;
      height: 38px;
      display: grid;
      place-items: center;
      border-radius: 8px;
      background: linear-gradient(135deg, var(--auth-primary), #0ea5a0);
      color: #ffffff;
    }

    .brand span span {
      color: var(--auth-accent);
    }

    .visual-copy {
      position: relative;
      z-index: 1;
      max-width: 440px;
    }

    .visual-copy p:first-child {
      margin-bottom: 0.65rem;
      color: var(--auth-primary);
      font-size: 0.82rem;
      font-weight: 950;
      text-transform: uppercase;
    }

    .visual-copy h1 {
      margin-bottom: 0.8rem;
      color: var(--auth-primary-dark);
      font-size: clamp(2.25rem, 5vw, 4rem);
      font-weight: 950;
      line-height: 0.98;
      letter-spacing: 0;
    }

    .visual-copy p:last-child {
      margin: 0;
      color: var(--auth-muted);
      font-size: 1rem;
      font-weight: 700;
      line-height: 1.6;
    }

    .auth-card {
      padding: clamp(1.4rem, 4vw, 2.4rem);
      display: grid;
      align-content: center;
      background: #ffffff;
    }

    .back-link {
      display: inline-flex;
      align-items: center;
      gap: 0.45rem;
      width: fit-content;
      margin-bottom: 1.4rem;
      color: var(--auth-muted);
      font-weight: 800;
    }

    .auth-card h2 {
      margin-bottom: 0.45rem;
      color: var(--auth-primary-dark);
      font-size: 2rem;
      font-weight: 950;
      letter-spacing: 0;
    }

    .auth-card > p {
      margin-bottom: 1.35rem;
      color: var(--auth-muted);
      font-weight: 700;
    }

    .form-label {
      color: var(--auth-primary-dark);
      font-weight: 900;
    }

    .form-control {
      min-height: 48px;
      border-color: var(--auth-border);
      border-radius: 8px;
      color: var(--auth-text);
      font-weight: 650;
    }

    .form-control:focus {
      border-color: var(--auth-primary);
      box-shadow: 0 0 0 4px rgba(0, 107, 99, 0.12);
    }

    .terms-row {
      margin: 1rem 0 1.2rem;
      color: var(--auth-muted);
      font-size: 0.92rem;
      font-weight: 750;
      line-height: 1.5;
    }

    .terms-row a {
      color: var(--auth-primary);
      font-weight: 950;
    }

    .form-check-input:checked {
      border-color: var(--auth-primary);
      background-color: var(--auth-primary);
    }

    .auth-submit {
      width: 100%;
      min-height: 48px;
      border: 0;
      border-radius: 8px;
      background: var(--auth-primary);
      color: #ffffff;
      font-weight: 950;
      box-shadow: 0 14px 28px rgba(0, 107, 99, 0.18);
    }

    .auth-submit:hover,
    .auth-submit:focus {
      background: var(--auth-primary-dark);
    }

    .auth-switch {
      margin: 1.25rem 0 0;
      color: var(--auth-muted);
      font-weight: 750;
      text-align: center;
    }

    .auth-switch a {
      color: var(--auth-primary);
      font-weight: 950;
    }

    @media (max-width: 900px) {
      .auth-shell {
        grid-template-columns: 1fr;
      }

      .auth-visual {
        min-height: 320px;
      }

      .auth-visual img {
        display: none;
      }
    }

    @media (max-width: 575.98px) {
      .auth-page {
        padding: 1rem;
      }

      .auth-shell {
        border-radius: 8px;
      }

      .auth-visual {
        min-height: 250px;
        padding: 1.25rem;
      }

    }
  </style>
</head>

<body>
  <main class="auth-page">
    <section class="auth-shell" aria-label="Register form">
      <div class="auth-visual">
        <a class="brand" href="../user/index.php">
          <span class="brand-icon"><i class="bi bi-lightning-charge-fill" aria-hidden="true"></i></span>
          <span>Byte<span>Store</span></span>
        </a>
        <img src="../assets/images/ecommerce/product-5.jpg" alt="Gaming laptop product">
        <div class="visual-copy">
          <p>Create account</p>
          <h1>Start building your setup.</h1>
          <p>Create a ByteStore account to save products, track orders, and checkout faster.</p>
        </div>
      </div>

      <div class="auth-card">
        <a class="back-link" href="../user/index.php"><i class="bi bi-arrow-left" aria-hidden="true"></i> Back to store</a>
        <h2>Register</h2>
        <p>Fill in your information to create a new account.</p>

        <form action="createUser.php" method="post">
          <div class="mb-3">
            <label class="form-label" for="name">Name</label>
            <input class="form-control" type="text" id="name" name="name" placeholder="Your name" required>
          </div>

          <div class="mb-3">
            <label class="form-label" for="email">Email address</label>
            <input class="form-control" type="email" id="email" name="email" placeholder="you@example.com" required>
          </div>

          <div class="mb-2">
            <label class="form-label" for="password">Password</label>
            <input class="form-control" type="password" id="password" name="password" placeholder="Create password" required>
          </div>

          <label class="form-check d-flex align-items-start gap-2 terms-row">
            <input class="form-check-input mt-1" type="checkbox" name="terms" required>
            <span>I agree to the <a href="#">Terms</a> and <a href="#">Privacy Policy</a>.</span>
          </label>

          <button class="auth-submit" name="btnSubmit" type="submit">Create account</button>
        </form>

        <p class="auth-switch">Already have an account? <a href="login.php">Login</a></p>
      </div>
    </section>
  </main>
</body>

</html>
