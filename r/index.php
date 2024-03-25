<?php
require_once(__DIR__ . '/../core.php');

$key = $_GET['su'];

$sqli = "SELECT * FROM `urls` WHERE `short_url`= '$key'";
$result = $link->query($sqli);

if($result->num_rows > 0){
  $row = $result->fetch_assoc();
  $url = $row['target_url'];
  header("Location: $url");
} else {
  header("Location: ../index.php");
}