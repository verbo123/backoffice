<?php
require 'database.php';
require 'fonction.php';
global  $bdd;

if(isset($_POST["credit"]) && isset($_POST['user']))
{
    extract($_POST);
    if(verify("recharge_autorisation","utilisateur",$user) == false)
    {
        $sql=$bdd->prepare("insert into recharge_autorisation(utilisateur,solde,valide) values (?,?,?)");
        $sql->execute(array($user,$credit,true));
        if($sql){
            $result['msg'] = 'Autorisation accordée avec succès !';
        }else{
            $result['msg'] = false;
        }
    }else{
        $result['msg'] = false;
    }
    echo json_encode($result);
}
