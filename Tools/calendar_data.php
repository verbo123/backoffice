<?php
require 'database.php';
require 'fonction.php';
global  $bdd;

$result=array();
$sql=$bdd->query("select distinct year(date) as annee  from transaction ");
$row=$sql->fetchAll(PDO::FETCH_OBJ);
foreach ($row as $lig)
{
    $req=$bdd->query("select distinct DATE(date) as dte  from `transaction` where year(date)=".$lig->annee." ");
    $row2=$req->fetchAll(PDO::FETCH_OBJ);

    foreach ($row2 as $da)
    {
        $data=date_create($da->dte);
        $jour=date_format($data,"d");
        $mois=date_format($data,"m");

            $res=$bdd->query("select count(no_trans) as nbre, sum(montant) as total,DAY(date) as jour  from `transaction` where month(date)=".$mois." and year(date)=".$lig->annee." and day(date)='".$jour."' ");
            if($res->rowCount() > 0)
            {
                while ($rows=$res->fetch(PDO::FETCH_OBJ))
                {

                    $result["stat"][]=array(
                        "mois" => $mois,
                        "annee" => $lig->annee,
                        "nbre" => $rows->nbre,
                        "total" => $rows->total,
                        "jour" => $rows->jour
                    );

                    $dat=$bdd->query("select count(*) as totale from `transaction` where year(date)='".$lig->annee."' and month(date)='".$mois."' and day(date)='".$rows->jour."' and typ_virement='CLA' and operation='VIR' ");
                    $co=$dat->fetch(PDO::FETCH_OBJ);
                    $result["vire"][]=array("nbre_virement" => $co->totale);

                    $dat2=$bdd->query("select count(*) as totale from `transaction` where year(date)='".$lig->annee."' and month(date)='".$mois."' and day(date)='".$rows->jour."' and typ_virement='REC' and operation='VIR' ");
                    $co2=$dat2->fetch(PDO::FETCH_OBJ);
                    $result["rech"][]=array("nbre_recharge" => $co2->totale);
                }
            }



    }

}


echo json_encode($result);