<?php
require_once(__DIR__ . '/core.php');

$url = $_POST['url']; //в перемен. key сохраняется значение 'url'  

$chars = 'abcdefghijklmnopqrstuvwxyzABCDFEGHIJKLMNOPRSTUVWXYZ0123456789'; //в перемен. chars сохр. буквы, которые будут использованы для токена
$short_key = ''; //здесь будет токен
for ($i = 0; $i < 6; $i++) {
    $short_key .= $chars[rand(0, strlen($chars) - 1)];
} //цикл генерации токена, где будут использованы 6 рандомных символов из chars

$sql = "INSERT INTO `urls` (`short_url`, `target_url`) VALUES ('$short_key', '$url')"; //sql запрос на добавление записи в БД
$link->query("$sql"); //вывполненый запрос сохр. в пермен result

header("Location: " . $_SERVER['HTTP_REFERER']); //перенаправление