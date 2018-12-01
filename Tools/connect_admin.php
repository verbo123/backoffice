<?php
require 'database.php';
require 'fonction.php';
global  $bdd;

if(isset($_POST["login"]) && isset($_POST['paxe']))
{
    extract($_POST);
    if(verify("backend_users","login",$login) == true)
    {
        $passe=hash("sha256",$paxe);
        $sql=$bdd->prepare("select * from backend_users where login=? and password=? and group_user='ADM' ");
        $sql->execute(array($login,$passe));
        if($sql->rowCount()>0)
        {
            setcookie("idbackend",infos_user_login($login)->code,time()+3600*24,'/');
            $result['msg'] = true;
        }
        else
        {
            $result['msg'] = 'Votre mot de passe est incorrect !';
        }
    }else{
        $result['id'] = 'Identifiant invalide !';
    }
    echo json_encode($result);
}
