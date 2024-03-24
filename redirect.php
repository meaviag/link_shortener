<?php
include 'core.php';
include 'request.php';

if(isset($_GET['short_key'])) {
    $key = $_GET['short_key'];
    
    $sqli = "SELECT `url` FROM `urls` WHERE `short_key`= '$key'";
    $result = $link->query($sqli);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $url = $row['urls'];
        header("Location: $url");
    } else {
        echo"нет";
    }
}

