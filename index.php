<?php
require_once(__DIR__ . '/core.php');

$sqli = $link->query("SELECT * FROM `urls`");

$data = mysqli_fetch_all($sqli, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="request.php" method="post">
        <input type="text" name="url">
        <input type="submit" value="Отправить">
    </form>

    <?php if ($sqli->num_rows > 0): ?>
      <div>
        <?php foreach ($data as $row): ?>
          <div id="short-url">
            <p>
              <a id="short-url-target" href="<?= getShortUrl($row['short_url']); ?>"><?= $row['target_url']; ?></a>
            </p>

            <button id="short-url-copy">
              Скопировать
            </button>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <script src="main.js"></script>
  </body>
</html>