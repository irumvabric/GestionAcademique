<?php
include("../connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $sql = "select * from cour"; 
    $stmtSelect = $connexion->prepare($sql);
    $stmtSelect ->execute();
    $cours = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
    ?>

<table>
      <tr>
        <td> ID Cours </td>
        <td> Intitulé</td>
        <td> Nombre de Credit</td>
        <td> Description</td>
      </tr>

        <?php foreach($cours as $cour): ?>
        <tr>

            <td><?php echo $cour['id']; ?></td>
            <td><?php echo $cour['intitule']; ?></td>
            <td><?php echo $cour['NbrCredit']; ?></td>
            <td><?php echo $cour['Description']; ?></td>
        </tr>
        <?php
            endforeach;
        ?>

        <?php
            
            $sqlCount = "SELECT COUNT(*) as rowCount FROM cour";
            $stmtCount = $connexion->prepare($sqlCount);
            $stmtCount->execute();
            $rowCount = $stmtCount->fetch(PDO::FETCH_ASSOC)['rowCount'];
        ?>
        <tr>
        <th colspan="4">Total Cours: <?= $rowCount ?></th>
        </tr>
</body>
</html>