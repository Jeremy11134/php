<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
        padding: 8px;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: blue;
        padding: 20px;
    }

    .table-container {
        padding: 60px;
    }
    
</style>
</head>
<body>


    <?php
    require 'database-connectie-jeremy.php';
    $sql = "SELECT voornaam, achternaam, woonplaats, klant_id FROM klanten";
    $statement = $conn->query($sql);




    ?>
        <div class="table-container">
    <?php
    echo "<table>";
    echo "<tr>";
    echo "<th>Voornaam</th>";
    echo "<th>Achternaam</th>";
    echo "<th>Woonplaats</th>";
    echo "</tr>";

    foreach ($statement as $results) {
        echo "<tr>";
        echo "<td>".$results['voornaam'] ."</td>";
        echo "<td>".$results['achternaam']."</td>";
        echo "<td>".$results['woonplaats']."</td>";
        echo '<td><a href="verwijder-jeremy.php?klant_id=' . $results['klant_id'] . '">Verwijderen</a></td>';
        echo '<td><a href="update-jeremy.php?klant_id=' . $results['klant_id'] . '">update</a></td>';
        echo "</tr>";

        
    }

    

    echo "</table>";
    ?>
    </div>




</body>
</html>