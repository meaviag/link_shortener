<?php
require_once(__DIR__ . '/core.php');

$sqli = $link->query("SELECT * FROM `urls`");

$data = mysqli_fetch_all($sqli, MYSQLI_ASSOC); //получает все строки из sqli и переобразует их в ассоциативный массив 
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

    <?php if ($sqli->num_rows > 0): ?> <!-- проверяет наличие записи в бд (из r/index.php)-->
      <div>
        <?php foreach ($data as $row): ?>
          <div id="short-url">
            <p>
              <a id="short-url-target" href="<?= getShortUrl($row['short_url']); ?>"><?= $row['target_url']; ?></a>  <!-- в href="..." использует короткую ссылку (получается функцию из файла core.php). здесь в ['short_url'] данные беруться из БД, ['target_url'] выводит url ссылку. -->
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