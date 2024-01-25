<?php
include("admin/connexion.php");


    $sql = "select Nom ,NombreEtudiants from promotion";
    $result = $connexion->query($sql);

    // Generate options for the select input
    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="' . $row["Nom"] . '">' . $row["Nom"] . '</option>';
        }
    } else {
        echo '<option value="">No Promotion available</option>';
    }

?>

