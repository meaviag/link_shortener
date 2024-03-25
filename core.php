<?
$database = 'migration';

$link = new mysqli('localhost','root','',$database, 3306); //подключение к базе данных
if($link->connect_error){
    die ("Ошибка подключения к БД:" . $link->connect_error);
} //условие на подключние


function getShortUrl($shortKey) {
  $prefix = 'link_shortener';

  return "http://localhost/$prefix/r?su=$shortKey";
} //функция,которая генерирует короткую ссылку.  