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

       /* #heure{
            
       } */
    </style>
    <title>Document</title>
</head>
<body>
    <!-- <img src="images/headerBIU.png" alt=""> -->
    <h3 id="title">Bujumbura International University. Tentative Weekly time table <input type="text" name="WeekTime"></h3>
    <Table border="1">
        <tr>
            <td colspan="8"><h3 id="title1"><span>Bac1</span>/10(Génie Logiciel)</h3></td>
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
                    <?php include 'optionsCours.php'; ?>
                </select></td>
            <td>
                <select name="tue8_10" id="options">
                    <?php include 'optionsCours.php'; ?>
                </select></td>
            <td><select name="wed8_10"  >
                    <?php include 'optionsCours.php'; ?>
                </select></td>
            <td><select name="thu8_10"  >
                    <?php include 'optionsCours.php'; ?>
                </select></td>
            <td><select name="fri8_10"  >
                    <?php include 'optionsCours.php'; ?>
                </select></td>
            <td><select name="sat8_10"  >
                    <?php include 'optionsCours.php'; ?>
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
                    <?php include 'optionsCours.php'; ?>
                </select></td>
            <td>
                <select name="tue10_12" id="options">
                    <?php include 'optionsCours.php'; ?>
                </select></td>
            <td><select name="wed10_12"  >
                    <?php include 'optionsCours.php'; ?>
                </select></td>
            <td><select name="thu10_12"  >
                    <?php include 'optionsCours.php'; ?>
                </select></td>
            <td><select name="fri10_12"  >
                    <?php include 'optionsCours.php'; ?>
                </select></td>
            <td><select name="sat10_12"  >
                    <?php include 'optionsCours.php'; ?>
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
                    <?php include 'optionsCours.php'; ?>
                </select></td>
            <td>
                <select name="tue1_3" id="options">
                    <?php include 'optionsCours.php'; ?>
                </select></td>
            <td><select name="wed1_3"  >
                    <?php include 'optionsCours.php'; ?>
                </select></td>
            <td><select name="thu1_3"  >
                    <?php include 'optionsCours.php'; ?>
                </select></td>
            <td><select name="fri1_3"  >
                    <?php include 'optionsCours.php'; ?>
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
                    <?php include 'optionsCours.php'; ?>
                </select></td>
            <td>
                <select name="tue3_5" id="options">
                    <?php include 'optionsCours.php'; ?>
                </select></td>
            <td><select name="wed3_5"  >
                    <?php include 'optionsCours.php'; ?>
                </select></td>
            <td><select name="thu3_5"  >
                    <?php include 'optionsCours.php'; ?>
                </select></td>
            <td><select name="fri3_5"  >
                    <?php include 'optionsCours.php'; ?>
                </select></td>
        </tr>

        <tr class = "rooms">
            <td id="horairesalleyellow"></td>
            <td id="horairesalleyellow">
                <select name="monRoom"  >
                    <?php include 'optionsSalles.php'; ?>
                </select></td>
            <td id="horairesalleyellow"><select name="tueRoom"  >
                    <?php include 'optionsSalles.php'; ?>
                </select></td>
            <td id="horairesalleyellow"><select name="wedRoom"  >
                    <?php include 'optionsSalles.php'; ?>
                </select></td>
            <td id="horairesalleyellow"><select name="thuRoom"  >
                    <?php include 'optionsSalles.php'; ?>
                </select></td>
            <td id="horairesalleyellow"><select name="friRoom"  >
                    <?php include 'optionsSalles.php'; ?>
                </select></td>
            <td id="horairesalleyellow"><select name="satRoom"  >
                    <?php include 'optionsSalles.php'; ?>
                </select></td>
            
        </tr>

        <!--end of table-->

        <tr>
            <td colspan="4">Code / Course / Lecturer</td>
            <td colspan="4">Department</td>
        </tr>
        <tr>
            <td colspan="4"><select name="satRoom"  >
                    <?php include 'OptionsCours.php'; ?>
                </select> / <select name="satRoom"  >
                    <?php include 'optionsProfName.php'; ?>
                </select> / <select name="satRoom"  >
                    <?php include 'optionsSalles.php'; ?>
                </select></td>
            <td colspan="4"></td>
        </tr>
        <tr></tr>
        <tr></tr>
    </Table>
    <button name="submit">Save</button>
    <button name="Add">Save</button>
</body>
</html>