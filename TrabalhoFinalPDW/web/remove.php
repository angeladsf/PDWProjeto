<?php
    $query = "delete from carrinho where id ='" . $_GET["id"] . "';";
    $result = mysqli_query($dbcon, $query);
?>