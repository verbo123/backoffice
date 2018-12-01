<?php

setcookie("idbackend","",time()-3600,"/");
unset($_COOKIE["idbackend"]);
  header("location:login");
exit();

