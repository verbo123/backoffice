<?php
require 'database.php';
require 'fonction.php';
global  $bdd;

if(isset($_POST["credit"]) && isset($_POST['user']))
{
    extract($_POST);
    if(verify("recharge_autorisation","utilisateur",$user) == true)
    {
        $sql=$bdd->prepare("update recharge_autorisation set solde = solde+? where utilisateur=?");
        $sql->execute(array($credit,$user));

        if($sql){
            $result['msg'] = 'Vente de crédit effecuté avec succès !';
            inserLog(getUserLogin(),'Vente de crédit de '.$credit." FCFA à ".infos_user($user)->nom." ".infos_user($user)->prenom."(".$user.") par ".member_user(getUserLogin())->nom.' '.member_user(getUserLogin())->prenom);

        }else{
            $result['msg'] = false;
        }
    }else{
        $result['msg'] = false;
    }
    echo json_encode($result);
}
