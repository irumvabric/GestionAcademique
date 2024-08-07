<?php
include("connexion.php");
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
	<h1>Create Account</h1>
    <table>
      <tr>
        <td> Nom </td>
        <td><input type="text" name="nom" /></td>
      </tr>

      <tr>
        <td> Prenom</td>
        <td><input type="text" name="prenom" /></td>
      </tr>

      <tr>
        <td> Tel</td>
        <td><input type="tel" name="tel" /></td>
      </tr>

      <tr>
        <td> Email</td>
        <td><input type="email" name="email" /></td>
      </tr>

      <tr>
        <td> username</td>
        <td><input type="text" name="user" /></td>
      </tr>

      <tr>
        <td> Password :</td>

        <td><input type="password" name="psw" /></td>
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
    $nom =$_POST['nom'];
	$prenom = $_POST['prenom'];
    $tel =$_POST['tel'];
	$email = $_POST['email'];
	$user_name =$_POST['user'];
	$psw = $_POST['psw'];

    
		
    $insertUser = " insert into utilisateur(nom,prenom,tel,email,username,password) values(?,?,?,?,?,?)" ;
    $stmtInsert = $connexion->prepare($insertUser) ;
    $result = $stmtInsert->execute([$nom,$prenom,$tel,$email,$user_name,$psw]) ;

    if($result){
        echo "Succefully added";
      }else{
        echo "Data have not been added";
      }
$variable_affichage = $connexion ->query("select * from utilisateur");
while($bd_util =  $variable_affichage->fetch())
{
	if(($user_name ==$bd_util['username']) && ($psw==$bd_util['password']))
	{
        echo('Paramètres de connexion sonts deja dans la base de données');
		// header('location:home.php');
	
	}
	else
	{
		
        $insertUser = " insert into utilisateur(nom,prenom,tel,email,username,password) values(?,?,?,?,?,?)" ;
        $stmtInsert = $connexion->prepare($insertUser) ;
        $result = $stmtInsert->execute([$nom,$prenom,$tel,$email,$user_name,$psw]) ;
    
        if($result){
            echo "Succefully added";
          }else{
            echo "Data have not been added";
          }
	}

}
}
?>
</body>
</html>