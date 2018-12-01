<?php
$active="add";
require 'pages/header.php';
require 'pages/menu_header.php';
require 'pages/side_menu.php';
?>
<link rel="stylesheet" href="vendors/bower_components/sweetalert2/dist/sweetalert2.min.css">
<link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="vendors/bower_components/dropzone/dist/dropzone.css">

<section class="content">

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ajout d'un distributeur</h4>

                        <div class="table-responsive">
                            <table id="" class="data-table table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom et Prénom(s)</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
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
                                        <td><?php echo $user->tel; ?></td>
                                        <td><?php echo date_conversion($user->date_created); ?></td>
                                        <td>
                                            <span class="btn-demo">
                                                <?php
                                                if(verify("recharge_autorisation","utilisateur",$user->code) == false)
                                                {
                                                ?>
                                                       <button onclick="viewData('<?php echo $user->nom." ".$user->prenom; ?>', '<?php echo $user->code; ?>')"  style="width: 2em;height: 2em" class="sa-info btn btn-dark btn--icon"><i class="zmdi zmdi-settings"></i></button>
                                                <?php

                                                }else{

                                                ?>

                                                    <button  style="width: 2em;height: 2em" class="sa-info btn btn-success btn--icon"><i class="zmdi zmdi-check-all"></i></button>

                                                    <?php

                                                }
                                                ?>
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

    <div class="modal fade" id="modal-no-backdrop" data-backdrop="false" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="titre" class="modal-title pull-left"> </h5>
                </div>
                <div id="data" class="modal-body">
                    <div class="form-group">
                        <input hidden="hidden" id="code" type="text" class="form-control">
                        <label>Premier achat de crédit</label>
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
                    <button id="enr" type="button" class="btn btn-link">Enregistrer</button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>


<?php
require 'pages/footer.php';
?>

    <style type="text/css">
        button{
            cursor: pointer;
        }

    </style>
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
                    url:'Tools/recharge_autorisation.php',
                    type:'POST',
                    async:true,
                    data:"credit="+encodeURIComponent( ($('#sel').val() * 1.1).toFixed(0) )+"&user="+encodeURIComponent($('#code').val()),
                    success : function (data) {
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
                                window.location.href="addpartner";
                            });
                        }
                    }
                });

            }
        });

        function viewData(nom,login)
        {
            swal({
                title: 'Voulez-vous donner une autorisation de recharge de compte ?' ,
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


