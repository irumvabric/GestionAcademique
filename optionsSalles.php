<?php
include("admin/connexion.php");



	
	

    $sql = "select idSalle,Nom from Salle";
    $result = $connexion->query($sql);

    // Generate options for the select input
    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="' . $row["idSalle"] . '">' . $row["Nom"] . '</option>';
        }
    } else {
        echo '<option value="">No Salle available</option>';
    }

?>

