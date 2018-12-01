<aside class="sidebar">
    <div class="scrollbar-inner">

        <div class="user">
            <div class="user__info" data-toggle="dropdown">
                <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                <div>
                    <div class="user__name"><?php echo member_user(getUserLogin())->nom.' '.member_user(getUserLogin())->prenom; ?></div>
                    <div class="user__email"><?php echo member_user(getUserLogin())->email; ?></div>
                    <div style="color: white;font-weight: 500" class="user__email"><?php echo find_groupe(member_user(getUserLogin())->group_user)->libelle; ?></div>
                </div>
            </div>

            <div class="dropdown-menu">
                    <a class="dropdown-item" onclick="logout()">Déconnecter</a>
            </div>
        </div>

        <ul class="navigation">
            <li class="<?php if($active == "index"){echo "navigation__active"; } ?>"><a href="index"><i class="zmdi zmdi-home"></i> Accueil</a></li>

            <li class="<?php if($active == "mensuel"){echo "navigation__active"; } ?>"><a href="mensuel-data"><i class="zmdi zmdi-calendar"></i> Statistique mensuelle</a></li>

            <li class="<?php if($active == "other"){echo "navigation__active"; } ?>"><a href="other-statistic"><i class="zmdi zmdi-chart-donut"></i> Autres Statistiques </a></li>

            <li class="<?php if($active == "ordinary" || $active == "partner" || $active == "add"){echo "navigation__sub navigation__sub--active navigation__sub--toggled"; }else{ echo "navigation__sub @@tableactive"; } ?> ">
                <a href="#"><i class="zmdi zmdi-view-list"></i>Comptes utilisateurs</a>

                <ul>
                    <li class="<?php if($active == "ordinary"){echo "navigation__active";}else{echo "@@normaltableactive";} ?> "><a href="ordinary-account">Comptes ordinaires</a></li>
                    <li class="<?php if($active == "partner"){echo "navigation__active";}else{echo "@@datatableactive";} ?>"><a href="partner">Comptes distributeurs</a></li>
                    <li class="<?php if($active == "add"){echo "navigation__active";}else{echo "@@datatableactive";} ?>"><a href="addpartner">Ajout de distributeur</a></li>

                </ul>
            </li>


            <li  class="<?php if($active == "adduser" || $active == "member"){echo "navigation__sub navigation__sub--active navigation__sub--toggled"; }else{ echo "navigation__sub @@tableactive"; } ?>">
                <a href="#"><i class="zmdi zmdi-assignment-account"></i>Interfaces d'utilisateur</a>
                <ul>
                    <li class="<?php if($active == "adduser"){echo "navigation__active";}else{echo "@@normaltableactive";} ?>" >
                        <a href="adduser">
                            Ajout d'un membre
                        </a>
                    </li>

                    <li class="<?php if($active == "member"){echo "navigation__active";}else{echo "@@normaltableactive";} ?>" >
                        <a href="member">
                            Tous les membres
                        </a>
                    </li>
                </ul>
            </li>

            <li class="<?php if($active == "log"){echo "navigation__active"; } ?>"><a href="log"><i class="zmdi zmdi-local-activity"></i> Log </a></li>


        </ul>
    </div>
</aside>

<div class="themes">
    <div class="scrollbar-inner">
        <a onclick="change('1')" class="<?php if(!isset($_COOKIE["themevariable"])){echo 'themes__item active';}else{ echo 'themes__item'; } ?>" data-sa-value="1"><img src="img/bg/1.jpg" alt=""></a>
        <a onclick="change('2')" class="<?php if(isset($_COOKIE["themevariable"]) && $_COOKIE["themevariable"]=='2'){echo 'themes__item active'; }else{ echo 'themes__item'; } ?>" data-sa-value="2"><img src="img/bg/2.jpg" alt=""></a>
        <a onclick="change('3')" class="<?php if(isset($_COOKIE["themevariable"]) && $_COOKIE["themevariable"]==3){echo 'themes__item active'; }else{ echo 'themes__item'; } ?>" data-sa-value="3"><img src="img/bg/3.jpg" alt=""></a>
        <a onclick="change('4')" class="<?php if(isset($_COOKIE["themevariable"]) && $_COOKIE["themevariable"]==4){echo 'themes__item active'; }else{ echo 'themes__item'; } ?>" data-sa-value="4"><img src="img/bg/4.jpg" alt=""></a>
        <a onclick="change('5')" class="<?php if(isset($_COOKIE["themevariable"]) && $_COOKIE["themevariable"]==5){echo 'themes__item active'; }else{ echo 'themes__item'; } ?>" data-sa-value="5"><img src="img/bg/5.jpg" alt=""></a>
        <a onclick="change('6')" class="<?php if(isset($_COOKIE["themevariable"]) && $_COOKIE["themevariable"]==6){echo 'themes__item active'; }else{ echo 'themes__item'; } ?>" data-sa-value="6"><img src="img/bg/6.jpg" alt=""></a>
        <a onclick="change('7')" class="<?php if(isset($_COOKIE["themevariable"]) && $_COOKIE["themevariable"]==7){echo 'themes__item active'; }else{ echo 'themes__item'; } ?>" data-sa-value="7"><img src="img/bg/7.jpg" alt=""></a>
        <a onclick="change('8')" class="<?php if(isset($_COOKIE["themevariable"]) && $_COOKIE["themevariable"]==8){echo 'themes__item active'; }else{ echo 'themes__item'; } ?>" data-sa-value="8"><img src="img/bg/8.jpg" alt=""></a>
        <a onclick="change('9')" class="<?php if(isset($_COOKIE["themevariable"]) && $_COOKIE["themevariable"]==9){echo 'themes__item active'; }else{ echo 'themes__item'; } ?>" data-sa-value="9"><img src="img/bg/9.jpg" alt=""></a>
        <a onclick="change('10')" class="<?php if(isset($_COOKIE["themevariable"]) && $_COOKIE["themevariable"]==10){echo 'themes__item active'; }else{ echo 'themes__item'; } ?>" data-sa-value="10"><img src="img/bg/10.jpg" alt=""></a>
    </div>
</div>
