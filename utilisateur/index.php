<?php
$server_address="Localhost";
$user_name="root";
$bd_name="bad";
$pwd= "";
$con = new PDO("mysql:host=$server_address;dbname=$bd_name",$user_name,$pwd);

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
	<h1>Login</h1>
    <table>
      <tr>
        <td> Username :</td>
        <td><input type="text" name="user" /></td>
      </tr>
      <tr>
        <td> Password :</td>

        <td><input type="password" name="psw" /></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" name="submit" value="Connect" />
          <input type="reset" value="Cancel" />
        </td>
      </tr>
    </table>
  </form>
<?php 
if(isset($_POST['submit']))
{
	$nomU=$_POST['user'];
	$psw= $_POST['psw'];

$variable_affichage = $con ->query("select * from utilisateur");
while($bd_util =  $variable_affichage->fetch())
{
	if(($nomU==$bd_util['nomU']) && ($psw==$bd_util['motpasse']))
	{
		header('location:accueil.php');
	
	}
	else
	{
		echo('Paramètres de connexion incorects');
	}

}
}
?>
</body>
</html>