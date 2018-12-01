<?php
$active = "index";
require 'pages/header.php';
require 'pages/menu_header.php';
require 'pages/side_menu.php';

?>



            <section class="content">
                <header class="content__title">
                    <h1>Accueil</h1>
                    <small>Bienvenue sur l'interface d'administration</small>

                    <div class="actions">
                            <div class="dropdown actions__item">
                                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:loadview()" class="dropdown-item">Rafraîchir</a>
                                    <a href="other-statistic" class="dropdown-item">Autres statistiques</a>
                                    <a href="mensuel-data" class="dropdown-item">Données mensuelles </a>
                                </div>
                            </div>
                        </div>
                </header>

                <div class="row quick-stats">
                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2><?php echo resultCount(count(getAllUser())); ?></h2>
                                <small>Total des comptes utilisateurs</small>
                            </div>

                            <div class=""><i style="font-size: 65px" class="zmdi zmdi-account"></i> </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2><?php echo resultCount(count(getAllTransaction())); ?></h2>
                                <small>Total des virements enregistrés</small>
                            </div>

                            <div class=""><i style="font-size: 65px" class="zmdi zmdi-trending-up"></i></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2>00</h2>
                                <small>Total API/SDK téléchargé</small>
                            </div>

                            <div class=""><i style="font-size: 65px" class="zmdi zmdi-case-download"></i></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="quick-stats__item">
                            <div class="quick-stats__info">
                                <h2><?php echo resultCount(count(getAll_app())); ?></h2>
                                <small>Applications</small>
                            </div>

                            <div style="margin-left: 60px;" class=""><i style="font-size: 65px" class="zmdi zmdi-apps"></i></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Statistique de ventes en ligne</h4>
                                <h6 class="card-subtitle">Il s'agit des ventes sur le site e-commerce</h6>

                                <div class="flot-chart flot-curved-line"></div>
                                <div class="flot-chart-legends flot-chart-legends--curved"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Statistique du service de virement</h4>
                                <h6 class="card-subtitle">Il s'agit du nombre de virements effectués par les utilisateurs</h6>

                                <div class="flot-chart flot-line"></div>
                                <div class="flot-chart-legends flot-chart-legends--line"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-columns>
                    <div class="card widget-past-days">
                        <div class="card-body">
                            <h4 class="card-title">Nombre de visiteur 30 jours passés</h4>
<!--                            <h6 class="card-subtitle">Pellentesque ornare sem lacinia quam</h6>-->
                        </div>

                        <div class="flot-chart flot-chart--sm flot-past-days"></div>

                        <div class="listview listview--bordered">

                            <div class="listview__item">
                                <div class="widget-past-days__info">
                                    <small>Nombre de Pages visitées</small>
                                    <h3>
                                        <?php echo resultCount(getVisiteurPage30jrs()->nbre); ?>
                                    </h3>
                                </div>

                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="peity-bar">6,9,5,6,3,7,5,4,6,5,6,4,2,5,8,2,6,9</div>
                                </div>
                            </div>

                            <div class="listview__item">
                                <div class="widget-past-days__info">
                                    <small>Nombre de visiteurs du site</small>
                                    <h3>  <?php echo resultCount(getVisiteurTotal30jrs()->nbre); ?></h3>
                                </div>

                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="peity-bar">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>
                                </div>
                            </div>

<!--                            <div class="listview__item">-->
<!--                                <div class="widget-past-days__info">-->
<!--                                    <small>Nombre de connexion sur le dashbaord</small>-->
<!--                                    <h3>13,965</h3>-->
<!--                                </div>-->
<!---->
<!--                                <div class="widget-past-days__chart hidden-sm">-->
<!--                                    <div class="peity-bar">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>-->
<!--                                </div>-->
<!--                            </div>-->

                            <div class="listview__item">
                                <div class="widget-past-days__info">
                                    <small>Nombre de compte créer</small>
                                    <h3><?php echo resultCount(getCompteCreate30jrs()->nbre); ?></h3>
                                </div>

                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="peity-bar">3,9,1,3,5,6,7,6,8,2,5,2,7,5,6,7,6,8</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card widget-visitors">
                        <div class="card-body">
                            <h4 class="card-title">Nombre de visiteur en temps réel</h4>
