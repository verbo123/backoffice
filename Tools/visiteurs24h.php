<?php
require 'database.php';
global  $bdd;
$result=array();
$req=$bdd->query("select count(ip) as nbre from stats_visites where TIME_TO_SEC(TIMEDIFF(CURRENT_TIME(),TIME(date_updated)))/3600 <=24");
$result=$req->fetch(PDO::FETCH_OBJ);
echo json_encode($result);