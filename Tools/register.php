<?php
require 'database.php';
require 'fonction.php';
global  $bdd;

if( isset($_POST["name"]) && isset($_POST["adresse"]) && isset($_POST["password"]) && isset($_POST["confirm"]))
{
    extract($_POST);
    global $bdd;
    $msg=array();
    if($password != $confirm)
    {
        $msg[0]="Les deux mots de passe ne sont pas les mêmes ";
        $msg['error'] = true;
    }

    if(mb_strlen($password) < 8)
    {
        $msg[1]="Le mot de passe doit contenir au moins 8 caractères ";
        $msg['error'] = true;
    }

    if(!filter_var($adresse,FILTER_VALIDATE_EMAIL))
    {
        $msg[2]="Votre email est invalide ";
        $msg['error'] = true;
    }

    if(empty($msg))
    {
        $code=strtoupper(uniqid());
        $table="backend_users";
        $field="email";

                $password=hash("sha256",$password); //password_hash($password,PASSWORD_DEFAULT); //hash("sha256",$password)
                $sql=$bdd->prepare("INSERT INTO backend_users(code, nomcomplet, email, password,groupe) VALUES(?,?,?,?,?)");
                $sql->execute(array($code,$name,$adresse,$password,'Propriétaire'));

                if($sql)
                {

                   $msg['message'] = 'Inscription effectuée avec succès !  Valider votre inscription en cliquant sur le lien que nous vous avons envoyé dans votre boîte email.';
                    $msg['error'] = false;
                }

    }

        echo json_encode($msg);


}
