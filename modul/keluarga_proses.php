<?php
session_start();
include ('../app/config.php');
include ('../app/fungsi_indotgl.php');
if($_POST['aksi']=='view'){
    global $conn;
    $value="";
    $value='<table class="table">
    <thead>
        <tr class="text-nowrap">
        <th>#</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Status Keluarga</th>
        <th>Status</th>
        <th>Tertanggung</th>
        <th>Dokumen</th>
        <th>Aksi</th>
        </tr>
    </thead>
    <tbody class="table-border-bottom-0">';
    $query="select * from keluarga where id_user='$_SESSION[id_userabsen]'";
    $result=mysqli_query($conn, $query);
    $no=1;
    while($row=mysqli_fetch_assoc($result)){
        $value.='<tr>
                    <th scope="row">'.$no.'</th>
                    <td>'.$row['nama_keluarga'].'</td>
                    <td>
                        '.$row['tempat_lahir'].'<p class="text-muted">'.indonesia($row['tanggal_lahir']).'</p>
                    </td>
                    <td>'.$row['status_keluarga'].'</td>
                    <td>'.$row['status_diri'].'</td>
                    <td>'.$row['tanggung'].'</td>
                    <td>
                        <a href="#" id="btn-file" class="btn btn-sm btn-warning" data-id="'.$row['id'].'">Lihat</a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary" id="btn-edit" data-id="'.$row['id'].'">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger" id="btn-del" data-id="'.$row['id'].'">Hapus</a>
                    </td>
                </tr>';
        $no++;
    };
    $value.='</tbody>
    </table>';
    echo json_encode(['status'=>'success', 'html'=>$value]);

}

if($_POST['aksi']=='getFile'){
    global $conn; 
    $query=mysqli_query($conn, "SELECT file FROM keluarga where id_user='$_SESSION[id_userabsen]' and id='$_POST[id]'");
    $result=mysqli_fetch_assoc($query);
    $value='<iframe src="uploads/'.$result['file'].'" width="100%" height="700" title="Iframe Example"></iframe>';
    echo json_encode(['status'=>'success', 'html'=>$value]);
}

if($_POST['aksi']=='get'){
    global $conn;
    $query=mysqli_query($conn, "SELECT * FROM keluarga where id_user='$_SESSION[id_userabsen]' and id='$_POST[id]'");
    $result=mysqli_fetch_assoc($query);
    echo json_encode($result);
}

if($_POST['aksi']=='del'){
    global $conn;
    $query=mysqli_query($conn, "DELETE FROM keluarga where id_user='$_SESSION[id_userabsen]' and id='$_POST[id]'");
    if($query==true){
        $status='success';
    }else{
        $status=$query;
    }
    echo json_encode(['status'=>$status]);
}