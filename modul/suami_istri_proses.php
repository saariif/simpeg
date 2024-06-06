<?php
session_start();
include ('../app/config.php');
if($_POST['proses']=='tambah'){
    $data['nama']="";
    $data['tempat_lahir']="";
    $data['tanggal_lahir']="";
    $data['tanggung']="";
    $data['keterangan']="";
    echo json_encode($data);
}