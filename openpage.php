<?php
if(!isset($url[0]) || $url[0]=="home"){
	include "welcome.php";
}
else{
    $where="";
    if(!empty($_SESSION['akses'])){
        $hak=explode(",",$_SESSION['akses']);
        if(is_array($hak)){
            foreach ($hak as $k) {
                if($k!=""){
                    if($where=="") $where.="(user like '%$k%' ";
                    else $where.=" OR user like '%$k%' ";
                }
            }
            if(!empty($where)) $where.=")";
        }
    }
    if(!empty($where)) $where.=" AND";
    $where.=" 1=1 AND url='$url[0]'";
    $sql="SELECT * from fitur_simpeg where $where";
    
    $hak=mysqli_num_rows(mysqli_query($conn, $sql));
    if($hak>0 && !empty($_SESSION['hak_lengkap'])){
        if(file_exists("modul/$url[0].php")){
            include "modul/$url[0].php";
        }
        else{
            if(file_exists("$url[0]/$url[0].php")){
                include "$url[0]/$url[0].php";
            }
            else if(file_exists("$_SESSION[hak_lengkap]/$url[0].php")){
                include "$_SESSION[hak_lengkap]/$url[0].php";
            }
            else if(file_exists("$_SESSION[hak_lengkap]/$url[0]/$url[0].php")){
                include "$_SESSION[hak_lengkap]/$url[0]/$url[0].php";
            }
            else{
                include "welcome.php";
            }
        }
    }
    else{
        include "welcome.php";
    }
}
?>