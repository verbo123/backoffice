<footer class="footer hidden-xs-down">
    <p>Conçu par DVJL pour GANDOKINTCHE © Tout droit réservé.</p>
</footer>
</section>
</main>

<style>
    option{
        color: black;
    }
</style>

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
<script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

<script src="vendors/bower_components/salvattore/dist/salvattore.min.js"></script>
<script src="vendors/bower_components/flot/jquery.flot.js"></script>
<script src="vendors/bower_components/flot/jquery.flot.resize.js"></script>
<script src="vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
<script src="vendors/bower_components/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
<script src="vendors/bower_components/peity/jquery.peity.min.js"></script>
<script src="vendors/bower_components/moment/min/moment.min.js"></script>
<script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

<!-- Vendors: Data tables -->
<script src="vendors/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendors/bower_components/jszip/dist/jszip.min.js"></script>
<script src="vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>



<!-- App functions and actions -->
<script src="js/app.min.js"></script>


</body>
<style type="text/css">
    button{
        cursor: pointer;
    }
</style>

<script type="text/javascript">

    function logout()
    {
        $.ajax({
            url:'logout.php',
            success : function (data) {
                window.location.href="login";
            }
        });

    }

    function change(id)
    {
        $.ajax({
            url:'Tools/theme.php?id='+id,
            success : function (data) {
                data=JSON.parse(data);
                console.log(data);
                if(data == true)
                {
                    window.location.reload(true);
                }
            }
        });

    }

</script>
<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1.2/ordinary-account.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Oct 2018 07:38:10 GMT -->
</html>