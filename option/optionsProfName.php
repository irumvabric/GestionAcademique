<?php
include("admin/connexion.php");


    $sql = "select id_enseignant,nom,prenom from professeur";
    $result = $connexion->query($sql);

    // Generate options for the select input
    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="' . $row["id_enseignant"] . '">' . $row["nom"] . $row["prenom"].'</option>';
        }
    } else {
        echo '<option value="">No Professeur available</option>';
    }

?>

