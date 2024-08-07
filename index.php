<?php
        include 'admin/connexion.php';

        if (isset($_POST['submit'])) {
            $nom_utilisateur = $_POST['username'];
            $mot_de_passe = $_POST['password'];

            // Use a prepared statement to prevent SQL injection
            $sqlLogin = "SELECT * FROM utilisateur WHERE username = ? AND password = ?" ;
            $stmtLogin = $connexion->prepare($sqlLogin);
            $stmtLogin->execute([$nom_utilisateur, $mot_de_passe]);
            $user = $stmtLogin->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                // Authentication successful
                header('location: admin/home_admin.php');
                exit();
            } else {
                $error = 'Nom d\'utilisateur ou mot de passe est incorrect';
            }
        }
?>

<!-- 
- idTimetable
- idCours
- weekTime
- idProfesseur
- idSalle
- Promotion
- Departement
- mon8_10
- tue8_10
- mon10_12
- mon1_3
- mon3_5
- tue10_12
- tue1_3
- tue3_5
- wed8_10
- wed10_12
- wed1_3
- wed3_5
- thu8_10
- thu10_12
- thu1_3
- thu3_5
- fri8_10
- fri10_12
- fri1_3
- fri3_5
- sat8_10
- sat10_12
- monRoom
- tueRoom
- wedRoom
- thuRoom
- friRoom
- satRoom
- CodeCourse
- course
- Lecturer
- classe -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authentification</title>
    <style>
        /* Custom CSS for the form */
        body {
            font-family: sans-serif;
            background-color: #4CAF50;
            background-image: url(images/MacBook Air - 5.png) ;
        }
        .auth-form {
            margin: 0 auto;
            background-color: #fff;
            margin-top: 7%;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            width: 400px;
            text-align: center;
        }
        h2 {
            margin-bottom: 40px;
        }
        label {
            display: block;
            color:#ccc;
            font-family: Arial,sans-serif;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"] {
            width: 75%;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
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
    <div class="auth-form">
        <h2>Authentification</h2>
        
        <form method="post">
        <?php if (isset($error)) { ?>
            <div class="error"><?= $error ?></div>
        <?php } ?>
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="username" placeholder="Entrez votre Nom d'utilisateur" name="username">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" placeholder="Entrez votre mot de passe" name="password">
            <button type="submit" name="submit">Connexion</button>
        </form>
    </div>
</body>
</html>

