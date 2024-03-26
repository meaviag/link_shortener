<?php
require_once(__DIR__ . '/../core.php');

$key = $_GET['su']; //в перемен. key сохраняется значение 'su'  

$sqli = "SELECT * FROM `urls` WHERE `short_url`= '$key'"; //sql запрос на поиск записи в бд
$result = $link->query($sqli); //вывполненый запрос сохр. в пермен result

if($result->num_rows > 0){ //проверяет наличие записи в бд
  $row = $result->fetch_assoc(); // в  row сохраняет результат запроса
  $url = $row['target_url']; // в перемен. url сохраняет ссылку
  header("Location: $url"); //перенаправление пользователя на ссылку
} else {
  header("Location: ../index.php"); //если не получлось, то перенаправляет на глав.стр.
} 
