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
    
    $sql = "select * from salle"; 
    $stmtSelect = $connexion->prepare($sql);
    $stmtSelect ->execute();
    $salles = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
    ?>

<table>
      <tr>
        <td> Id Salle  </td>
        <td> Nom</td>
        <td> Nombres de places</td>
        <td> EtatSalleOccup</td>
      </tr>

        <?php foreach($salles as $salle): ?>
        <tr>

            <td><?php echo $salle['idSalle']; ?></td>
            <td><?php echo $salle['Nom']; ?></td>
            <td><?php echo $salle['NbrPlaces']; ?></td>
            <td><?php echo $salle['EtatSalleOccup']; ?></td>
            
        </tr>
        <?php
            endforeach;
        ?>

        <?php
            
            $sqlCount = "SELECT COUNT(*) as rowCount FROM salle";
            $stmtCount = $connexion->prepare($sqlCount);
            $stmtCount->execute();
            $rowCount = $stmtCount->fetch(PDO::FETCH_ASSOC)['rowCount'];
        ?>
        <tr>
        <th colspan="4">Total Salles: <?= $rowCount ?></th>
        </tr>
</body>
</html>