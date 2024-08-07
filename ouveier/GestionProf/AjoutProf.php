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
    include("../Menu.php");
  ?>
	
  <div class="wrapper">
    <!-- Form section -->
    <div class="form">
        <form method="POST">
        <h1>Ajout Professeur</h1>
          <table>
          <tr>
        <td> Id Enseignant  </td>
        <td><input type="text" name="idEnseignant" /></td>
      </tr>
      <tr>
        <td> Nom </td>
        <td><input type="text" name="nom" /></td>
      </tr>

      <tr>
        <td> Prenom</td>
        <td><input type="text" name="prenom" /></td>
      </tr>

      <tr>
        <td> Diplome</td>
        <td><input type="text" name="diplome" /></td>
      </tr>

      <tr>
        <td> Cours</td>
        <td><select name="CoursId"  >
                    <?php include '../../optionsCours.php'; ?>
            </select></td>
      </tr>

      <tr>
        <td> Tel</td>
        <td><input type="number" name="tel" /></td>
      </tr>

      <tr>
        <td> Email</td>
        <td><input type="email" name="email" /></td>
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
    $idEnseignant = $_POST['idEnseignant'];
    $nom =$_POST['nom'];
	$prenom = $_POST['prenom'];
    $Diplome = $_POST['diplome'];
    $CoursId = $_POST['CoursId'];
    $tel =$_POST['tel'];
	$email = $_POST['email'];

    
    $insertProf = " insert into professeur(id_enseignant,nom,prenom,Diplome,idCourstelephone,email) values(?,?,?,?,?,?,?)" ;
    $stmtInsert = $connexion->prepare($insertProf) ;
    $result = $stmtInsert->execute([$idEnseignant,$nom,$prenom,$Diplome,$CoursId,$tel,$email]) ;

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
              <th>Matricule</th>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Diplôme</th>
              <th>Télephone</th>
              <th>Email</th>
              <th>Functions</th>
            </tr>
            <?php

                include("../connexion.php");
                $sql = "SELECT * FROM professeur"; 
                $stmtSelect = $connexion->prepare($sql);
                $stmtSelect ->execute();
                $professeurs = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
                foreach($professeurs as $professeur): 
                ?>
            <tr>
                <td> <?php echo $professeur['id_enseignant'];?></td>
                <td><?php echo $professeur['nom']; ?></td>
                <td> <?php echo $professeur['prenom'];?></td> 
                <td> <?php echo $professeur['Diplome'];?></td> 
                <td> <?php echo $professeur['telephone'];?></td> 
                <td> <?php echo $professeur['email'];?></td> 
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