<?php
include ('../app/config.php');
include ('../app/function.php');
if(isset($_POST["process"]))
    {
        if($_POST["process"] == "Add")
        {
            $file = '';
            if($_FILES["fileUpload"]["name"] != '')
            {
                $file = upload_file();
                $query="INSERT INTO keluarga set
                id_user='$_SESSION[id_userabsen]',
                nama_keluarga='$_POST[nama]',
                tempat_lahir='$_POST[tempat_lahir]',
                tanggal_lahir='$_POST[tanggal_lahir]',
                jenis_kelamin='$_POST[jenis_kelamin]',
                status_menikah='$_POST[status_menikah]',
                status_keluarga='$_POST[status_keluarga]',
                status_diri='$_POST[status_diri]',
                tanggung='$_POST[tanggung]',
                keterangan='$_POST[keterangan]',
                file='$file'
                ";
                $sql=mysqli_query($conn, $query) or die(mysqli_error($conn));
                if($sql==true){
                    $status='success';
                    $message='';
                }else{
                    $status='error';
                    $message=$sql;
                }
            }else{
                $status='error';
                $message='File perlu ditambahkan';
            }

        }
    }
    // $data = array(
    //     "Name" => $_POST["nama"],
    //     "Image" => $_FILES["fileUpload"]["name"][0]
    // );
    echo json_encode(['status'=>$status, 'response'=>$message]);

?>