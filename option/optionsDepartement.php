<?php
include("admin/connexion.php");


    $sql = "select idDepartement,nom from departement";
    $result = $connexion->query($sql);

    // Generate options for the select input
    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="' . $row["idDepartement"] . '">' . $row["nom"] . '</option>';
        }
    } else {
        echo '<option value="">No Departement available</option>';
    }

?>