<!--                            <h6 class="card-subtitle">Nullam dolor isnibh ultricies vehicula adipiscing</h6>-->

                            <div class="widget-visitors__stats">
                                <div>
                                    <strong id="24h">

                                    </strong>
                                    <small>Visiteurs il y a 24h</small>
                                </div>
                                <div>
                                    <strong id="30mn">

                                    </strong>
                                    <small>Visiteurs il y a 30 minutes</small>
                                </div>
                            </div>

                            <div class="widget-visitors__map map-visitors"></div>
                        </div>

                        <div class="listview listview--bordered">
                            <div class="listview__item">
                                <div class="listview__content">
                                    <div class="listview__heading">Navigateurs utilisés actuellement</div>

                                    <div class="listview__attrs">
                                        <?php
                                        if(count(getNavigateurs()) >0)
                                        {
                                            foreach (getNavigateurs() as $nav)
                                            {
                                                echo '<span>';
                                                echo $nav->navigateur;
                                                echo '</span>';
                                            }
                                        }
                                        ?>
                                    </div>


                                </div>
                            </div>
<!---->
<!--                            <div class="listview__item">-->
<!--                                <div class="listview__content">-->
<!--                                    <div class="listview__heading">Sunday, September 4, 20:21:01 (5 Mins 12 Seconds)</div>-->
<!---->
<!--                                    <div class="listview__attrs">-->
<!--                                        <span>Australia</span>-->
<!--                                        <span>Chrome</span>-->
<!--                                        <span>Android</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="listview__item">-->
<!--                                <div class="listview__content">-->
<!--                                    <div class="listview__heading">Sunday, September 4, 20:21:10 (10 Mins 43 Seconds)</div>-->
<!---->
<!--                                    <div class="listview__attrs">-->
<!--                                        <span>Brazil</span>-->
<!--                                        <span>Edge</span>-->
<!--                                        <span>Windows</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="listview__item">-->
<!--                                <div class="listview__content">-->
<!--                                    <div class="listview__heading">Sunday, September 4, 20:59:04 (1 Min 02 Seconds)</div>-->
<!---->
<!--                                    <div class="listview__attrs">-->
<!--                                        <span>South Korea</span>-->
<!--                                        <span>Chrome</span>-->
<!--                                        <span>Android</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                            <div class="listview__item">-->
<!--                                <div class="listview__content">-->
<!--                                    <div class="listview__heading">Sunday, September 4, 20:58:12 (3 Min 44 Seconds)</div>-->
<!---->
<!--                                    <div class="listview__attrs">-->
<!--                                        <span>Japan</span>-->
<!--                                        <span>Chrome</span>-->
<!--                                        <span>Windows</span>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->

                            <div class="p-3"></div>
                        </div>
                    </div>


                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Processus en cours</h4>

                        <div class="flot-chart flot-dynamic"></div>
                        <div class="flot-chart-legends flot-chart-legends--dynamic"></div>
                    </div>
                </div>

       <?php require 'pages/footer.php'; ?>

                <!-- Charts and maps-->
                <script src="demo/js/flot-charts/curved-line.js"></script>
                <script src="demo/js/flot-charts/line.js"></script>
                <script src="demo/js/flot-charts/dynamic.js"></script>
                <script src="demo/js/flot-charts/chart-tooltips.js"></script>
                <script src="demo/js/other-charts.js"></script>
                <script src="demo/js/jqvmap.js"></script>

<script type="text/javascript">

    $('#24h').html("Chargement...");
    $('#30mn').html("Chargement...");

    function resut(nbre)
    {
        data='';
        if(nbre == 0 || nbre==1 || nbre==2 || nbre==3 || nbre==4 || nbre==5 || nbre==6 || nbre==7 || nbre==8 || nbre==9)
        {
            data="0"+nbre;
        }else {
            data=nbre;
        }
        return data;
    }

    setInterval(function () {
        $.ajax({
            url:'Tools/visiteurs24h.php',
            success : function (data) {
                data=JSON.parse(data);
                $('#24h').html(resut(data.nbre));
            }
        });
    }, 5000);


    setInterval(function () {
        $.ajax({
            url:'Tools/visiteurs30mn.php',
            success : function (data) {
                data=JSON.parse(data);
                $('#30mn').html(resut(data.nbre));
            }
        });
    }, 5000);

    function loadview() {
        window.location.reload();
    }


</script>
