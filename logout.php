<?php
	session_start();
	include 'onehand.config/onehand.logout.php';
    unset($_SESSION["id_finger"]);
	unset($_SESSION["id_userabsen"]);
	unset($_SESSION["usernameabsen"]);
	unset($_SESSION["hak_aksesabsen"]);
	unset($_SESSION["nama_lengkapabsen"]);
	unset($_SESSION["IDDOS"]);
	unset($_SESSION["nama_lengkap"]);
	unset($_SESSION["nip"]);
	unset($_SESSION["nama_kantor"]);
	unset($_SESSION["alamat_kantor"]);
	
	echo "<meta http-equiv=refresh content=0;url=\"/simpeg/\">";
?>