<?php
require 'database.php';
require 'fonction.php';
global  $bdd;

if(isset($_POST["email"]) && isset($_POST['paxe']))
{
    extract($_POST);
    if(verify("backend_users","email",$email) == true)
    {
        $passe=hash("sha256",$paxe);
        $sql=$bdd->prepare("select * from backend_users where email=? and password=? and group_user='PRO' ");
        $sql->execute(array($email,$passe));
        if($sql->rowCount()>0)
        {
            setcookie("idbackend",infos_user_email($email)->code,time()+3600*24,'/');
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
