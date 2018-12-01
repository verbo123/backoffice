<?php

function getAllUser()
{
    global $bdd;
    $result=array();
    $req=$bdd->query("select * from users where active=true");
    if($req)
    {
        while ($row=$req->fetch(PDO::FETCH_OBJ))
        {
            $result[]=$row;
        }

    }

    return $result;
}

function getAllLog()
{
    global $bdd;
    $result=array();
    $req=$bdd->query("select * from log order by date_created desc ");
    if($req)
    {
        while ($row=$req->fetch(PDO::FETCH_OBJ))
        {
            $result[]=$row;
        }

    }

    return $result;
}


function getNavigateurs()
{
    global $bdd;
    $result=array();
    $req=$bdd->query("select distinct navigateur from stats_visites  where TIME_TO_SEC(TIMEDIFF(CURRENT_TIME(),TIME(date_updated)))/60 <=30 ");
    if($req)
    {
        while ($row=$req->fetch(PDO::FETCH_OBJ))
        {
            $result[]=$row;
        }

    }

    return $result;
}

function member_user($code)
{
    global $bdd;
    $result=array();
    $req=$bdd->prepare("select * from backend_users where  code=?");
    $req->execute(array($code));
    if($req)
    {
        $row=$req->fetch(PDO::FETCH_OBJ);
        $result=$row;
    }

    return $result;
}





function find_groupe($group){
    global $bdd;
    $result=null;
    $sql=$bdd->prepare("select * from backend_groupe where code=?");
    $sql->execute(array($group));
    if($sql->rowCount() > 0)
    {
        $row=$sql->fetch(PDO::FETCH_OBJ);
        $result=$row;
    }

    return $result;
}



function getBackendUser()
{
    global $bdd;
    $result=array();
    $req=$bdd->query("select * from backend_users");
    if($req)
    {
        while ($row=$req->fetch(PDO::FETCH_OBJ))
        {
            $result[]=$row;
        }

    }

    return $result;
}



function getVisiteurPage30jrs()
{
    global $bdd;
    $result=null;
    $req=$bdd->query("select sum(nbre_page_vue) as nbre from stats_visites where DATEDIFF(date_visite,CURRENT_DATE()) <= 30");
    $result=$req->fetch(PDO::FETCH_OBJ);
    return $result;
}

function getVisiteurTotal30jrs()
{
    global $bdd;
    $result=null;
    $req=$bdd->query("select count(ip) as nbre from stats_visites where DATEDIFF(date_visite,CURRENT_DATE()) <= 30");
    $result=$req->fetch(PDO::FETCH_OBJ);
    return $result;
}

function getCompteCreate30jrs()
{
    global $bdd;
    $result=null;
    $req=$bdd->query("select count(code) as nbre from users where DATEDIFF(date_created,CURRENT_DATE()) <= 30");
    $result=$req->fetch(PDO::FETCH_OBJ);
    return $result;
}





function getAllDistributeur()
{
    global $bdd;
    $result=array();
    $req=$bdd->query("select * from recharge_autorisation");
    if($req)
    {
        while ($row=$req->fetch(PDO::FETCH_OBJ))
        {
            $result[]=$row;
        }

    }

    return $result;
}



function getAllTransaction()
{
    global $bdd;
    $result=array();
    $req=$bdd->query("select * from transaction");
    if($req)
    {
        while ($row=$req->fetch(PDO::FETCH_OBJ))
        {
            $result[]=$row;
        }

    }

    return $result;
}

function findTransaction($login)
{
    global  $bdd;
    $result=array();
    $sql=$bdd->prepare("select * from transaction where code_user_sender=? or code_user_receiver=? order by date desc ");
    $sql->execute(array($login,$login));
    if($sql)
    {
        while ($row=$sql->fetch(PDO::FETCH_OBJ))
        {
            $result[]=$row;
        }
    }
    return $result;

}

function infos_user_email($code)
{
    global $bdd;
    $result=array();
    $req=$bdd->prepare("select * from backend_users where  email=?");
    $req->execute(array($code));
    if($req)
    {
        $row=$req->fetch(PDO::FETCH_OBJ);
        $result=$row;
    }

    return $result;
}


