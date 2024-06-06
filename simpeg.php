<?php
session_start();
include "onehand.config/onehand.php";
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
include "app/config.php";
include "app/fungsi_indotgl.php";
include "app/function.php";
$url = explode("-", $_GET['url']);
// echo $_SESSION['id_finger'];
if (empty($_SESSION['id_finger'])) {
    include "login.php";
}else{
    include "home.php";
}
?>