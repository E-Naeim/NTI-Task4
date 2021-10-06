<?php

session_start();
$profile = implode('<br>', $_SESSION['Profile']);


setcookie('user',$profile,time()+86400,'/');
echo $_COOKIE['user'];

?>