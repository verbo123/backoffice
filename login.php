<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1.2/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Oct 2018 07:42:13 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">
    </head>

    <body data-sa-theme="1">
        <div class="login">

            <!-- Login -->
            <div class="login__block active" id="l-login">
                <div class="login__block__header">
                    <i class="zmdi zmdi-account-circle"></i>
                    Connectez-vous ! <strong>(Propriétaire)</strong>
                    <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-login2" href="#">En tant qu'Administrateur</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="login__block__body">
                    <div class="form-group">
                        <input id="mail" type="text" class="form-control text-center" placeholder="Votre Email">
                    </div>

                    <div class="form-group">
                        <input id="paxe" type="password" class="form-control text-center" placeholder="Mot de passe">
                    </div>

                    <a onclick="proprietaire()" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-long-arrow-right"></i></a>
                </div>
            </div>

            <div class="login__block" id="l-login2">
                <div class="login__block__header">
                    <i class="zmdi zmdi-account-circle"></i>
                    Connectez-vous ! <strong>(Administrateur)</strong>
                    <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-login" href="#">En tant que Propriétaire</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="login__block__body">
                    <div class="form-group">
                        <input id="login" type="text" class="form-control text-center" placeholder="Votre login">
                    </div>

                    <div class="form-group">
                        <input id="px" type="password" class="form-control text-center" placeholder="Mot de passe">
                    </div>

                    <a onclick="admin()" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-long-arrow-right"></i></a>
                </div>
            </div>





            <!-- Register -->
            <div class="login__block" id="l-register">
                <div class="login__block__header">
                    <i class="zmdi zmdi-account-circle"></i>
                    Créer un compte

                    <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-login" href="#">Vous avez déjà un compte ?</a>
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-forget-password" href="#">Mot de passe oublié ?</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="login__block__body">
                    <div class="form-group">
                        <input id="name" type="text" class="form-control text-center" placeholder="Nom et Prénom(s)">
                        <span style="color: red" id="error_name"></span>
                    </div>

                    <div class="form-group form-group--centered">
                        <input id="email" type="text" class="form-control text-center" placeholder="Email">
                        <span style="color: red" id="error_mail"></span>
                    </div>

                    <div class="form-group form-group--centered">
                        <input id="pax1" type="password" class="form-control text-center" placeholder="Mot de passe">
                        <span style="color: red" id="error_pas1"></span>
                    </div>

                    <div class="form-group form-group--centered">
                        <input id="pax2" type="password" class="form-control text-center" placeholder="Confirmer le mot de passe">
                        <span style="color: red" id="error_pas2"></span>
                    </div>
                    
                    <a onclick="register()" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-plus"></i></a>
                </div>
            </div>

            <!-- Forgot Password -->
            <div class="login__block" id="l-forget-password">
                <div class="login__block__header">
                    <i class="zmdi zmdi-account-circle"></i>
                    Forgot Password?

                    <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-login" href="#">Vous avez déjà un compte ?</a>
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-register" href="#">Créez un compte</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="login__block__body">
                    <p class="mb-5">Lorem ipsum dolor fringilla enim feugiat commodo sed ac lacus.</p>

                    <div class="form-group">
                        <input type="text" class="form-control text-center" placeholder="Email Address">
                    </div>

                    <a  class="btn btn--icon login__block__btn"><i class="zmdi zmdi-check"></i></a>
                </div>
            </div>
        </div>

        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <script src="vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
        <script src="vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>

<script type="text/javascript">


    function proprietaire() {
        if($('#mail').val() != '' && $('#paxe').val() != '')
        {
            $.ajax({
                url:'Tools/connect.php',
                type:'POST',
                async:true,
                data:"email="+encodeURIComponent( $('#mail').val())+"&paxe="+encodeURIComponent($('#paxe').val()),
                success : function (data) {
                    data=JSON.parse(data);
                    console.log(data);
                    if(data.msg === true)
                    {
                        window.location.href='index';
                    }else
                        var nFrom = $(this).attr('data-from');
                        var nAlign = $(this).attr('data-align');
                        var nIcons = $(this).attr('data-icon');
                        var nType = 'danger';
                        var nAnimIn = $(this).attr('data-animation-in');
                        var nAnimOut = $(this).attr('data-animation-out');
                        {
                        if(data.hasOwnProperty('id'))
                        {
                            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut,data.id);
                        }else{
                            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut,data.msg);
                        }
                    }

                }
            });
        }
    }


    function admin() {
        if($('#login').val() != '' && $('#px').val() != '')
        {
            $.ajax({
                url:'Tools/connect_admin.php',
                type:'POST',
                async:true,
                data:"login="+encodeURIComponent( $('#login').val())+"&paxe="+encodeURIComponent($('#px').val()),
                success : function (data) {
                    data=JSON.parse(data);
                    console.log(data);
                    if(data.msg === true)
                    {
                        window.location.href='index';
                    }else
                        var nFrom = $(this).attr('data-from');
                    var nAlign = $(this).attr('data-align');
                    var nIcons = $(this).attr('data-icon');
                    var nType = 'danger';
                    var nAnimIn = $(this).attr('data-animation-in');
                    var nAnimOut = $(this).attr('data-animation-out');
                    {
                        if(data.hasOwnProperty('id'))
                        {
                            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut,data.id);
                        }else{
                            notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut,data.msg);
                        }
                    }

                }
            });
        }
    }


    function notify(from, align, icon, type, animIn, animOut,msg){
        $.notify({
            icon: icon,
            title: '',
            message: msg,
            url: ''
        },{
            element: 'body',
            type: type,
            allow_dismiss: true,
            placement: {
                from: from,
                align: align
            },
            offset: {
                x: 20,
                y: 20
            },
            spacing: 10,
            z_index: 1031,
            delay: 2500,
            timer: 1000,
            url_target: '_blank',
            mouse_over: false,
            animate: {
                enter: animIn,
                exit: animOut
            },
            template:   '<div data-notify="container" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '<button type="button" aria-hidden="true" data-notify="dismiss" class="close"><span>×</span></button>' +
            '</div>'
        });
    }





    function validate() {
        var name=$('#name');
        var email=$('#email');
        var pax1=$('#pax1');
        var pax2=$('#pax2');
        if(name.val() == '' && email.val() == '' && pax1.val() == '' && pax2.val() == '' )
        {
            $('#error_name').html('Champ obligatoire !');
            $('#error_mail').html('Champ obligatoire !');
            $('#error_pas1').html('Champ obligatoire !');
            $('#error_pas2').html('Champ obligatoire !');

            name.addClass('is-invalid');
            email.addClass('is-invalid');
            pax1.addClass('is-invalid');
            pax2.addClass('is-invalid');
            return false;
        }else{
            if(pax1.val().length < 9)
            {
                $('#error_pas1').html('Le mot de passe doit contenir au moins 08 caractères !');
                pax1.addClass('is-invalid');
                return false;
            }else {
                if(pax1.val() != pax2.val())
                {
                    $('#error_pas2').html('Les deux mots de passe ne sont pas les mêmes !');
                    pax2.addClass('is-invalid');
                    return false;
                }else{
                    return true;
                }
            }
        }

    }


    function register()
    {

      if(validate())
      {
        
      }

    }
</script>

<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1.2/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Oct 2018 07:42:13 GMT -->
</html>