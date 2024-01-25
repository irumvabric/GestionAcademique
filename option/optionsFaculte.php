<?php
include("admin/connexion.php");


    $sql = "select id,nom from faculte";
    $result = $connexion->query($sql);

    // Generate options for the select input
    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="' . $row["id"] . '">' . $row["nom"] . '</option>';
        }
    } else {
        echo '<option value="">No Faculte available</option>';
    }

?>

