
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AirAsia Gift Cards | Add Card</title>
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
      <span>Add card</span>
    </div>

    <section class="form-heading">
      <p class="eyebrow">CARD MANAGEMENT</p>
      <h1>Add a new gift card</h1>
      <p class="muted">
        Enter the details below to add a gift card to the catalog.
      </p>
    </section>

    <form class="data-form" action="card-list.php" method="post">
      <div class="form-field">
        <label for="card-name">Card Name</label>
        <input id="card-name" name="card_name" type="text"
               placeholder="e.g. H&M">
      </div>

      <div class="form-field">
        <label for="card-type">Card Type</label>
        <select id="card-type" name="card_type">
          <option value="">Select card type</option>
          <option>Digital</option>
          <option>Physical</option>
        </select>
      </div>

      <div class="form-field">
        <label for="card-value">Card Value (USD)</label>
        <input id="card-value" name="card_value" type="number"
               min="1" step="0.01" placeholder="50.00">
      </div>

      <div class="form-field">
        <label for="points">Points Required</label>
        <input id="points" name="points_required" type="number"
               min="1" step="1" placeholder="12000">
      </div>

      <div class="form-actions">
        <button class="button button-primary" type="submit">Save</button>
        <a class="button button-secondary" href="card-list.php">Cancel</a>
      </div>
    </form>
  </main>
</body>
</html>