function infos_user_login($code)
{
    global $bdd;
    $result=array();
    $req=$bdd->prepare("select * from backend_users where  login=?");
    $req->execute(array($code));
    if($req)
    {
        $row=$req->fetch(PDO::FETCH_OBJ);
        $result=$row;
    }

    return $result;
}



function resultCount($data)
{
    $result='';
    if (in_array($data,array(0,1,2,3,4,5,6,7,8,9)))
    {
        $result="0".$data;
    }else{
        $result = $data;
    }
    return $result;
}

function inserLog($code,$msg)
{
    global $bdd;
    $pl=$bdd->prepare(" insert into log(userid, actions) values(?,?) ");
    $pl->execute(array($code,$msg));
}


function getAll_app()
{
    global $bdd;
    $result=array();
    $sql=$bdd->query("select * from application");

    if($sql)
    {
        while ($row=$sql->fetch(PDO::FETCH_OBJ))
        {
            $result[]=$row;
        }
    }
    return $result;
}

function getBackendGroupe()
{
    global $bdd;
    $result=array();
    $req=$bdd->query("select * from backend_groupe  ");
    if($req)
    {
        while ($row=$req->fetch(PDO::FETCH_OBJ))
        {
            $result[]=$row;
        }

    }

    return $result;
}










function verify($table,$field, $code)
{
    global $bdd;
    $req=$bdd->prepare("select * from ".$table." where ".$field."= ?");
    $req->execute(array($code));
    if($req->rowCount() > 0){
        return true;
    }else{
        return false;
    }
}



function app_verif($code,$app){
    global $bdd;
    $result=null;
    $req=$bdd->prepare("select * from compte_marhand where user_created=? and app_connect=?");
    $req->execute(array($code,$app));
    if($req->rowCount() == 1){
        $result=true;
    }else{
        $result=false;
    }

return $result;
}


function permission_service(){
    global $bdd;
    $result=null;
    $sql=$bdd->prepare("select * from m_autorisation where user_c=?");
    $sql->execute(array(getUserLogin()));
    if($sql->rowCount() == 1)
    {
        $row=$sql->fetch(PDO::FETCH_OBJ);
        $result=$row;
    }

    return $result;

}

function find_user_groupe(){
    global $bdd;
    $result=null;
    $sql=$bdd->prepare("select * from user_groupe where user_cod=?");
    $sql->execute(array(getUserLogin()));
    if($sql->rowCount() > 0)
    {
        $row=$sql->fetch(PDO::FETCH_OBJ);
        $result=$row;
    }

    return $result;
}

function getcompte_marchand()
{
    global $bdd;
    $result=null;
    $sql=$bdd->prepare("select * from compte_marhand where user_created=?");
    $sql->execute(array(getUserLogin()));
    if($sql->rowCount() >0 )
    {

            $row=$sql->fetch(PDO::FETCH_OBJ);
            $result=$row;

    }

    return $result;
}

function getTransa($no)
{
    global $bdd;
    $result=array();
    $sql=$bdd->prepare("select * from transaction where no_trans=?");
    $sql->execute(array($no));
    if($sql->rowCount() >0 )
    {

        $row=$sql->fetch(PDO::FETCH_OBJ);
        $result=$row;

    }

    return $result;
}

function verify_user_membre($mail)
{
    global $bdd;
    $req=$bdd->prepare("select * from user_autorisation where user_sender=? and email_invite=?");
    $req->execute(array(getUserLogin(),$mail));
    if($req->rowCount() > 0){
        return true;
    }else{
        return false;
    }
}

function getGroupe($id)
{
    global $bdd;
    $result=array();
    $req=$bdd->prepare("select * from groupe where  id=?");
    $req->execute(array($id));
    if($req)
    {
        $row=$req->fetch(PDO::FETCH_OBJ);
        $result=$row;
    }

    return $result;
}

function getAllGroupe()
{
    global $bdd;
    $result=array();
    $req=$bdd->query("select * from groupe");
    if($req)
    {
        while ($row=$req->fetch(PDO::FETCH_OBJ))
        {
            $result[]=$row;
        }

    }

    return $result;
}

