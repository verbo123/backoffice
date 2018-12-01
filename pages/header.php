<?php
if(!isset($_COOKIE["idbackend"]))
{
    header("location: login");
}

require 'pages/appname.php';
require 'Tools/database.php';
require 'Tools/fonction.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1.2/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Oct 2018 07:34:10 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Super Admin 2.0</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
    <link rel="stylesheet" href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">

    <!-- App styles -->
    <link rel="stylesheet" href="css/app.min.css">
</head>
<body data-sa-theme="<?php if(isset($_COOKIE['themevariable'])){echo $_COOKIE['themevariable'];}else{echo '1'; }  ?>">
<main class="main">
    <div class="page-loader">
        <div class="page-loader__spinner">
            <svg viewBox="25 25 50 50">
                <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>

