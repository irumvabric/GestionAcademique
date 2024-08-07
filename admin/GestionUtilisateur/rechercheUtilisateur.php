<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
   body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #c7c7c7;
    }

    header {
      background-color: #45aF50;
      color: #fff;
      text-align: center;
      padding: 1em;
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

    section {
      padding: 20px;
      margin-left: 20%;
      margin-right: 20%;
      margin-top: 3%;
      display: grid;
      /* grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      justify-content: center; */
    }

    .card {
      background-color: #fff;
      color: #333;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      transition: transform 0.3s;
    }

    .card a{
        text-decoration: none;
        color:#000;

    }

    .card:hover {
      transform: translateY(-5px);
    }


    .card1 {
      background-color: #45a569;
      
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      transition: transform 0.3s;
      border:1px solid #45a000;
    }

    .card1 a{
        
        text-decoration: none;
        color: #fff;

    }

    .card1:hover {
      transform: translateY(-5px);
    }

  </style>
  <title>Gestion Horaire</title>
</head>
<body>

  <header>
    <h1>Gestion Horaire</h1>
  </header>

  <?php
    include("../subMenu.php");
  ?>

  <section>

    <div class="card1">
      <a href="operation.php">Enregister une operation</a>
    </div>


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
   
  </section>

</body>
</html>