function infos_user($code)
{
    global $bdd;
    $result=array();
    $req=$bdd->prepare("select * from users where  code=?");
    $req->execute(array($code));
    if($req)
    {
        $row=$req->fetch(PDO::FETCH_OBJ);
        $result=$row;
    }

    return $result;
}

function infos_user_with_email($email)
{
    global $bdd;
    $result=array();
    $req=$bdd->prepare("select * from users where adresse=?");
    $req->execute(array($email));
    if($req)
    {
        $row=$req->fetch(PDO::FETCH_OBJ);
        $result=$row;
    }

    return $result;
}

function get_nbre_facture()
{
    global $bdd;
    $result=array();
    $req=$bdd->query("select * from compte_marhand");

    if($req)
    {
        $result=$req->rowCount();
    }

    return '0000'.$result;
}

function get_nbre_virement()
{
    global  $bdd;
    $login=getUserLogin();
    $result=0;
        $sql=$bdd->prepare("select * from transaction where  operation='VIR' and code_user_sender=? ");
        $sql->execute(array($login));
        if($sql)
        {
                $result=$sql->rowCount();

        }

    if (in_array($result,array(0,1,2,3,4,5,6,7,8,9)))
    {
        $result="0".$result;
    }
    return $result;
}



function get_nbre_achat()
{
    global $bdd;
    $result=0;
    $req=$bdd->prepare("select * from facturation where client_id=?");
    $req->execute(array(getUserLogin()));

    if($req)
    {
        $result=$req->rowCount();
    }

    if (in_array($result,array(0,1,2,3,4,5,6,7,8,9)))
    {
        $result="0".$result;
    }
    return $result;
}


function get_nbre_app()
{
    global $bdd;
    $result=0;
    $req=$bdd->prepare("select * from application where code_user_app=?");
    $req->execute(array(getUserLogin()));
    if($req)
    {
        $result=$req->rowCount();
    }

    if (in_array($result,array(0,1,2,3,4,5,6,7,8,9)))
    {
        $result="0".$result;
    }
    return $result;

}


function get_data_in_table($code)
{
    global $bdd;
    $result=array();
//    $req=$bdd->prepare("select * from".$table."where".$field."=?");
    $req=$bdd->prepare("select * from compte_marhand where user_created=?");
    $req->execute(array($code));
    if($req)
    {
        $row=$req->fetch(PDO::FETCH_OBJ);
        $result=$row;
    }

    return $result;
}

function infos_user_op_data($code)
{
    global $bdd;
    $result=array();
    $req=$bdd->prepare("select * from users where  op_code=?");
    $req->execute(array($code));
    if($req)
    {
        $row=$req->fetch(PDO::FETCH_OBJ);
        $result=$row;
    }

    return $result;
}

function inserNotif($code,$msg)
{
    global $bdd;
    $statut='NEW';
    $pl=$bdd->prepare(" insert into notification(code_user, message, date, statut) values(?,?,NOW(),?) ");
    $pl->execute(array($code,$msg,$statut));
}



function get_nbre_notif()
{
    global $bdd;
    $statut='NEW';
    $result=0;
    $pl=$bdd->prepare(" select * from notification where  code_user=? and statut=?");
    $pl->execute(array(getUserLogin(),$statut));
    if($pl)
    {
        $result=$pl->rowCount();
    }
    return $result;

}

function get_all_notif()
{
    global  $bdd;
    $login=getUserLogin();
    $statut='NEW';
    $result=array();
    $sql=$bdd->prepare("select * from notification where  code_user=? and statut=? order by date desc ");
    $sql->execute(array($login,$statut));
    if($sql)
    {
        while ($row=$sql->fetch(PDO::FETCH_OBJ))
        {
            $result[]=$row;
        }
    }
    return $result;

}

