<?php
include("../connexion.php");
?>


<!DOCTYPE html>
<html>
<head>
<style>
	.wrapper{
		width:420px;
		border-radius: 10px;
	}
	.wrapper h1{
		font-size:  36px;
		text-align: center;
	}
  body {
	display: flex;
	justify-content: center;
	align-items:center;
	min-height: 90vh;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
  }
  
  form {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
  }
  
  table {
    width: 100%;

  }
  
  table td {
    padding: 5px;
  }
  
  input[type='text'],
  input[type='tel'],
  input[type='email'],
  input[type='password'] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  textarea{
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
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
</style>
</head>
<body>
	<div class="wrapper">
  <form method="POST">
	<h1>Ajout Cours</h1>
    <table>
      <tr>
        <td> ID Classe </td>
        <td><input type="text" name="id" /></td>
      </tr>

      <tr>
        <td> Nom </td>
        <td><input type="text" name="intitule" /></td>
      </tr>

      <tr>
        <td> Departemt</td>
        <td><input type="text" name="Departemt" /></td>
      </tr>

      <tr>
        <td> Promotion</td>
        <td>  <textarea name="Promotion" rows="4" cols="50"></textarea>
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
<?php 
if(isset($_POST['submit']))
{
    $id =$_POST['id'];
	$intitule = $_POST['intitule'];
    $NbrCredit =$_POST['NbrCredit'];
	$Description = $_POST['Desc'];
		
    $insertCourse = " insert into cour(id,intitule,NbrCredit,Description) values(?,?,?,?)" ;
    $stmtInsert = $connexion->prepare($insertCourse) ;
    $result = $stmtInsert->execute([$id,$intitule,$NbrCredit,$Description]) ;

    if($result){
        echo "Succefully added";
      }else{
        echo "Data have not been added";
      }
$variable_affichage = $connexion ->query("select * from cour");
while($bd_util =  $variable_affichage->fetch())
{
	if(($id ==$bd_util['id']))
	{
        echo('The course already exit in Database');
		// header('location:home.php');
	
	}
}
}
?>
</body>
</html>