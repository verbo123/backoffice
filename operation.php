<?php
$active="ordinary";
require 'pages/header.php';
require 'pages/menu_header.php';
require 'pages/side_menu.php';
?>

<section class="content">
    <header class="content__title">
        <h1><?php echo infos_user($_GET['id'])->nom." ".infos_user($_GET['id'])->prenom; ?></h1>
        <small><?php echo infos_user($_GET['id'])->adresse; ?></small>

        <div class="actions">

        </div>
    </header>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Toutes les transations effectuées</h4>

            <div class="tab-container">
                <ul class="nav nav-tabs nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home-2" role="tab">Virements effectuées</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile-2" role="tab">Reception d'argent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages-2" role="tab">Recharge de compte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#settings-2" role="tab">Achats en ligne</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active fade show" id="home-2" role="tabpanel">
                        <div class="table-responsive">
                            <table id="" class="data-table table">
                                <thead>
                                <tr>
                                    <th>N° Transaction</th>
                                    <th>Date d'opération</th>
                                    <th>Nom et Prénom du Reçeveur</th>
                                    <th>Montant envoyé</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach (findTransaction($_GET['id']) as $user)
                                {
                                    if($user->code_user_receiver != $_GET['id'] && $user->typ_virement == "CLA")
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $user->no_trans; ?></td>
                                        <td><?php echo date_conversion($user->date); ?></td>
                                        <td><?php echo infos_user($user->code_user_sender)->nom." ".infos_user($user->code_user_sender)->prenom; ?></td>
                                        <td><?php echo $user->montant; ?> FCFA</td>
                                    </tr>
                                    <?php
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                   </div>
                    <div class="tab-pane fade" id="profile-2" role="tabpanel">
                        <div class="table-responsive">
                            <table id="" class="data-table table">
                                <thead>
                                <tr>
                                    <th>N° Transaction</th>
                                    <th>Date d'opération</th>
                                    <th>Envoyeur</th>
                                    <th>Montant reçu</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach (findTransaction($_GET['id']) as $user)
                                {
                                    if($user->code_user_receiver == $_GET['id'] && $user->typ_virement == "CLA")
                                    {
                                        ?>
                                        <tr>
                                            <td><?php echo $user->no_trans; ?></td>
                                            <td><?php echo date_conversion($user->date); ?></td>
                                            <td><?php echo infos_user($user->code_user_sender)->nom." ".infos_user($user->code_user_sender)->prenom; ?></td>
                                            <td><?php echo $user->montant; ?> FCFA</td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                   </div>
                    <div class="tab-pane fade" id="messages-2" role="tabpanel">
                        <div class="table-responsive">
                            <table id="" class="data-table table">
                                <thead>
                                <tr>
                                    <th>N° Transaction</th>
                                    <th>Date de recharge</th>
                                    <th>Distributeur</th>
                                    <th>Montant</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach (findTransaction($_GET['id']) as $user)
                                {
                                    if($user->code_user_receiver == $_GET['id'] && $user->typ_virement == "REC")
                                    {
                                        ?>
                                        <tr>
                                            <td><?php echo $user->no_trans; ?></td>
                                            <td><?php echo date_conversion($user->date); ?></td>
                                            <td><?php echo infos_user($user->code_user_sender)->nom." ".infos_user($user->code_user_sender)->prenom; ?></td>
                                            <td><?php echo $user->montant; ?> FCFA</td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="settings-2" role="tabpanel">
                        <div class="table-responsive">
                            <table id="" class="data-table table">
                                <thead>
                                <tr>
                                    <th>N° Transaction</th>
                                    <th>Date d'achat</th>
                                    <th>Site du marchand</th>
                                    <th>Montant</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach (findTransaction($_GET['id']) as $user)
                                {
                                    if($user->typ_virement == "ACHA")
                                    {
                                        ?>
                                        <tr>
                                            <td><?php echo $user->no_trans; ?></td>
                                            <td><?php echo date_conversion($user->date); ?></td>
                                            <td><?php echo infos_user($user->code_user_sender)->nom." ".infos_user($user->code_user_sender)->prenom; ?></td>
                                            <td><?php echo $user->montant; ?> FCFA</td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





<?php
require 'pages/footer.php';
?>
