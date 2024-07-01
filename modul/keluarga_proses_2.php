<?php
include ('../app/config.php');
include ('../app/function.php');
if(isset($_POST["process"]))
    {
        $file = '';
        $nama_keluarga = addslashes($_POST["nama"]);
        $tempat_lahir = addslashes($_POST["tempat_lahir"]);
        $keterangan = addslashes($_POST["keterangan"]);
        $file = upload_file();
        // if($_FILES["fileUpload"]["name"] != '')
        // {
            if($_POST["process"] == "Add")
            {
                $query="INSERT INTO keluarga set
                id_user='$_SESSION[id_userabsen]',
                nama_keluarga='$nama_keluarga',
                tempat_lahir='$tempat_lahir',
                tanggal_lahir='$_POST[tanggal_lahir]',
                jenis_kelamin='$_POST[jenis_kelamin]',
                status_menikah='$_POST[status_menikah]',
                status_keluarga='$_POST[status_keluarga]',
                status_diri='$_POST[status_diri]',
                tanggung='$_POST[tanggung]',
                keterangan='$keterangan',
                file='$file'
                ";
            }
            if($_POST["process"] == "Edit")
            {
                $query="UPDATE keluarga set
                nama_keluarga='$nama_keluarga',
                tempat_lahir='$tempat_lahir',
                tanggal_lahir='$_POST[tanggal_lahir]',
                jenis_kelamin='$_POST[jenis_kelamin]',
                status_menikah='$_POST[status_menikah]',
                status_keluarga='$_POST[status_keluarga]',
                status_diri='$_POST[status_diri]',
                tanggung='$_POST[tanggung]',
                keterangan='$keterangan',
                file='$file'
                WHERE id='$_POST[idkeluarga]'
                ";
            }

                $sql=mysqli_query($conn, $query) or die(mysqli_error($conn));
                if($sql==true){
                    $status='success';
                    $message='';
                }else{
                    $status='error';
                    $message=$sql;
                }

        // } else{
        //     $status='error';
        //     $message='File perlu ditambahkan';
        // }
        echo json_encode(['status'=>$status, 'response'=>$message]);
        exit;
    }
    
    if($_POST['aksi']=='get'){
        global $conn;
        $query=mysqli_query($conn, "SELECT * FROM keluarga where id_user='$_SESSION[id_userabsen]' and id='$_POST[id]'");
        $result=mysqli_fetch_assoc($query);
        echo json_encode($result);
        exit;
    }
?>