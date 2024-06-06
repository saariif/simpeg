<?php
session_start();
include ('../app/config.php');
if($_POST['proses']=='tampil'){
    $d = mysqli_query($conn, "SELECT * FROM user where id_user = '$_POST[id]'");
    $h = mysqli_fetch_assoc($d);
    $data['nip']=$h['nip'];
    $data["nama_lengkap"]=$h["nama_lengkap"];
    $data["gelar_depan"]=$h["gelar_depan"];
    $data["gelar_belakang"]=$h["gelar_belakang"];
    $data["tempat_lahir"]=$h["tempat_lahir"];
    $data["tgl_lahir"]=$h["tgl_lahir"];
    $data["kelamin"]=$h["kelamin"];
    $data["agama"]=$h["agama"];
    $data["status_kawin"]=$h["status_kawin"];
    $data["status_keluarga"]=$h["status_keluarga"];
    $data["email"]=$h["email"];
    $data["hp"]=$h["hp"];
    echo json_encode($data);
}

if($_POST['proses']=='nomor'){
    $d = mysqli_query($conn, "SELECT * FROM tbl_data_pegawai where id_user = '$_POST[id]'");
    $h = mysqli_fetch_assoc($d);
    $data['no_ktp']=$h['no_ktp'];
    $data['npwp']=$h['npwp'];
    $data['nidn']=$h['nidn'];
    $data['no_kp']=$h['no_kp'];
    $data['no_ekp']=$h['no_ekp'];
    $data['no_taspen']=$h['no_taspen'];
    $data['no_bpjs']=$h['no_bpjs'];
    $data['no_karis']=$h['no_karis'];
    echo json_encode($data);
}
?>