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
        <h1>Ajout Departement</h1>
          <table>
            <tr>
              <td> ID Departement </td>
              <td><input type="text" name="id" /></td>
            </tr>

            <tr>
              <td> Nom</td>
              <td><input type="text" name="Nom" /></td>
            </tr>

            <tr>
              <td> Faculté</td>
              <td><select name="faculte"  >
                    <?php include '../../option/optionsFaculte.php'; ?>
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
        $id =$_POST['id'];
        $Nom = $_POST['Nom'];
        $faculte = $_POST['faculte'];
        
        
        $insertDep = " insert into departement(idDepartement,nom,faculte) values(?,?,?)" ;
        $stmtInsert = $connexion->prepare($insertDep) ;
        $result = $stmtInsert->execute([$id,$Nom,$faculte]) ;

        if($result){
            echo "Succefully added";
          }else{
            echo "Data have not been added";
          }
    // $variable_affichage = $connexion ->query("select * from departement");
    // while($bd_util =  $variable_affichage->fetch())
    // {
    //   if(($id ==$bd_util['idDepartement']))
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
              <th>id Departement</th>
              <th>Nom Departement</th>
              <th>Nom Faculté</th>
              <th>Functions</th>
            </tr>
            <?php

                include("../connexion.php");
                $sql = "SELECT * FROM departement "; 
                $stmtSelect = $connexion->prepare($sql);
                $stmtSelect ->execute();
                $departements = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
                foreach($departements as $departement): 
                ?>
            <tr>
                <td> <?php echo $departement['idDepartement'];?></td>
                <td><?php echo $departement['nom']; ?></td>
                <td><?php echo $departement['Faculte']; ?></td>
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