<?php
$active="log";
require 'pages/header.php';
require 'pages/menu_header.php';
require 'pages/side_menu.php';
?>
<link rel="stylesheet" href="vendors/bower_components/sweetalert2/dist/sweetalert2.min.css">


<section class="content">

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="" class="data-table table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom et Prénom(s)</th>
                        <th>Actions</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach (getAllLog() as $lo)
                    {
                        $m=member_user($lo->userid);
                        ?>
                        <tr>
                            <td><?php echo $lo->id; ?></td>
                            <td><?php echo $m->nom." ".$m->prenom; ?></td>
                            <td><?php echo $lo->actions; ?></td>
                            <td><?php echo date_conversion($lo->date_created); ?></td>
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
