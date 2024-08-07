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
      background-color: #45a000;
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
  width: 30%; 
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  background-color: #fff;
  margin: 0 10px;
}

.table {
  width: 70%; 
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
  max-width: auto;
  padding: 8px;
  text-align: left;
}

.table table td img {
  width: 20px;
  height: 10px;
}

input[type='text'],
input[type='email'],
select,
input[type='number'],
textarea {
  width: auto;
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
    include("../subMenu.php");
  ?>
	
  <div class="wrapper">
    <!-- Form section -->
    <div class="form">
        <form method="POST">
        <h1>Ajout Animal</h1>
          <table>
          <tr>
        <td> Id Animal  </td>
        <td><input type="text" name="idEnseignant" /></td>
      </tr>
      <tr>
        <td> prod_litre </td>
        <td><input type="number" name="prod_litre" /></td>
      </tr>

      <tr>
        <td> EtatDesante</td>
        <td><select name="EtatDesante"  >
                    <option value="BienPortant">BienPortant</option>
                    <option value="Malade">Malade</option>
                    <option value="Mort">Mort</option>            
                  </select></td>
      </tr>

      <tr>
        <td> Type</td>
        <td><select name="Type"  >
                    <option value="Vache">Vache</option>
                    <option value="Chevre">Chevre</option>
                    <option value="Mouton">Mouton</option>
            </select></td>
      </tr>

            <tr>
              <td colspan="2">
                <input type="submit" name="submit" value="Save" />
                <input type="reset" value="Cancel" />
              </td>
            </tr>
          </table>
        </form>
    </div>

    <?php 
if(isset($_POST['submit']))
{


  $prod = $_POST['prod_litre'];
  $etat = $_POST['EtatDesante'];
  $type = $_POST['Type'];

    //generate id

    $sql = "SELECT count(*) FROM animaux WHERE Type = ?"; 
    $stmtSelect = $connexion->prepare($sql);
    $stmtSelect->execute([$type]); 

    $count = $stmtSelect->fetchColumn() + 1;

  
    echo $count;

    $id = substr($type,0,1)."-".$count."-".date("Y");

  
  
    
    $insertAnimal = "insert into animaux(id_animal,prod_litre,EtatDesante,Type) values(?,?,?,?)" ;
    $stmtInsert = $connexion->prepare($insertAnimal) ;
    $result = $stmtInsert->execute([$id,$prod,$etat,$type]) ;

    if($result){
        echo "Succefully added";
      }else{
        echo "Data have not been added";
      }
// $variable_affichage = $connexion ->query("select * from Professeur");
// while($bd_util =  $variable_affichage->fetch())
// {
// 	if(( $idEnseignant ==$bd_util['id_enseignant']))
// 	{
//         echo "L\'enseignant est deja dans la base de données";
// 		// header('location:home.php');
	
// 	}
// 	else
// 	{
		
//         // $insertUser = " insert into utilisateur(nom,prenom,tel,email,username,password) values(?,?,?,?,?,?)" ;
//         // $stmtInsert = $connexion->prepare($insertUser) ;
//         // $result = $stmtInsert->execute([$nom,$prenom,$tel,$email,$user_name,$psw]) ;
    
//         // if($result){
//         //     echo "Succefully added";
//         //   }else{
//         //     echo "Data have not been added";
//         //   }
// 	}

// }
}
?>
    <!-- Table section -->
    <div class="table">
    <table>
            <tr>
              <th>ID Animal</th>
              <th>Production en litre</th>
              <th>Etat de santé</th>
              <th>Type</th>
              <th>Action</th>
            </tr>
            <?php

				

                include("../connexion.php");
                $sql = "SELECT * FROM animaux"; 
                $stmtSelect = $connexion->prepare($sql);
                $stmtSelect ->execute();
                $animaux = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
                foreach($animaux as $animal): 
                ?>
            <tr>
                <td> <?php echo $animal['id_animal'];?></td>
                <td><?php echo $animal['prod_litre']; ?></td>
                <td> <?php echo $animal['EtatDesante'];?></td> 
                <td> <?php echo $animal['Type'];?></td> 
                <td>Edit || Delete</td>
            </tr>
            <?php 
              endforeach;
            ?>
      </table>
      </div>
  </div>
 
</body>
</html>