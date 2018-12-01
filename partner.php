<?php
$active = "partner";
require 'pages/header.php';
require 'pages/menu_header.php';
require 'pages/side_menu.php';
?>

<link rel="stylesheet" href="vendors/bower_components/sweetalert2/dist/sweetalert2.min.css">
<link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="vendors/bower_components/dropzone/dist/dropzone.css">
<section class="content">
                <header class="content__title">
                    <h1>LISTE DES DISTRIBUTEURS AYANT UNE AUTORISATION</h1>


                </header>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nos distributeurs <span class="badge badge-pill badge-success"><?php echo resultCount(count(getAllDistributeur())); ?> Distributeur(s)</span></h4>
                        <h6 class="card-subtitle">
                            Il s'agit de la liste des utilisateurs ayant une autorisation d'effectuer des opérations de recharge de compte</h6>

                        <div class="table-responsive">
                            <table id="" class="data-table table">
                                <thead>
                                <tr>
                                    <th>Identifiant</th>
                                    <th>Nom et Prénom(s)</th>
                                    <th>Email</th>
                                    <th>Dernier achat de crédit</th>
                                    <th>Crédit en cours</th>
                                    <th>Pays de résidence</th>
                                    <th>Date d'autorisation</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach (getAllDistributeur() as $user)
                                {
                                    $id=$user->utilisateur;
                                    ?>
                                    <tr>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo  infos_user($id)->nom." ".infos_user($id)->prenom; ?></td>
                                        <td><?php echo infos_user($id)->adresse; ?></td>
                                        <td><?php echo date_conversion($user->date_update); ?></td>
                                        <td><?php echo $user->solde; ?></td>
                                        <td><?php echo infos_user($id)->pays_residence; ?></td>
                                        <td><?php echo date_conversion($user->date_created); ?></td>
                                        <td>
                                            <button  title="Vente de crédit." data-toggle="tooltip" data-placement="right"  onclick="viewData('<?php echo infos_user($id)->nom." ".infos_user($id)->prenom; ?>', '<?php echo $id; ?>')"  style="width: 2em;height: 2em" class="sa-info btn btn-dark btn--icon"><i class="zmdi zmdi-local-gas-station"></i></button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href="addpartner" class="btn btn-light btn--action btn--fixed"><i class="zmdi zmdi-plus"></i></a>
                </div>


    <div class="modal fade" id="modal-no-backdrop" data-backdrop="false" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="titre" class="modal-title pull-left"> </h5>
                </div>
                <div id="data" class="modal-body">
                    <div class="form-group">
                        <input hidden="hidden" id="code" type="text" class="form-control">
                        <label>Montant de crédit</label>
                        <select id="sel"  class="select2">
                            <option value=""> </option>
                            <option  value="5000">5 000 FCFA</option>
                            <option value="10000">10 000 FCFA</option>
                            <option value="15000">15 000 FCFA</option>
                            <option value="20000">20 000 FCFA</option>
                            <option value="25000">25 000 FCFA</option>
                            <option value="30000">30 000 FCFA</option>
                            <option value="35000">35 000 FCFA</option>
                            <option value="40000">40 000 FCFA</option>
                            <option value="45000">45 000 FCFA</option>
                            <option value="50000">50 000 FCFA</option>
                            <option value="55000">55 000 FCFA</option>
                            <option value="60000">60 000 FCFA</option>
                            <option value="65000">65 000 FCFA</option>
                            <option value="70000">70 000 FCFA</option>
                            <option value="75000">75 000 FCFA</option>
                            <option value="80000">80 000 FCFA</option>
                            <option value="85000">85 000 FCFA</option>
                            <option value="90000">90 000 FCFA</option>
                            <option value="95000">95 000 FCFA</option>
                            <option value="100000">100 000 FCFA</option>
                        </select>
                        <label id="res"> </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="enr" type="button" class="btn btn-link">Créditer</button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>


    <?php
    require 'pages/footer.php';
    ?>
    <script src="vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
    <script src="vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

    <script type="text/javascript">

        $('#sel').change(function () {
            if($('#sel').val() != ''){
                dat=$('#sel').val() * 1.1;
                $("#res").html("Soit "+dat.toFixed(0)+" de crédit");
            }

        });

        $('#enr').click(function () {
            if($('#sel').val() != '' && $('#code').val() != '')
            {

                $("#modal-no-backdrop").modal("hide");
                $.ajax({
                    url:'Tools/recharge_credit.php',
                    type:'POST',
                    async:true,
                    data:"credit="+encodeURIComponent( ($('#sel').val() * 1.1).toFixed(0) )+"&user="+encodeURIComponent($('#code').val()),
                    success : function (data) {
                        console.log(data);
                        data=JSON.parse(data);
                        if(data.msg != false)
                        {
                            swal({
                                title: data.msg,
                                text:'',
                                type: 'success',
                                buttonsStyling: false,
                                confirmButtonClass: 'btn btn-sm btn-light',
                                background: 'rgba(0, 0, 0, 0.96)'
                            }).then(function(){
                                window.location.href="partner";
                            });
                        }
                    }
                });

            }
        });

        function viewData(nom,login)
        {
            swal({
                title: 'Recharge de crédit ?' ,
                text: 'Compte de : '+nom,
                type: 'question',
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonClass: 'btn btn-danger',
                confirmButtonText: 'Oui',
                cancelButtonClass: 'btn btn-light',
                background: 'rgba(0, 0, 0, 0.96)'
            }).then(function(){
                $('#titre').html(nom);
                $('#code').val(login);
                $("#modal-no-backdrop").modal("show");
            });
        }



    </script>


