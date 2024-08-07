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
    include("../subMenu.php");
  ?>
	
  <div class="wrapper">
    <!-- Form section -->
    <div class="form">
        <form method="POST">
        <h1>Ajout Utilisateur</h1>
        <table>

            <!-- <tr>
              <td> Id Utilisateur  </td>
              <td><input type="text" name="idSalle"/></td>
            </tr> -->
            <tr>
              <td> Nom </td>
              <td><input type="text" name="nom" /></td>
            </tr>

            <tr>
              <td> Prenom	</td>
              <td><input type="number" name="Prenom" /></td>
            </tr>

            <tr>
              <td> Telephone </td>
              <td><input type="text" name="Telephone" /></td>
            </tr>

            <tr>
              <td> Email	</td>
              <td><input type="number" name="Email" /></td>
            </tr>

            <tr>
              <td> Username </td>
              <td><input type="text" name="Username" /></td>
            </tr>

            <tr>
              <td> Password	</td>
              <td><input type="number" name="Password" /></td>
            </tr>

            <tr>
              <td> Profil </td>
              <td><input type="text" name="Profil" /></td>
            </tr>

   

            <tr>
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
        
        $nom =$_POST['nom'];
        $Prenom = $_POST['Prenom'];
        $Telephone = $_POST['Telephone'];
        $Email = $_POST['Email'];
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
        $Profil = $_POST['Profil'];
       
        // generated id for users

        $id = $_POST['idSalle'];
        
        $insertSalle = " insert into salle(idSalle,Nom,NbrPlaces) values(?,?,?)" ;
        $stmtInsert = $connexion->prepare($insertSalle) ;
        $result = $stmtInsert->execute([$id,$nom,$NbrPlaces]) ;

        if($result){
            echo "Succefully added";
          }else{
            echo "Data have not been added";
          }
    // $variable_affichage = $connexion ->query("select * from cour");
    // while($bd_util =  $variable_affichage->fetch())
    // {
    //   if(($id ==$bd_util['id']))
    //   {
    //         echo('The course already exit in Database');
    //     // header('location:home.php');
      
    //   }
    // }
    }
?>
    <!-- Table section -->
    <div class="table">
    <table>
            <tr>
              <th>id</th>
              <th>Nom</th>
              <th>Prenom</th>
              <th>Telephone</th>
              <th>Email</th>
              <th>Username</th>
              <th>Password</th>
              <th>Profil</th>
            </tr>
            <?php

                include("../connexion.php");
                $sql = "SELECT * FROM utilisateur"; 
                $stmtSelect = $connexion->prepare($sql);
                $stmtSelect ->execute();
                $utilisateurs = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
                foreach($utilisateurs as $utilisateur): 
                ?>
            <tr>
                <td> <?php echo $utilisateur['ID'];?></td>
                <td><?php echo $utilisateur['nom']; ?></td>
                <td> <?php echo $utilisateur['prenom'];?></td> 
                <td> <?php echo $utilisateur['tel'];?></td> 
                <td> <?php echo $utilisateur['email'];?></td> 
                <td> <?php echo $utilisateur['username'];?></td> 
                <td> <?php echo $utilisateur['password'];?></td> 
                <td> <?php echo $utilisateur['profil'];?></td> 
                
            </tr>
            <?php 
              endforeach;
            ?>
      </table>
      </div>
   
  </div>
 
  

</body>
</html>