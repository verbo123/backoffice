<?php
$result=array();
if(isset($_GET['id']))
{
    setcookie("themevariable",$_GET['id'],time()+3600*24,'/');
    $result=true;
}else{
    $result=false;
}

echo json_encode($result);