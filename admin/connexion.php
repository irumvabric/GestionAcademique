<?php 
$ADRESSE_SERVEUR="localhost";
$UTILISATEUR="root";
$PASSWORD="";
$BD="horaire";
$connexion= new PDO("mysql:host=$ADRESSE_SERVEUR; dbname=$BD",$UTILISATEUR,$PASSWORD);
?>