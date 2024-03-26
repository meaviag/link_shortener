<?php
require_once(__DIR__ . '/core.php');

$url = $_POST['url'];

$chars = 'abcdefghijklmnopqrstuvwxyzABCDFEGHIJKLMNOPRSTUVWXYZ0123456789';
$short_key = '';
for ($i = 0; $i < 6; $i++) {
    $short_key .= $chars[rand(0, strlen($chars) - 1)];
} //генерация токена

$sql = "INSERT INTO `urls` (`short_url`, `target_url`) VALUES ('$short_key', '$url')";
$link->query("$sql");

header("Location: " . $_SERVER['HTTP_REFERER']);