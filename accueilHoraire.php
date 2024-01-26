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
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      justify-content: center;
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

  <nav>
    <a href="home.php">Accueil</a>
    <a href="admin/GestionProf/AjoutProf.php">Professeur</a>
    <a href="admin/GestionCours/ajoutCours.php">Cour</a>
    <a href="admin/GestionFaculte/Faculte.php">Faculté</a>
    <a href="admin/GestionDepartement/Departement.php">Departement</a>
    <a href="admin/GestionSalles/AjoutSalles.php">Salle</a>
    <a href="inputform.php">Horaire</a>
    <a href="admin/GestionClasse/ajoutClasse.php">Classe</a>
    <a href="admin/GestionPromotion/ajoutPromotion.php">Promotion</a>
  </nav>

  <section>

    <div class="card1">
      <a href="inputform.php">Créer Nouveau Horaire</a>
    </div>

    <div class="card1">
      <a href="recherche.php">Recherche d'une Horaire</a>
    </div>

  </section>

</body>
</html>