function get_all_notif_vu()
{
    global  $bdd;
    $login=getUserLogin();
    $statut='VU';
    $result=array();
    $sql=$bdd->prepare("select * from notification where  code_user=? and statut=? order by date desc ");
    $sql->execute(array($login,$statut));
    if($sql)
    {
        while ($row=$sql->fetch(PDO::FETCH_OBJ))
        {
            $result[]=$row;
        }
    }
    return $result;

}


function generateToken($nbre)
{
    $token=openssl_random_pseudo_bytes($nbre);
    $token=bin2hex($token);
    return $token;
}

function getMontantUser($code)
{
    global $bdd;
    $result=array();
    $req=$bdd->prepare("select * from solde where  code_user_solde=?");
    $req->execute(array($code));
    if($req)
    {
        $row=$req->fetch(PDO::FETCH_OBJ);
        $result=$row;
    }

    return $result;
}

function getMontantUserRecharge($code)
{
    global $bdd;
    $result=array();
    $req=$bdd->prepare("select * from recharge_autorisation where  utilisateur=?");
    $req->execute(array($code));
    if($req)
    {
        $row=$req->fetch(PDO::FETCH_OBJ);
        $result=$row;
    }

    return $result;
}

function updateMontantRecharge($code,$value)
{
    global $bdd;
    $sql = $bdd->prepare("update recharge_autorisation set solde=? where utilisateur=?");
    $sql->execute(array($value,$code));
}


function updateMontant($code,$value)
{
    global $bdd;
    $sql = $bdd->prepare("update solde set total=? where code_user_solde=?");
    $sql->execute(array($value,$code));
}

function getCode_Op($code)
{
    global $bdd;
    $result=array();
    $req=$bdd->prepare("select * from parametre where  user_code=?");
    $req->execute(array($code));
    if($req)
    {
        $row=$req->fetch(PDO::FETCH_OBJ);
        $result=$row;
    }

    return $result;
}

function limite_caractere($chaine)
{
    $len=15;
    if(strlen($chaine) >= $len)
    {
        $chaine=substr($chaine,0,$len)." ....";
    }
    echo $chaine;
}


function paramVerify()
{
    global $bdd;
    $result=null;
    $req=$bdd->prepare("select * from m_autorisation where user_c = ?");
    $req->execute(array(getUserLogin()));
    if($req->rowCount() > 0){
        $row=$req->fetch(PDO::FETCH_OBJ);
        if($row->virement == "true")
        {
            $result = true; //il a l'autorisation
        }else{
            $result = false; //il n'a pas l'autorisation
        }
    }else{
        $result = false; //il n'a pas l'autorisation
    }

    return $result;

}

function getUserLogin()
{
    return $_COOKIE["idbackend"];
}


    function getUrl(){
        return "http://localhost/ampayeur_dashboard_final/";
    }


function date_conversion($value)
{
    $data=date_create($value);
    $mois=date_format($data,"M");
    $fr_mois="";
    if($mois == "Jan" || $mois == "Jan.")
    {
        $fr_mois="Jan.";
    }else{
        if($mois=="Feb" || $mois=="Feb."){
            $fr_mois="Fév.";
        }else if($mois == "Mar" || $mois == "Mar."){
            $fr_mois="Mar.";
        }else if($mois == "Apr" || $mois == "Apr."){
            $fr_mois="Avr.";
        }else if($mois == "May" || $mois == "May."){
            $fr_mois = "Mai.";
        }else if($mois == "Jun" || $mois == "Jun."){
            $fr_mois = "Jui.";
        }else if($mois == "Aug" || $mois == "Aug."){
            $fr_mois = "Aou.";
        }else if($mois == "Sep" || $mois == "Sep.")
        {
            $fr_mois="Sep.";
        }else if($mois == "Oct" || $mois == "Oct."){
            $fr_mois = "Oct.";
        }else if($mois == "Nov" || $mois == "Nov."){
            $fr_mois = "Nov.";
        }else if($mois == "Dec" || $mois == "Dec."){
            $fr_mois = "Dec.";
        }
    }

    $jour=date_format($data,"d");
    $annee=date_format($data,"Y");
    $heure=date_format($data,"H:i");

    return $jour." ".$fr_mois." ".$annee."  ".$heure;
}

