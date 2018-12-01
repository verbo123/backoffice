<?php
$active="adduser";
require 'pages/header.php';
require 'pages/menu_header.php';
require 'pages/side_menu.php';

?>
<link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="vendors/bower_components/dropzone/dist/dropzone.css">
<link rel="stylesheet" href="vendors/bower_components/flatpickr/dist/flatpickr.min.css" />
<link rel="stylesheet" href="vendors/bower_components/nouislider/distribute/nouislider.min.css">
<link rel="stylesheet" href="css/parsley.css">

<section class="content">
    <div class="content__inner content__inner--sm">
        <form autocomplete="off"  data-parsley-validate method="post">
            <div class="card new-contact">

                <div  class="new-contact__header">
                    <?php
                        require 'Tools/_adduser.php';
                        require 'Tools/errors_files.php';
                    ?>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label>Groupe d'utilisateur</label>

                        <select name="group"  class="select2" data-minimum-results-for-search="Infinity">
                            <option value="">Selectionnez un groupe d'utilisateur</option>
                            <?php
                                foreach (getBackendGroupe() as $group)
                                {
                            ?>
                            <option value="<?php echo $group->code; ?>"><?php echo $group->libelle; ?></option>
                            <?php
                                }
                            ?>
                        </select>

                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nom</label>
                                <input name="nom" required="required" type="text" class="form-control" placeholder="">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Prénom(s)</label>
                                <input name="prenom" required="required" type="text" class="form-control" placeholder="">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" data-parsley-trigger="keypress" required="required" type="text" class="form-control" placeholder="">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sexe</label>
                                <select required="required" name="sexe" class="select2" data-minimum-results-for-search="Infinity">
                                    <option value="masculin">Mascuin</option>
                                    <option value="féminin">Féminin</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Identifiant de connexion</label>
                                <input name="login" required="required" type="text" class="form-control" placeholder="">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mot de passe de connexion</label>
                                <input name="passe" data-parsley-minlength="8" required="required" type="password" class="form-control" placeholder="">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <div class="col-md-6">

                        </div>

                    </div>

                    <div class="clearfix"></div>
                    <div class="mt-5 text-center">
                        <button name="valider" type="submit" class="btn btn-light">Enregistrer</button>
                        <button type="reset" class="btn btn-light">Réinitialiser</button>
                    </div>

                </div>
            </div>
        </form>

        <?php
        require 'pages/footer.php';
        ?>

        <script src="vendors/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
        <script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
        <script src="vendors/bower_components/dropzone/dist/min/dropzone.min.js"></script>
        <script src="js/parsley.min.js"></script>
        <script src="js/fr.js"></script>