<?php
include 'redirect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" value="" name="url">
        <input type="submit" value="Отправить">
    </form>
        <a href = '<?=$url?>'>https://pi.com/<?=$short_key?></a>
    </body>
</html>