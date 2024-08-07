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
    
    $sql = "select * from professeur"; 
    $stmtSelect = $connexion->prepare($sql);
    $stmtSelect ->execute();
    $Prof = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
    ?>

<table>
      <tr>
        <td> Id Enseignant  </td>
        <td> Nom</td>
        <td> Prenom</td>
        <td> Diplome</td>
        <td> Tel</td>
        <td> Email</td>
        <td> Date embauche</td>
      </tr>

        <?php foreach($Prof as $professeur): ?>
        <tr>

            <td><?php echo $professeur['id_enseignant']; ?></td>
            <td><?php echo $professeur['nom']; ?></td>
            <td><?php echo $professeur['prenom']; ?></td>
            <td><?php echo $professeur['Diplome']; ?></td>
            <td><?php echo $professeur['telephone']; ?></td>
            <td><?php echo $professeur['email']; ?></td>
            <td><?php echo $professeur['date_embauche']; ?></td>
        </tr>
        <?php
            endforeach;
        ?>

        <?php
            
            $sqlCount = "SELECT COUNT(*) as rowCount FROM professeur";
            $stmtCount = $connexion->prepare($sqlCount);
            $stmtCount->execute();
            $rowCount = $stmtCount->fetch(PDO::FETCH_ASSOC)['rowCount'];
        ?>
        <tr>
        <th colspan="4">Total Professeur: <?= $rowCount ?></th>
        </tr>
</body>
</html>