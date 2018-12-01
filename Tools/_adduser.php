<?php
global  $bdd;
$error=array();
if(isset($_POST['valider']))
{
    if(!empty($_POST['group']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])
        && !empty($_POST['sexe']) && !empty($_POST['login']) && !empty($_POST['passe']))
    {
        extract($_POST);
        global $bdd;


        if(mb_strlen($passe) < 8)
        {
            $error[0]="Le mot de passe doit contenir au moins 8 caractères !";
        }

        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $error[1]="Votre email est invalide !";
        }

        if(verify("backend_users","login",$login) == true)
        {
            $error[2]="Ce login existe déjà !";
        }

        if(verify("backend_users","email",$email) == true)
        {
            $error[3]="Cette adresse email existe déjà !";
        }

        if(empty($error))
        {
            $code=strtoupper(uniqid());
            $passe=hash("sha256",$passe);

            $d=date("d/m/Y H:i");

            $sql=$bdd->prepare("insert into backend_users(code, nom,prenom, email, sexe, login, password, group_user) values (?,?,?,?,?,?,?,?)");
            $sql->execute(array($code,$nom,$prenom,$email,$sexe,$login,$passe,$group));

            inserLog(getUserLogin(),member_user(getUserLogin())->nom.' '.member_user(getUserLogin())->prenom.' à créer un nouveau membre ( '.$nom.' '.$prenom.' ) ' );
            if($sql)
            {
                echo '<div style="margin-left: 50px;margin-right: 50px" class="alert alert-success alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Enregistrement effecuté avec succès !</a>.</div>';
            }
        }

    }else{
        $error[4]="Champ(s) vide(s) !";

    }
}
