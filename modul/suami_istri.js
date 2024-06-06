$(document).ready(function(){
    $("#btn-tambah").click(function(){
        $.ajax({
            url: 'modul/suami_istri_proses.php',
            method: 'POST',
            data:'proses=tambah',
            dataType:'json',
            success: function(data)
            {
                $("#nama").val(data.nama);
                $("#tempat_lahir").val(data.tempat_lahir);
                $("#tanggal_lahir").val(data.tanggal_lahir);
                $("#tanggung").val(data.tanggung);
                $("#keterangan").val(data.keterangan);
            }
        });
    });

});