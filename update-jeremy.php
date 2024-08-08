<?php

require('database-connectie-jeremy.php');

if(isset($_GET['klant_id'])) {

    $id1 = $_GET['klant_id'];
    $sql = "SELECT woonplaats FROM klanten WHERE klant_id=$id1";

    $resultaat = $conn->query($sql)->fetch();
    $woonplaats = $resultaat[0];

    if($woonplaats == 'Amstelveen') {
        $sql = "UPDATE klanten SET woonplaats ='Arnhem' WHERE klant_id=$id1";
    } else {
        $sql = "UPDATE klanten SET woonplaats ='Amstelveen' WHERE klant_id=$id1";
    }

    $conn->query($sql);
}
    header("Location: opdracht-d3-jeremy.php");





?>