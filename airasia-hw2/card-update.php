
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AirAsia Gift Cards | Update Card</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="site-header">
    <a class="brand" href="card-list.php">
      <span>AirAsia</span>
    </a>
    <nav class="main-nav" aria-label="Main navigation">
      <a class="active" href="card-list.php">Gift Cards</a>
    </nav>
    <a class="header-link" href="login.php">Log out</a>
  </header>

  <main class="container form-page">
    <div class="breadcrumbs">
      <a href="card-list.php">Gift cards</a>
      <span>/</span>
      <a href="card-details.php">Gift Card</a>
      <span>/</span>
      <span>Update card</span>
    </div>

    <section class="form-heading">
      <p class="eyebrow">CARD MANAGEMENT</p>
      <h1>Update gift card</h1>
      <p class="muted">Edit the selected gift card's information.</p>
    </section>

    <form class="data-form" action="card-list.php" method="post">
      <div class="form-field">
        <label for="card-name">Card Name</label>
        <input id="card-name" name="card_name" type="text"
               value="Gift Card" required>
      </div>

      <div class="form-field">
        <label for="card-type">Card Type</label>
        <select id="card-type" name="card_type" required>
          <option>Digital</option>
          <option>Physical</option>
        </select>
      </div>

      <div class="form-field">
        <label for="card-value">Card Value (USD)</label>
        <input id="card-value" name="card_value" type="number"
               min="1" step="0.01" value="50.00" required>
      </div>

      <div class="form-field">
        <label for="points">Points Required</label>
        <input id="points" name="points_required" type="number"
               min="1" step="1" value="12000" required>
      </div>

      <div class="form-actions">
        <button class="button button-primary" type="submit">Save</button>
        <a class="button button-secondary" href="card-details.php">
          Cancel
        </a>
      </div>
    </form>
  </main>
</body>
</html>
