
<!DOCTYPE html>
<html>
<head>
    <style>
        .wrapper {
            width: 420px;
            border-radius: 10px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .wrapper h1 {
            font-size: 36px;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        input[type='text'],
        input[type='tel'],
        input[type='email'],
        input[type='password'],
        textarea {
            width: 100%;
            padding: 8px;
            
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select, select option{
            width: 100%;
            padding: 8px;
            text-align: center; 
            margin-bottom: 10px;
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

        button{
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
            <h1>Ajout Horaire</h1>
            
            <label for="WeeKTime">Semaine du</label>
            <input type="text" name="WeeKTime" required />

            <label for="Promotion">Promotion</label>
            <input type="text" name="Promotion" required />

            <label for="NbrCredit">Departement</label>
            <input type="text" name="Departement" required />

            <!-- Cours Dropdowns -->
            <label>Lundi 8 - 10h:</label>
                <select name="mon8_10"  >
                    <?php include 'optionsCours.php'; ?>
                </select>

            <label>Lundi 10 - 12h:</label>
                <select name="mon10_12"  >
                    <?php include 'optionsCours.php'; ?>
                </select>
            
            <label>Lundi 13 - 15h:</label>
                <select name="mon1_3"  >
                    <?php include 'optionsCours.php'; ?>
                </select>
                
            <label>Lundi 15 - 17h:</label>
                <select name="mon3_5"  >
                    <?php include 'optionsCours.php'; ?>
                </select>
            
            <!--Mardi-->
            <label  >Mardi 8 - 10h:</label>
                <select name="tue8_10"  >
                    <?php include 'optionsCours.php'; ?>
                </select>

            <label  >Mardi 10 - 12h:</label>
                <select name="tue10_12"  >
                    <?php include 'optionsCours.php'; ?>
                </select>
            
            <label  >Mardi 13 - 15h:</label>
                <select name="tue1_3"  >
                    <?php include 'optionsCours.php'; ?>
                </select>
                
            <label  >Mardi 15 - 17h:</label>
                <select name="tue3_5"  >
                    <?php include 'optionsCours.php'; ?>
                </select>

            <!--Mercredi-->
            <label  >Mercredi 8 - 10h:</label>
                <select name="wed8_10"  >
                    <?php include 'optionsCours.php'; ?>
                </select>

            <label  >Mercredi 10 - 12h:</label>
                <select name="wed10_12"  >
                    <?php include 'optionsCours.php'; ?>
                </select>
            
            <label  >Mercredi 13 - 15h:</label>
                <select name="wed1_3"  >
                    <?php include 'optionsCours.php'; ?>
                </select>
                
            <label  >Mercredi 15 - 17h:</label>
                <select name="wed3_5"  >
                    <?php include 'optionsCours.php'; ?>
                </select>
            <!--Jeudi-->

            <label  >Jeudi 8 - 10h:</label>
                <select name="thu8_10"  >
                    <?php include 'optionsCours.php'; ?>
                </select>

            <label  >Jeudi 10 - 12h:</label>
                <select name="thu10_12"  >
                    <?php include 'optionsCours.php'; ?>
                </select>
            
            <label  >Jeudi 13 - 15h:</label>
                <select name="thu1_3"  >
                    <?php include 'optionsCours.php'; ?>
                </select>
                
            <label  >Jeudi 15 - 17h:</label>
                <select name="thu3_5"  >
                    <?php include 'optionsCours.php'; ?>
                </select>
            <!--Vendredi-->

            <label  >Vendredi 8 - 10h:</label>
                <select name="fri8_10"  >
                    <?php include 'optionsCours.php'; ?>
                </select>

            <label  >Vendredi 10 - 12h:</label>
                <select name="fri10_12"  >
                    <?php include 'optionsCours.php'; ?>
                </select>
            
            <label  >Vendredi 13 - 15h:</label>
                <select name="fri3_5"  >
                    <?php include 'optionsCours.php'; ?>
                </select>
                
            <label  >Vendredi 15 - 17h:</label>
                <select name="fri1_3"  >
                    <?php include 'optionsCours.php'; ?>
                </select>
            <!--Samedi-->

            <label  >Samedi 8 - 10h:</label>
                <select name="sat8_10"  >
                    <?php include 'optionsCours.php'; ?>
                </select>

            <label  >Samedi 10 - 12h:</label>
                <select name="sat10_12"  >
                    <?php include 'optionsCours.php'; ?>
                </select>
            
                    

            <label for="Description">Description</label>
            <textarea name="Desc" rows="4" cols="50"></textarea>

            <input type="submit" name="submit" value="Save" />
            <!-- <button type="button" name = "Modify">Modify</button> -->
            <input type="reset" value="Cancel" />
        </form>

        <?php 
        if(isset($_POST['submit']))
        {
            
                
          
            $weekTime =$_POST['WeeKTime'];
            $Promotion =$_POST['Promotion'];
            $Departement =$_POST['Departement'];
            
            
            $mon8_10 =$_POST['mon8_10']; 
            $tue8_10 =$_POST['tue8_10']; 
            $mon10_12 =$_POST['mon10_12']; 
            $mon1_3 =$_POST['mon1_3']; 
            $mon3_5 =$_POST['mon3_5']; 
            $tue10_12 =$_POST['tue10_12']; 
            $tue1_3 =$_POST['tue1_3']; 
            $tue3_5 =$_POST['tue3_5']; 
            $wed8_10 =$_POST['wed8_10']; 
            $wed10_12 =$_POST['wed10_12']; 
            $wed1_3 =$_POST['wed1_3']; 
            $wed3_5 =$_POST['wed3_5']; 
            $thu8_10 =$_POST['thu8_10']; 
            $thu10_12 =$_POST['thu10_12']; 
            $thu1_3 =$_POST['thu1_3']; 
            $thu3_5 =$_POST['thu3_5']; 
            $fri8_10 =$_POST['fri8_10']; 
            $fri10_12 =$_POST['fri10_12']; 
            $fri1_3 =$_POST['fri1_3']; 
            $fri3_5 =$_POST['fri3_5']; 
            $sat8_10 =$_POST['sat8_10']; 
            $sat10_12 =$_POST['sat10_12'];


            $insertTimetable = " INSERT INTO timetable ( weekTime, Promotion, Departement, mon8_10, tue8_10 , mon10_12 , mon1_3 , mon3_5  , tue10_12 , tue1_3 , tue3_5 ,  wed8_10 , wed10_12 , wed1_3  , wed3_5  , thu8_10  , thu10_12 , thu1_3, thu3_5, fri8_10 , fri10_12 , fri1_3, fri3_5, sat8_10 , sat10_12 ) VALUES (?, ?, ?, ?,?,?, ?, ?, ?,?,?, ?, ?, ?,?,?, ?, ?, ?,?,?,?,?,?,?)" ;
            $stmtInsert = $connexion->prepare($insertTimetable) ;
            $result = $stmtInsert->execute([$weekTime,$Promotion,$Departement,$mon8_10,$tue8_10 ,$mon10_12 ,$mon1_3 ,$mon3_5  ,$tue10_12 ,$tue1_3 ,$tue3_5 , $wed8_10 ,$wed10_12 ,$wed1_3  ,$wed3_5  ,$thu8_10  ,$thu10_12 ,$thu1_3,$thu3_5,$fri8_10 ,$fri10_12 ,$fri1_3,$fri3_5,$sat8_10 ,$sat10_12 ]) ;

            if($result){
                echo "Successfully added";
            } else {
                echo "Data have not been added";
            }

            // $variable_affichage = $connexion->query("SELECT * FROM cour");
            // while($bd_util = $variable_affichage->fetch())
            // {
            //     if(($id == $bd_util['id']))
            //     {
            //         echo('The course already exists in the Database');
            //     }
            // }
        }
        ?>
    </div>
</body>
</html>
