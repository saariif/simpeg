$(document).ready(function(){
    Get_record();
    Add_record();
    Insert_record();   
    View_record();
    Delete_record();
});

// ADD RECORD
function Add_record(){
    $("#btn-tambah").click(function(){
        $('#aksi').html('Tambah');
        $("form").trigger('reset');
        $('#jenjang').removeClass('is-invalid');
        $('#no_ijazah').removeClass('is-invalid');
        $('#lembaga').removeClass('is-invalid');
        $('#lulus').removeClass('is-invalid');
        $('#status').removeClass('is-invalid');
        $('#jurusan').removeClass('is-invalid');
        $('#akreditasi').removeClass('is-invalid');
        $('#alamat').removeClass('is-invalid');
        $('#btn-save').attr('data-id', 'add');
    });
}

// GET RECORD
function Get_record(){
    $(document).on("click", "#btn-edit", function(){
        var id = $(this).attr('data-id');
        $('#aksi').html('Edit');
        $('#jenjang').removeClass('is-invalid');
        $('#no_ijazah').removeClass('is-invalid');
        $('#lembaga').removeClass('is-invalid');
        $('#lulus').removeClass('is-invalid');
        $('#status').removeClass('is-invalid');
        $('#jurusan').removeClass('is-invalid');
        $('#akreditasi').removeClass('is-invalid');
        $('#alamat').removeClass('is-invalid');
        $.ajax({
            url: 'modul/pendidikan_proses.php',
            method: 'post',
            data:{
                aksi : 'get',
                id: id
            },
            dataType:'json',
            success: function(data){
                $('#id').val(data.id);
                $('#jenjang').val(data.jenjang_pendidikan);
                $('#no_ijazah').val(data.no_ijazah);
                $('#lembaga').val(data.lembaga);
                $('#lulus').val(data.lulus);
                $('#status').val(data.status);
                $('#jurusan').val(data.jurusan);
                $('#akreditasi').val(data.akreditasi);
                $('#alamat').val(data.alamat);
                $('#btn-save').attr('data-id', 'edit');
                $('#pendidikanModal').modal('show');
            }
        })
    });
}
// DELETE RECORD 
function Delete_record(){
    $(document).on("click", "#btn-del", function(){
        var id = $(this).attr('data-id');
        const toastPlacementExample = document.querySelector('.toast-placement-ex');
        $('#delModal').modal('show');
        $(document).on("click", "#btn-delete", function(){
        $.ajax({
            url: 'modul/pendidikan_proses.php',
            method: 'post',
            data:{
                aksi : 'del',
                id: id
            },
            // dataType:'json',
            success: function(data){
                data=$.parseJSON(data);
                toastDell = document.querySelector('.toast-placement-ex');
                if(data.status=='success')
                {
                    $('#delModal').modal('hide');
                    toastDell.classList.add('bg-success');
                    toastDell.classList.add('top-0', 'end-0');
                    $('#notif').html('Berhasil');
                    toastDelly = new bootstrap.Toast(toastDell);
                    toastDelly.show();
                    View_record();
                }else{
                    toastDell.classList.add('bg-danger');
                    toastDell.classList.add('top-0', 'end-0');
                    $('#notif').html('Gagal');
                    toastDelln = new bootstrap.Toast(toastDell);
                    toastDelln.show();
                    View_record();
                }
            }
            });
        });
    });
}
// INSERT RECORD
function Insert_record(){
    $("#btn-save").click(function(){
        var id = $("#id").val();
        var jenjang = $("#jenjang").val();
        var no_ijazah = $("#no_ijazah").val();
        var lembaga = $("#lembaga").val();
        var lulus = $("#lulus").val();
        var status = $("#status").val();
        var jurusan = $("#jurusan").val();
        var akreditasi = $("#akreditasi").val();
        var alamat = $("#alamat").val();
        var proses = $("#btn-save").attr('data-id');
        $('#jenjang').removeClass('is-invalid');
        $('#no_ijazah').removeClass('is-invalid');
        $('#lembaga').removeClass('is-invalid');
        $('#lulus').removeClass('is-invalid');
        $('#status').removeClass('is-invalid');
        $('#jurusan').removeClass('is-invalid');
        $('#akreditasi').removeClass('is-invalid');
        $('#alamat').removeClass('is-invalid');
        // alert("haloo"+jenjang);
        if(jenjang==''){
            $('#jenjang_m').html('Wajib diisi!');
            $('#jenjang').addClass('is-invalid');
            $('#jenjang').focus();
        }
        if(no_ijazah==''){
            $('#no_ijazah_m').html('Wajib diisi!');
            $('#no_ijazah').addClass('is-invalid');
            $('#no_ijazah').focus();
        }
        if(lembaga==''){
            $('#lembaga_m').html('Wajib diisi!');
            $('#lembaga').addClass('is-invalid');
            $('#lembaga').focus();
        }
        if(lulus==''){
            $('#lulus_m').html('Wajib diisi!');
            $('#lulus').addClass('is-invalid');
            $('#lulus').focus();
        }
        if(status==''){
            $('#status_m').html('Wajib diisi!');
            $('#status').addClass('is-invalid');
            $('#status').focus();
        }
        if(jurusan==''){
            $('#jurusan_m').html('Wajib diisi!');
            $('#jurusan').addClass('is-invalid');
            $('#jurusan').focus();
        }
        if(akreditasi==''){
            $('#akreditasi_m').html('Wajib diisi!');
            $('#akreditasi').addClass('is-invalid');
            $('#akreditasi').focus();
        }
        if(alamat==''){
            $('#alamat_m').html('Wajib diisi!');
            $('#alamat').addClass('is-invalid');
            $('#alamat').focus();
        }
        if(jenjang!='' && no_ijazah!=''&& lembaga!='' && lulus!='' && status!='' && jurusan!='' && akreditasi!='' && alamat!=''){
            $.ajax(
                {
                    url: 'modul/pendidikan_proses.php',
                    method: 'post',
                    data:{
                        aksi : 'insert',
                        id:id,
                        proses:proses,
                        jenjang:jenjang,
                        no_ijazah:no_ijazah, 
                        lembaga:lembaga, 
                        lulus:lulus,
                        status:status,
                        jurusan:jurusan,
                        akreditasi:akreditasi,
                        alamat:alamat
                    },
                    success: function(data){
                        toastSave = document.querySelector('.toast-placement-ex');
                        data=$.parseJSON(data);
                        if(data.status=='success')
                        {
                            $('#pendidikanModal').modal('hide');
                            toastSave.classList.add('bg-success');
                            toastSave.classList.add('top-0', 'end-0');
                            $('#notif').html('Berhasil');
                            toastInserty = new bootstrap.Toast(toastSave);
                            toastInserty.show();
                            View_record();
                        }else{
                            // $('#status').html(data.status);
                            toastSave.classList.add('bg-danger');
                            toastSave.classList.add('top-0', 'end-0');
                            $('#notif').html('Gagal');
                            toastInsertN = new bootstrap.Toast(toastSave);
                            toastInsertN.show();
                            View_record();
                        }
                    }
                }
            )
        }
    });

    $("#btn-close").click(function(){
        $("form").trigger('reset');
    });
}

// DISPLAY RECORD
function View_record()
{
    $.ajax(
        {
            // beforeSend:function(){
            //     $("#loader").show()
            //     $("#data").hide()
            // },
            // complete:function(){
            //     $("#loader").hide()
            // },
            url: 'modul/pendidikan_proses.php',
            method: 'post',
            data:'aksi=view',
            // dataType:'json',
            success: function(data){
                data=$.parseJSON(data);
                if(data.status=='success')
                    {
                        $("#data").show()
                        $('#table').html(data.html);
                    }
            }
        }
    )
}