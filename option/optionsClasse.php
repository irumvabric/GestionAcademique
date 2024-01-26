<?php
include("admin/connexion.php");


    $sql = "select id,Nom from classe";
    $result = $connexion->query($sql);

    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="' . $row["id"] . '">' .$row[" Nom"] . '</option>';
        }
    } else {
        echo '<option value="">No classe available</option>';
    }

?>

