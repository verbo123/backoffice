<?php
global  $bdd;
$error=array();
if(isset($_POST['valider']) && isset($_GET['user']))
{
    if(!empty($_POST['group']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['sexe']) )
    {
        extract($_POST);
        global $bdd;

            $code=$_GET['user'];
            $sql=$bdd->prepare("update backend_users set nom=?, prenom=?, sexe=?, group_user=? where code=?");
            $sql->execute(array($nom,$prenom,$sexe,$group,$code));

            if($sql)
            {
                echo '<div style="margin-left: 50px;margin-right: 50px" class="alert alert-success alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Modification effecutée avec succès !</a>.</div>';
            }else{
                echo '<div style="margin-left: 50px;margin-right: 50px" class="alert alert-danger alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Une erreur interne du serveur s\'est produite !</a>.</div>';

            }


    }else{
        $error[0]="Champ(s) vide(s) !";

    }
}
