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

    
.form{
  width: 35%; 
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  background-color: #fff;
  margin: 2% 30%;
}

.form h1{
  text-align: center;
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
select,
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
  margin:3px 25px 2px  30px;
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


  <div class="form">
        <form method="POST">
        <h1>Recheche Horaire</h1>
          <table>
              <!-- <tr>
                <td> ID Classe </td>
                <td><input type="text" name="id" /></td>
              </tr>-->


              <tr>
                <td> Semaine </td>
                <td><input type="text" name="Nom" /></td>
              </tr> 


              <tr>
                <td> Departemt</td>
                <td><select name="Departement" id="options">
                    <?php include 'option/optionsDepartement.php'; ?>
                </select></td>
              </tr>


              <tr>
                <td> Faculte</td>
                <td><select name="Faculte" id="options">
                    <?php include 'option/optionsFaculte.php'; ?>
                </select></td>
              </tr>
              <tr>
                <td> Promotion</td>
                <td> <select name="Promotion" id="options">
                    <?php include 'option/optionsPromotion.php'; ?>
                </select></td>
              </tr>

              <!-- <tr>
                <td> Nombre d'étudiants</td>
                <td> <input type="number" name="NombreEtudiants" />
                </td>
              </tr> -->
            <tr>
              <td colspan="2">
                <input type="submit" name="submit" value="Recheche" />
                <input type="reset" value="Cancel" />
              </td>
            </tr>
          </table>
        </form>
    </div>
 
    <!--<div class="card1">
      <a href="inputform.php">Créer Nouveau Horaire</a>
    </div>

    <div class="card1">
      <a href="recherche.php">Recherche d'une Horaire</a>
    </div> -->
    <!-- <div class="card">
      <a href="admin/GestionCours/ajoutCours.php">Gestion Cours</a>
    </div>

    <div class="card">
      <a href="admin/GestionProf/AjoutProf.php">Gestion Professeur</a>
    </div>

    <div class="card">
      <a href="admin/GestionFaculte/Faculte.php">Gestion Faculté</a>
    </div>

    <div class="card">
      <a href="admin/GestionDepartement/Departement.php">Gestion Departement</a>
    </div>

    <div class="card">
      <a href="admin/GestionPromotion/ajoutPromotion.php">Gestion Promotion</a>
    </div>

    <div class="card">
      <a href="admin/GestionSalles/AjoutSalles.php">Gestion Salles</a>
    </div> -->
  </section>

</body>
</html>
