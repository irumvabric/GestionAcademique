<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Gestion Eleve</title>
  <style>
        .card-container {
          margin-top: 10%;
          margin-left: 10%;
          margin-right: auto;
          width: 85%;
          display: grid;
          grid-template-columns: repeat(3, 1fr);
          gap: 10px;
        }

        .card {
          width: 100%;
        }

        .card-title{
          font-size: 30px;
          color: #fff;
        }

        .card-body{
          display: flex;
        }

        img{
          margin:auto 12px;
          width: 75px;
          height: 50px;
        }

        a{
          text-decoration: none;
        }

        .container-fluid img{
          margin:auto 12px;
          width: 140px;
          height: 50px;
        }


  </style>
</head>
<body>
  <div class="container">
      <nav class="navbar navbar-expand-lg bg-body-tertiary ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../images/Menu.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li> -->
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </div>
  <a href="GestionCours/homecours.php"><div class="card-container">
        <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
         
        <div class="card-body">
          <img src="../images/person.png" alt="">
          <h5 class="card-title">Gestion Cours</h5>
          
        </div>
      </div></a>

      <a href="ficheEleve.php">
      <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
         
        <div class="card-body">
          <img src="../images/book.png" alt="">
          <h5 class="card-title">Gestion Horaires</h5>
            
        </div>
      </div>
      </a>
      <a href="ListeEleves.php">
      <div class="card text-bg-success mb-3" style="max-width: 18rem;">
         
        <div class="card-body">
          <img src="images/person.png" alt="">
          <h5 class="card-title">Gestion Instucteurs</h5>
            
        </div>
      </div></a>

      <div class="card-body">
          <img src="images/person.png" alt="">
          <h5 class="card-title">Gestion Utilisateurs</h5>
            
        </div>
      </div></a>

      <div class="card-body">
          <img src="images/person.png" alt="">
          <h5 class="card-title">Gestion Salle de Classe</h5>
            
        </div>
      </div></a>

      <div class="card-body">
          <img src="images/person.png" alt="">
          <h5 class="card-title">Deconnexion</h5>
            
        </div>
      </div></a>
  </div>

 
</body>
</html>