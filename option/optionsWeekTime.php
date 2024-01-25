<?php
include("admin/connexion.php");



	
	

    $sql = "select idTimetable,weekTime from timetable";
    $result = $connexion->query($sql);

    // Generate options for the select input
    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="' . $row["idTimetable"] . '">' . $row["weekTime"] . '</option>';
        }
    } else {
        echo '<option value="">No Salle available</option>';
    }

?>

