<?php
include("admin/connexion.php");


    $sql = "select id,intitule from cour";
    $result = $connexion->query($sql);

    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="' . $row["id"] . '">' . $row["intitule"] . '</option>';
        }
    } else {
        echo '<option value="">No courses available</option>';
    }

?>

