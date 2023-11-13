<?php
    $id = $_GET["id"];
    
    $mysql = new mysqli('localhost', 'root', 'kiki', 'kino');
    $mysql->query("DELETE FROM `atlaides` WHERE `AtlaideID` = '$id' ");

    $mysql->close();

    header('Location: piedavajumi.php');
?>