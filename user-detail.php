<?php
$active="ordinary";
require 'pages/header.php';
require 'pages/menu_header.php';
require 'pages/side_menu.php';

$user=infos_user($_GET["user_code"]);

?>

<section class="content">
    <div class="content__inner content__inner--sm">
        <div class="card new-contact">
            <div class="new-contact__header">
                <img src="<?php if($user->photo != ""){echo getUrl().$user->photo;}else{ echo "demo/img/contacts/user_empty.png";} ?>" class="new-contact__img" alt="">
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nom</label>
                            <input disabled="disabled" value="<?php echo $user->nom; ?>" type="text" class="form-control" placeholder="">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Prénom(s)</label>
                            <input disabled="disabled" value="<?php echo $user->prenom; ?>" type="text" class="form-control" placeholder="">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pays de résidence</label>
                            <input value="<?php echo $user->pays_residence; ?>" disabled="disabled" type="text" class="form-control" placeholder="">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nationalité</label>
                            <input value="<?php echo $user->nationalite; ?>" disabled="disabled" type="text" class="form-control" placeholder="">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input disabled="disabled" value="<?php echo $user->adresse; ?>" type="text" class="form-control" placeholder="">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Sexe</label>
                            <input value="<?php echo $user->sexe; ?>" disabled="disabled" type="text" class="form-control" placeholder="i.e. http://smith.com">
                            <i class="form-group__bar"></i>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <label>Téléphone</label>
                    <input disabled="disabled" value="<?php echo $user->tel; ?>" type="text" class="form-control" placeholder="i.e. +14155552671">
                    <i class="form-group__bar"></i>
                </div>

                <div class="clearfix"></div>

            </div>
        </div>



<?php
require 'pages/footer.php';
?>

