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
        <th>Tingkat</th>
        <th>Sekolah</th>
        <th>Jurusan</th>
        <th>Tahun Lulus</th>
        <th>No Ijazah</th>
        <th>Dokumen</th>
        <th>Aksi</th>
        </tr>
    </thead>
    <tbody class="table-border-bottom-0">';
    $query="SELECT * from riwayat_pend_formal a inner join jenis_sekolah b on a.jenjang=b.jenis_sekolah  where id_user='$_SESSION[id_userabsen]'";
    $result=mysqli_query($conn, $query);
    $no=1;
    while($row=mysqli_fetch_assoc($result)){
        $value.='<tr>
                    <th scope="row">'.$no.'</th>
                    <td>'.$row['nama_jenis'].'</td>
                    <td>
                        '.$row['lembaga'].'<p class="text-muted">'.$row['alamat'].'</p>
                    </td>
                    <td>'.$row['jurusan'].'</td>
                    <td>'.$row['lulus'].'</td>
                    <td>'.$row['no_ijazah'].'</td>
                    <td>
                        <a href="#" id="showToastPlacement" class="btn btn-sm btn-warning">Lihat</a>
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

if($_POST['aksi']=='insert'){
    global $conn; 
    $pfile = $_POST['tpfile'];
    $pname = $_POST['tfname'];
    $psize = ($_POST['tfsize']/1024);
    $nama = addslashes($_POST['lembaga']);
    if($_POST['proses']=='add'){
        $query="INSERT INTO riwayat_pend_formal set
        id_user='$_SESSION[id_userabsen]',
        jenjang='$_POST[jenjang]',
        lembaga='$nama',
        no_ijazah='$_POST[no_ijazah]',
        lulus='$_POST[lulus]',
        status='$_POST[status]',
        jurusan='$_POST[jurusan]',
        akreditasi='$_POST[akreditasi]',
        alamat='$_POST[alamat]'
        ";
    }
    if($_POST['proses']=='edit'){
        $query="UPDATE riwayat_pend_formal set
        lembaga='$nama',
        jenjang='$_POST[jenjang]',
        no_ijazah='$_POST[no_ijazah]',
        lulus='$_POST[lulus]',
        status='$_POST[status]',
        jurusan='$_POST[jurusan]',
        akreditasi='$_POST[akreditasi]',
        alamat='$_POST[alamat]'
        WHERE id_user='$_SESSION[id_userabsen]' and id='$_POST[id]'
        ";
    }
    $sql=mysqli_query($conn, $query);
    if($sql==true){
        $status='success';
    }else{
        $status=$query;
    }
    echo json_encode(['status'=>$status]);
}

if($_POST['aksi']=='get'){
    global $conn;
    $query=mysqli_query($conn, "SELECT * FROM riwayat_pend_formal where id_user='$_SESSION[id_userabsen]' and id='$_POST[id]'");
    $result=mysqli_fetch_assoc($query);
    echo json_encode($result);
}

if($_POST['aksi']=='del'){
    global $conn;
    $query=mysqli_query($conn, "DELETE FROM riwayat_pend_formal where id_user='$_SESSION[id_userabsen]' and id='$_POST[id]'");
    if($query==true){
        $status='success';
    }else{
        $status=$query;
    }
    echo json_encode(['status'=>$status]);
}