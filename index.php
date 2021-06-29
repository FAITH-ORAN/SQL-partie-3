<?php

$serveur="localhost";
$login="root";
$pass="";

try{
    $connexion= new PDO ("mysql:host=$serveur;dbname=webdevelopment",$login,$pass);//j'utilise les bloc try and catch pour la gestion des erreurs
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //exercice 1
    //$connexion->exec("CREATE DATABASE codex");// j'ai crée une base de donnée codex
    /*$codesql= "CREATE TABLE clients(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        lastName VARCHAR (50),
        firstName VARCHAR (50),
        birthDate VARCHAR (70),
        adress VARCHAR (70),
        phoneNumber INT,
        email VARCHAR (50)
        )";*/
    //exercice 2
   // $codesql= "ALTER TABLE languages ADD lastName VARCHAR(50)";
  //exercice 3
 //$codesql= "ALTER TABLE framworks ADD version INT";
  //exercice 4
  //$modif="ALTER TABLE languages CHANGE `lastName` `version`;"//cette partie je l'ai fait manuellement sur phpMyadmin car la requette ne passait pas
  //exercice 5 
  //$modif="ALTER TABLE `framworks` CHANGE `name` `framwork` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;";
 
    //exercice 6 
    $codesql="ALTER TABLE `framworks` CHANGE `version` `version` VARCHAR(10) NULL DEFAULT NULL";
    $connexion->exec($codesql);
    echo "base de donnée codex créée<br>";
    echo "connexion à la base de donnée codex est reussi<br>";
    echo "ajouter la table clients dans la base de donnée codex avec 7 colonnes<br>";
    echo "ajouter une colonne de type varchar à la base languages de la base de donnée webdevelopment <br>";
    echo "ajouter une colonne de type INT  à la base framworks de la base de donnée webdevelopment <br>";
    echo "changer le nom de la colonne lastName a version dans la table languages<br>";
    echo "changer le nom de la colonne name a framwork dans la table frameworks<br>";
    echo "changer le type de la colonne version de la table framworks de int a varchar 10";


}catch(PDOException $e){
    echo'echec : ' . $e->getMessage();

}

?>
