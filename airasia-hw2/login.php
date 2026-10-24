
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AirAsia Gift Cards | Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="login-page">
  <main class="login-shell">
    <section class="login-brand">
      <a class="brand brand-light" href="login.php">
        <span>AirAsia</span>
      </a>

      <img src="images/gift-card.svg"
           alt="Illustration of a gift card with a ribbon"
           class="login-art">

      <p>Explore gift cards and redeem your points.</p>
    </section>

    <section class="login-panel">
      <div class="login-form-wrap">
        <p class="eyebrow">WELCOME BACK</p>
        <h2>Login</h2>
        <p class="muted">Sign in to access your gift card account.</p>

        <form action="card-list.php" method="post">
          <div class="form-field">
            <label for="username">Username</label>
            <input id="username" name="username" type="text"
                   placeholder="Enter your username"
                   autocomplete="username">
          </div>

          <div class="form-field">
            <label for="password">Password</label>
                 <input id="password" name="password" type="password"
                   placeholder="Enter your password"
                   autocomplete="current-password">
          </div>

          <button class="button button-primary button-full" type="submit">
            Login
          </button>
        </form>

      </div>
    </section>
  </main>
</body>
</html>
