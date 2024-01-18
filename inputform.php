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
            <td>Tueday</td>
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
            <td><select name="options" id="options">
                    <?php include 'get_options.php'; ?>
                </select>
                <input type="text" name="Mon8_10"></td>
            <td><input type="text" name="Tue8_10"></td>
            <td><input type="text" name="Wed8_10"></td>
            <td><input type="text" name="Thur8_10"></td>
            <td><input type="text" name="Fri8_10"></td>
            <td><input type="text" name="Sat8_10"></td>
        </tr>
        <tr>
            <td id="horaireblue">10:00 - 10:15</td>
            <td><input type="text" name="Mon10_15"></td>
            <td><input type="text" name="Tue10_15"></td>
            <td><input type="text" name="Wed10_15"></td>
            <td><input type="text" name="Thur10_15"></td>
            <td><input type="text" name="Fri10_15"></td>
            <td id="horaireblue"></td>
        </tr>
        <tr>
            <td>10:15 - 12:00</td>
            <td><input type="text" name="Mon10_1"></td>
            <td><input type="text" name="Tue10_1"></td>
            <td><input type="text" name="Wed10_1"></td>
            <td><input type="text" name="Thur10_1"></td>
            <td><input type="text" name="Fri10_1"></td>
            <td><input type="text" name="Sat10_1"></td>
        </tr>
        <tr class="pause">
            <td id="horaireblue">12:00 - 13:00</td>
            <td colspan="5"></td>
            <td></td>
        </tr>
        <tr>
            <td>13:00 - 15:00</td>
            <td><input type="text" name="Mon1_3"></td>
            <td><input type="text" name="Tue1_3"></td>
            <td><input type="text" name="Wed1_3"></td>
            <td><input type="text" name="Thur1_3"></td>
            <td><input type="text" name="Fri1_3"></td>
            <td rowspan="3"></td>
        </tr>
        <tr>
            <td id="horaireblue">15:00 - 15:15</td>
            <td><input type="text" name="Mon3_315"></td>
            <td><input type="text" name="Tue3_315"></td>
            <td><input type="text" name="Wed3_315"></td>
            <td><input type="text" name="Thur3_315"></td>
            <td><input type="text" name="Fri3_315"></td>
            
        </tr>
        <tr>
        <td >15h30 - 17:00</td>
            <td><input type="text" name="Mon315_5"></td>
            <td><input type="text" name="Tue315_5"></td>
            <td><input type="text" name="Wed315_5"></td>
            <td><input type="text" name="Thur315_5"></td>
            <td><input type="text" name="Fri315_5"></td>
        </tr>

        <tr class = "rooms">
            <td id="horairesalleyellow"></td>
            <td id="horairesalleyellow"></td>
            <td id="horairesalleyellow"></td>
            <td id="horairesalleyellow"></td>
            <td id="horairesalleyellow"></td>
            <td id="horairesalleyellow"></td>
            <td id="horairesalleyellow"></td>
        </tr>

        <!--end of table-->

        <tr>
            <td colspan="4">Code / Course / Lecturer</td>
            <td colspan="4">Department</td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr></tr>
    </Table>
</body>
</html>