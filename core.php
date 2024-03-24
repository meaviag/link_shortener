<?
$link = new mysqli('localhost','root','','url');
if($link->connect_error){
    die ("Ошибка подключения к БД:" . $link->connect_error);
}
?>