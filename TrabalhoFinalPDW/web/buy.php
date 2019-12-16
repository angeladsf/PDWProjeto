<?php
    $dateAsString = date("yyyy-MM-dd");
    $query = "insert into compra(Date, email, id_kart) values('" .$dateAsString ."','" . $_SESSION["email"] + "','" . $_GET["id"] + "')";
    $result = mysqli_query($dbcon, $query);
?>