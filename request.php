<?php
include 'core.php';


if(isset($_GET['url'])){
    $url = $_GET['url'];

    $chars = 'abcdefghijklmnopqrstuvwxyzABCDFEGHIJKLMNOPRSTUVWXYZ0123456789';
    $short_key = '';
    for ($i = 0; $i < 6; $i++) {
        $short_key .= $chars[rand(0, strlen($chars) - 1)];
    }

    $sql = "INSERT INTO `short` (`urls`, `short_key`) VALUES ('$url', '$short_key')";
    $link->query("$sql");
}


