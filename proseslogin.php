<?php
session_start();
include "app/config.php";
    if(isset($_POST["username"]) && isset($_POST["password"])){
        $user = $_POST["username"];
        $pass = $_POST["password"];
        $qr="SELECT * FROM user a inner join unit b on a.id_unit=b.id_unit 
        WHERE lower(a.username)='$user'";
        $query=mysqli_query($conn, $qr) or die ("Query salah !");
        $hasil=mysqli_fetch_assoc($query);
        if(!empty($hasil["username"])){
            if ((trim($hasil["username"])==trim($user)) && ((trim($hasil["password"])==trim($pass))) && $hasil["blokir"]=='T')
            {
                //session_register("id_userabsen","usernameabsen","hak_aksesabsen","nama_lengkapabsen","id_unitabsen","nama_unitabsen");
                $_SESSION["id_userabsen"]=$hasil["id_user"];
                $_SESSION["id_finger"]=$hasil["id_finger"];
                $_SESSION["id_unitabsen"]=$hasil["id_unit"];
                $_SESSION["id_satker"]=$hasil["id_satker"];
                $_SESSION["dosen"]=$hasil["dosen"]; 
                $_SESSION["jenis_dosen"]=$hasil["jenis_dosen"]; 
                $_SESSION["usernameabsen"]=$hasil["username"]; 
                $_SESSION["hak_lengkap"]= $hasil["hak_akses"]; 
                $_SESSION["nama_lengkapabsen"]=$hasil["gelar_depan"]." ".$hasil["nama_lengkap"]." ".$hasil["gelar_belakang"];
                $_SESSION["nama_unitabsen"]=$hasil["nama_unit"];
                $_SESSION["nip"]=$hasil["nip"];
                $_SESSION["nama_lengkap"]=$hasil["gelar_depan"]." ".$hasil["nama_lengkap"]." ".$hasil["gelar_belakang"];
                $_SESSION["IDDOS"]=$_SESSION["id_userabsen"];
                // sesion untuk Super Admin
                if(strpos($_SESSION["hak_lengkap"], 'ADM') !== false) {
                    $_SESSION["admin"]="Y";
                }
                else{
                    $_SESSION["admin"]="T";
                }
                $hak=explode(",",$_SESSION["hak_lengkap"]);
                $_SESSION["hak_aksesabsen"]=$hak[0];
                
                echo "Login Successfull";
            }
            else
            {
                if (trim($hasil["username"])<>trim($user)) echo "User tidak terdaftar";
                else {
                    if (trim($hasil["password"])<>trim($pass)) echo "Password salah";
                    if ($hasil["blokir"]=='Y') echo "User anda diblokir !!!";
                }
                // echo $user;
            }
        }else{
            echo "User tidak terdaftar";
        }
    }
?>