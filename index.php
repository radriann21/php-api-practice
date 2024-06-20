<?php 
  require_once 'apiService.php';
  $data = apiCall();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Next Movie in UCM</title>
</head>
<body>
  <main>
    <h1>¿What movie is the next?</h1>
    <img src="<?= $data["poster_url"] ?>" alt="<?= $data["title"] ?>">
    <section>
      <h2><?= $data["title"] ?></h2>
      <span><?= "<strong>Days until</strong>: " . $data["days_until"] ?></span>
      <p><?= "<strong>Overview</strong>: " . $data["overview"] ?></p>
      <p>
        <strong>Next movie:</strong>
        <?= $data["following_production"]["title"] ?>
      </p>
    </section>
  </main>
</body>
</html>
