<?php
$active="ordinary";
require 'pages/header.php';
require 'pages/menu_header.php';
require 'pages/side_menu.php';
?>
<link rel="stylesheet" href="vendors/bower_components/sweetalert2/dist/sweetalert2.min.css">


<section class="content">
                <header class="content__title">
                    <h1>LISTE DES UTILISATEURS AYANT UN COMPTE ACTIVE</h1>


                </header>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tous les utilisateurs <span class="badge badge-pill badge-success"><?php echo resultCount(count(getAllUser())); ?> Utilisateurs</span></h4>
                        <h6 class="card-subtitle">
                            Il s'agit de la liste de tous les utilisateurs ayant un compte chez nous.
                        </h6>

                        <div class="table-responsive">
                            <table id="" class="data-table table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom et Prénom(s)</th>
                                        <th>Email</th>
                                        <th>ID d'opération</th>
                                        <th>Date de création</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach (getAllUser() as $user)
                                    {
                                        $nbreTransaction=resultCount(count(findTransaction($user->code)));
                                ?>
                                    <tr>
                                        <td><?php echo $user->code; ?></td>
                                        <td><?php echo $user->nom." ".$user->prenom; ?></td>
                                        <td><?php echo $user->adresse; ?></td>
                                        <td><?php echo $user->op_code; ?></td>
                                        <td><?php echo date_conversion($user->date_created); ?></td>
                                        <td>
                                            <span class="btn-demo">
                                            <button onclick="viewData('<?php echo $nbreTransaction; ?>', '<?php echo $user->code; ?>')"  style="width: 2em;height: 2em" class="sa-info btn btn-dark btn--icon"><i class="zmdi zmdi-trending-up"></i></button>
                                            <a href="user-detail?user_code=<?php echo $user->code; ?>"  style="width: 2em;height: 2em" class="detail btn btn-info btn--icon"><i class="zmdi zmdi-assignment-account"></i></a>
                                            </span>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>




<?php
require 'pages/footer.php';
?>


    <script src="vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
    <script src="vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>


    <script type="text/javascript">


        function viewData(nbre,login)
        {
            swal({
                title: 'Nombre total d\'opération effectuée',
                text: nbre+' transaction(s)',
                type: 'info',
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonClass: 'btn btn-danger',
                confirmButtonText: 'Consulter',
                cancelButtonClass: 'btn btn-light',
                background: 'rgba(0, 0, 0, 0.96)'
            }).then(function(){
                window.location.href='operation?id='+login;
            });
        }



    </script>


