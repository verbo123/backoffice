<?php
$active='member';
require 'pages/header.php';
require 'pages/menu_header.php';
require 'pages/side_menu.php';
?>

<section class="content">
                <div class="content__inner">
                    <header class="content__title">
                        <h1>Tous les membres</h1>
                    </header>

                    <div class="card">
                        <div class="toolbar toolbar--inner">

                            <div class="actions">

                            </div>

                            <div class="toolbar__search">
                                <input type="text" placeholder="Search for issues...">
                                <i class="toolbar__search__close zmdi zmdi-long-arrow-left" data-sa-action="toolbar-search-close"></i>
                            </div>
                        </div>

                        <div class="listview listview--bordered issue-tracker">
                            <?php
                                foreach (getBackendUser() as $user)
                                {
                            ?>

                            <div class="listview__item">
                                <i class="avatar-char hidden-sm-down"><?php echo substr($user->nom,0,1); ?></i>

                                <div class="listview__content text-truncate">
                                    <a class="listview__heading" href="#"><?php echo $user->nom." ".$user->prenom; ?></a>
                                    <p><?php echo $user->email; ?>, <strong>Nom d'utilisateur : <?php echo $user->login; ?> </strong></p>
                                </div>

                                <div class="issue-tracker__item">
                                    <?php
                                        if($user->group_user == "PRO")
                                        {
                                          echo '<span class="issue-tracker__tag bg-danger">' .find_groupe($user->group_user)->libelle.'</span>';
                                        }else{
                                            echo '<span class="issue-tracker__tag bg-indigo">'.find_groupe($user->group_user)->libelle.'</span>';
                                        }
                                    ?>
                                </div>

                                <div class="issue-tracker__item hidden-lg-down">
                                    <i class="zmdi zmdi-time"></i><?php echo date_conversion($user->date_created); ?>
                                </div>

                                <div class="issue-tracker__item actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>

                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--active dropdown-menu--icon">
                                            <a href="updateuser?user=<?php echo $user->code ?>" class="dropdown-item"><i class="zmdi zmdi-edit"></i>Modifier</a>
                                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-delete"></i>Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php

                                }
                                ?>

                            <div class="clearfix m-4"></div>
                        </div>
                    </div>

        <?php require 'pages/footer.php'; ?>