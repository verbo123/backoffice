<?php

try{
     $bdd = new PDO('mysql:host=localhost;dbname=ampayeur', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->exec("set names utf8");
} catch (Exception $ex) {
    die('Erreur '. $ex->getMessage());
}

