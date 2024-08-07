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

     .error {
            width: 75%;
            font-size: 12px;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
            border: 2px solid #ff0000;
            background-color:  #ff0000;
            color: wheat;
            margin-left:9%;
            margin-bottom: 10px;
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
        <h1>Ajout Cours</h1>
        <?php if (isset($error)) { ?>
            <div class="error"><?= $error ?></div>
        <?php } ?>
          <table>
            <tr>
              <td> ID Cours </td>
              <td><input type="text" name="id" /></td>
            </tr>

            <tr>
              <td> Intitulé</td>
              <td><input type="text" name="intitule" /></td>
            </tr>

            <tr>
              <td> Classe</td>
              <td><input type="text" name="classe"></td>
            </tr>

            <tr>
              <td> Nombre de Credit</td>
              <td><input type="number" name="NbrCredit" /></td>
            </tr>

            <tr>
              <td> Description</td>
              <td>  <textarea name="Desc" rows="4" cols="50"></textarea>
      </td>
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
        $intitule = $_POST['intitule'];
        $classe = $_POST['classe'];
        $NbrCredit =$_POST['NbrCredit'];
        $Description = $_POST['Desc'];
        
        $insertCourse = " insert into cour(id,intitule,classe,NbrCredit,Description) values(?,?,?,?,?)" ;
        $stmtInsert = $connexion->prepare($insertCourse) ;
        $result = $stmtInsert->execute([$id,$intitule,$classe,$NbrCredit,$Description]) ;

        if($result){
            $error  =  "Succefully added";
          }else{
            // $error = "Data have not been added";
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

<?php
    if(isset($_GET["supp"])){
        $Recusup=$_GET["supp"];
        $suputil=$connexion -> query ("delete * from cour where id=$Recusup");
    }
    ?>
    <!-- Table section -->
    <div class="table">
    <table>
            <tr>
              <th>id</th>
              <th>intitule</th>
              <th>Classe</th>
              <th>NbrCredit</th>
              <th>Description</th>
              <!-- <th>Functions</th> -->
            </tr>
            <?php

                include("../connexion.php");
                $sql = "SELECT * FROM cour"; 
                $stmtSelect = $connexion->prepare($sql);
                $stmtSelect ->execute();
                $cours = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
                foreach($cours as $cour): 
                ?>
            <tr>
                <td> <?php echo $cour['idCour'];?></td>
                <td><?php echo $cour['intitule']; ?></td>
                <td> <?php echo $cour['classe'];?></td> 
                <td> <?php echo $cour['NbrCredit'];?></td> 
                <td> <?php echo $cour['Description'];?></td> 
                
            </tr>
            <?php 
              endforeach;
            ?>
      </table>
      </div>
  </div>
 
  

</body>
</html>