<?php
include("admin/connexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 0;

        }
        h3,p{
            margin :0;
        }
        img{
            margin-left: 8%;
            height: 100px;
        }
        #title1{
            margin-left: 45%;
           
        }

        #horaireblue{
            background-color: #5b9bd5;
            
        }

        #horaireblue1{
            background-color: #5b9bd5;
            color : white;
            
        }

        #horaireblue1 p{
            margin-left: 10px;
            
        }

        #horairesalleyellow{
            background-color: #ffd966;
            
        }

        #title{
            margin-left: 22%;
            margin-bottom:15px;
        }
        table, th, td {
           border: 1px solid black;
           border-collapse: collapse;
       }
       table{


          margin-left: 5%;
          width: 90%;
       }
       span{
           color: red;
       }
       td {
           height: 30px;
           width: 200px;
       } 

        .button {
            margin: 2% 50% ;
            display: flex;
            gap: 20px;
            justify-content: center;
        }

        .button button a{
            text-decoration: none;
            width: 100px;
        }

        .button button{
           
            padding: 10px 20px;
            border: 1px solid #5b9bd5;
            background-color: #ffd966;
            color: #000;
            text-decoration: solid;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
        }

        




       /* #heure{
            
       } */
    </style>
    <title>Document</title>
</head>
<body>
    <!-- <img src="images/headerBIU.png" alt=""> -->
    <form method="POST">
    <h3 id="title">Bujumbura International University. Tentative Weekly time table <input type="text" name="WeekTime"></h3>
    <Table border="1">
        <tr>
            <td colspan="8"><h3 id="title1"><span>Bac1</span>/<select name="Promotion" id="options">
                    <?php include 'option/optionsPromotion.php'; ?>
                </select>(<select name="Departement" id="options">
                    <?php include 'option/optionsDepartement.php'; ?>
                </select>)</h3></td>
        </tr>

        <tr>
            <td colspan="2"><p>Promotion/Venue/Time Slots </p></td>
            <td>Monday</td>
            <td> tueday</td>
            <td>Wednesday</td>
            <td>Thursday</td>
            <td>Friday</td>
            <td>Saturday</td>

        </tr>

        <!--details-->
        <tr>
            <td rowspan="9" id="horaireblue1"><p>Bac1/10</p></td>
            
            
        </tr>
        <tr class="evenOddsCss">
            <td>8:00 - 10:00</td>
            <td><select name="mon8_10" id="options">
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td>
                <select name="tue8_10" id="options">
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td><select name="wed8_10"  >
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td><select name="thu8_10"  >
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td><select name="fri8_10"  >
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td><select name="sat8_10"  >
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
        </tr>
        <tr>
            <td id="horaireblue">10:00 - 10:15</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td id="horaireblue"></td>
        </tr>
        <tr>
            <td>10:15 - 12:00</td>
            <td><select name="mon10_12" id="options">
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td>
                <select name="tue10_12" id="options">
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td><select name="wed10_12"  >
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td><select name="thu10_12"  >
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td><select name="fri10_12"  >
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td><select name="sat10_12"  >
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
        </tr>
        <tr class="pause">
            <td id="horaireblue">12:00 - 13:00</td>
            <td colspan="5" id="horaireblue"></td>
            <td></td>
        </tr>
        <tr>
            <td>13:00 - 15:00</td>
            <td><select name="mon1_3" id="options">
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td>
                <select name="tue1_3" id="options">
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td><select name="wed1_3"  >
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td><select name="thu1_3"  >
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td><select name="fri1_3"  >
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td rowspan="3"></td>
        </tr>
        <tr>
            <td id="horaireblue">15:00 - 15:15</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            
        </tr>
        <tr>
            <td >15h30 - 17:00</td>
            <td><select name="mon3_5" id="options">
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td>
                <select name="tue3_5" id="options">
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td><select name="wed3_5"  >
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td><select name="thu3_5"  >
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
            <td><select name="fri3_5"  >
                    <?php include 'option/optionsCours.php'; ?>
                </select></td>
        </tr>

        <tr class = "rooms">
            <td id="horairesalleyellow"></td>
            <td id="horairesalleyellow">
                <select name="monRoom"  >
                    <?php include 'option/optionsSalles.php'; ?>
                </select></td>
            <td id="horairesalleyellow"><select name="tueRoom"  >
                    <?php include 'option/optionsSalles.php'; ?>
                </select></td>
            <td id="horairesalleyellow"><select name="wedRoom"  >
                    <?php include 'option/optionsSalles.php'; ?>
                </select></td>
            <td id="horairesalleyellow"><select name="thuRoom"  >
                    <?php include 'option/optionsSalles.php'; ?>
                </select></td>
            <td id="horairesalleyellow"><select name="friRoom"  >
                    <?php include 'option/optionsSalles.php'; ?>
                </select></td>
            <td id="horairesalleyellow"><select name="satRoom"  >
                    <?php include 'option/optionsSalles.php'; ?>
                </select></td>
            
        </tr>

        <!--end of table-->

        <tr>
            <td colspan="4">Code / Course / Lecturer</td>
            <td colspan="4">Department</td>
        </tr>
        <tr>
            <td colspan="4"><select name="code"  >
                    <?php include 'option/optionsCoursId.php'; ?>
                </select> / <select name="course"  >
                    <?php include 'option/optionsCours.php'; ?>
                </select> / <select name="Lecteur"  >
                    <?php include 'option/optionsProfName.php'; ?>
                </select></td>
            <td colspan="4"></td>
        </tr>
        <tr></tr>
        <tr></tr>
    </Table>
    <div class="button">
        <button name="submit"><strong>Save</strong></button>
        <button name="Modify"><strong><a href="outputform.php">Horaires</a></strong></button>
    </div>
    </form>
    <?php 
        if(isset($_POST['submit']))
        {
            
                
          
            $weekTime =$_POST['WeekTime'];
            // $Promotion =$_POST['Promotion'];
            // $Departement =$_POST['Departement'];
            
            
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


            //...................................


            $monRoom =$_POST['monRoom'];
            $tueRoom =$_POST['tueRoom'];
            $wedRoom =$_POST['wedRoom'];
            $thuRoom =$_POST['thuRoom'];
            $friRoom =$_POST['friRoom'];
            $satRoom =$_POST['satRoom'];

            $code =$_POST['code'];
            $course =$_POST['course'];
            $Lecteur =$_POST['Lecteur'];

            //.........................



            $insertTimetable = " INSERT INTO timetable ( weekTime, mon8_10,tue8_10,mon10_12,mon1_3,mon3_5,tue10_12,tue1_3,tue3_5 ,wed8_10,wed10_12,wed1_3,wed3_5,thu8_10,thu10_12,thu1_3,thu3_5,fri8_10,fri10_12,fri1_3,fri3_5,sat8_10,sat10_12,monRoom,tueRoom,wedRoom,thuRoom,friRoom,satRoom,CodeCourse,course,Lecturer) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)" ;
            $stmtInsert = $connexion->prepare($insertTimetable) ;
            $result = $stmtInsert->execute([$weekTime,$mon8_10,$tue8_10 ,$mon10_12 ,$mon1_3 ,$mon3_5  ,$tue10_12 ,$tue1_3 ,$tue3_5 , $wed8_10 ,$wed10_12 ,$wed1_3  ,$wed3_5  ,$thu8_10  ,$thu10_12 ,$thu1_3,$thu3_5,$fri8_10 ,$fri10_12 ,$fri1_3,$fri3_5,$sat8_10 ,$sat10_12,$monRoom,$tueRoom,$wedRoom,$thuRoom,$friRoom,$satRoom,$code,$course,$Lecteur]) ;

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
</body>
</html>