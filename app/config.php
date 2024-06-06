<?php
// date_default_timezone_set('Asia/Jakarta');

// define('DB_HOST', '192.168.10.70');
// define('DB_USER', 'iainmdr');
// define('DB_PASS', '2k@dEm!k1aiN');
// define('DB_NAME', 'simpadu_kinerja');

// // App Root
// define("APPROOT", dirname(dirname(__FILE__))."/");

// // Url Root
// $host1 = "/simpeg/";
// $host = "/";
// define("URLROOT", "host1");

// // Site Name
// define("SITENAME", "IAIN Madura");

$db_host = "localhost";
$db_user = "root";
$db_pass = "1@indb";
$db_host = "103.162.55.10";
$db_host = "192.168.10.70";
$db_host1 = "192.168.10.69";
$db_user = "iainmdr";
$db_pass = "2k@dEm!k1aiN";
$db_name = "simpadu_kinerja";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo mysqli_connect_error();
}
$finpro = mysqli_connect($db_host, $db_user, $db_pass, "fin_pro");

$akademik = mysqli_connect($db_host1, $db_user, $db_pass, "simpadu_akademik");

?>
