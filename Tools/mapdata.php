<?php
require 'database.php';
require 'fonction.php';
global  $bdd;

$result=array();
$sql=$bdd->query("select distinct country_code from stats_visites");
if($sql)
{
    while ($row=$sql->fetch(PDO::FETCH_OBJ))
    {
        $result[]=$row;
    }
}

echo json_encode($result);