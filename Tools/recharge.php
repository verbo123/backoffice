<?php
require 'database.php';
require 'fonction.php';
global  $bdd;

if($_POST["annee"])
{
    extract($_POST);
    $result=array();
    //$sql=$bdd->query("select count(*) as nbre,year(date) as annee from transaction where  operation='VIR' and typ_virement='CLA' group by year(date) ");

    $sql=$bdd->query("select count(*) as nbre,MONTH(date) as mois,year(date) as annee  from transaction where operation='VIR' and typ_virement='REC' and year(date) = ".$annee." group by MONTH(date)");

    if($sql)
    {
        while ($row=$sql->fetch(PDO::FETCH_OBJ))
        {
            $result[]=$row;
        }
    }

    echo json_encode($result);
}
