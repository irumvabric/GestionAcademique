<?php
include("../connexion.php");
?>


<!DOCTYPE html>
<html>
<head>
<style>
	body {
  padding: 0;
  margin: 0;
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
}

nav {
  background-color: #45a049;
  color: #fff;
  text-align: center;
  padding: 1em;
}

nav a {
  color: #fff;
  text-decoration: none;
  padding: 10px 20px;
  margin: 0 10px;
  border-radius: 5px;
  transition: background-color 0.3s;
}

nav a:hover {
  color: #000;
  background-color: #45a569;
}

.wrapper {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  padding: 20px;
}

.form{
  width: 35%; 
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  background-color: #fff;
  margin: 0 10px;
}

.table {
  width: 65%; 
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  background-color: #fff;
  margin: 0 10px;
}

form table,
.table table {
  width: 100%;
  border-collapse: collapse;
  border-radius: 20px;
}

.table table td,
.form table th,
.table table th {
  border: 1px solid #45a049;
  padding: 8px;
  text-align: left;
}

input[type='text'],
input[type='number'],
select,
textarea {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 10px;
}

input[type='submit'],
input[type='reset'] {
  padding: 10px 20px;
  border: none;
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
  border-radius: 4px;
  font-size: 16px;
}

input[type='submit']:hover,
input[type='reset']:hover {
  background-color: #45a049;
}

.header {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 1em;
}

.wrapper h1 {
  font-size: 36px;
  text-align: center;
}


</style>
</head>
<body>
  
  <?php
    include("../Menu.php");
  ?>
	
  <div class="wrapper">
    <!-- Form section -->
    <div class="form">
        <form method="POST">
        <h1>Modifier Classe</h1>
          <table>
              <!-- <tr>
                <td> ID Classe </td>
                <td><select name="id" id="options">
                    <?php include '../../option/optionsClasseId.php'; ?>
                </select></td>
              </tr> -->


              <tr>
                <td> Nom </td>
                <td><input type="text" name="Nom" /></td>
              </tr>


              <tr>
                <td> Departemt</td>
                <td><select name="Departement" id="options">
                    <?php include '../../option/optionsDepartement.php'; ?>
                </select></td>
              </tr>


              <tr>
                <td> Faculte</td>
                <td><select name="Faculte" id="options">
                    <?php include '../../option/optionsFaculte.php'; ?>
                </select></td>
              </tr>
              <tr>
                <td> Promotion</td>
                <td> <select name="Promotion" id="options">
                    <?php include '../../option/optionsPromotion.php'; ?>
                </select></td>
              </tr>

              <tr>
                <td> Nombre d'étudiants</td>
                <td> <input type="number" name="NombreEtudiants" />
                </td>
              </tr>
            <tr>
              <td colspan="2">
                <input type="submit" name="Modify" value="Modify" />
                <input type="reset" value="Cancel" />
              </td>
            </tr>
          </table>
        </form>
    </div>
<?php
			
            $IdUt = $_GET["modife"];
            $modiU = $connexion -> query("SELECT * FROM classe WHERE id = '$IdUt'");
            $UtiData = $modiU -> fetch();
            
            if (isset($UtiData['namU'])) {
                $nameUti = $UtiData['namU'];
                $preU= $UtiData['prenomU'];
                $proU=$UtiData['profilU'];
                $pswU=$UtiData['motpasse'];
            } else {
                $nameUti = "";
                $preU = "";
                $proU = "";
                $pswU = "";
            } 
		?>
    <!-- Table section -->
    <div class="table">
    <table>
            <tr>
              <th>ID Classe</th>
              <th>Nom</th>
              <th>Faculte</th>
              <th>Departement</th>
              <th>Promotion</th>
              <th>Nombre d'étudiants</th>
              <!-- <th>Functions</th> -->
            </tr>
            <?php

                include("../connexion.php");
                $sql = "SELECT * FROM classe"; 
                $stmtSelect = $connexion->prepare($sql);
                $stmtSelect ->execute();
                $classes = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
                foreach($classes as $classe): 
                ?>
            <tr>
          	
                <td> <?php echo $classe['id'];?></td>
                <td> <?php echo $classe['Nom'];?></td>
                <td><?php echo $classe['Faculte']; ?></td>
                <td> <?php echo $classe['Departement'];?></td> 
                <td> <?php echo $classe['Promotion'];?></td> 
                <td> <?php echo $classe['NumberStudents'];?></td> 
                <!-- <td><a href="ModifierUtilisateur.php?modife=<?php echo $classe['id'] ?>"> Edit || <a href="Administrateur.php?supp=<?php echo $classe['id'];?>">Delete</td> -->
            </tr>
            <?php 
              endforeach;
            ?>
      </table>
      </div>
  </div>
 
  <?php 
              if(isset($_POST['Modify'])) {
                // $id =$_POST['id'];
                $Nom = $_POST['Nom'];
                $Departemt =$_POST['Departement'];
                $Faculte = $_POST['Faculte'];
                $Promotion = $_POST['Promotion'];
                $NombreEtudiants = $_POST['NombreEtudiants'];
                $modif_classe = "UPDATE classe SET Nom = '?',Departement = '?',Faculte = '?',Promotion = '?',NumberStudents = '?' WHERE id = '?'";

                $stmtInsert = $connexion->prepare($modif_classe) ;
                $result = $stmtInsert->execute([$Nom,$Departemt,$Faculte,$Promotion,$NombreEtudiants,$IdUt]) ;
                // $connexion -> exec($modif_classe);

                header("location: ajoutClasse.php");
            }
        ?>

</body>
</html>