$(document).ready(function(){
    var id = $("#id_user").val();
    $("#btn_umum").click(function(){
        $.ajax({
            url: 'modul/profil_proses.php',
            method: 'POST',
            data	: "proses=tampil&id="+id,
            dataType:'json',
            beforeSend:function(){
                $("#formUmum").hide()
                $("#loader").show()
            },
            complete:function(){
                $("#loader").hide()
                $("#formUmum").show()
            },
            success: function(data)
            {
                $("#nip").val(data.nip);
                $("#nama_lengkap").val(data.nama_lengkap);
                $("#gelar_depan").val(data.gelar_depan);
                $("#gelar_belakang").val(data.gelar_belakang);
                $("#tempat_lahir").val(data.tempat_lahir);
                $("#tgl_lahir").val(data.tgl_lahir);
                $("#kelamin").val(data.kelamin);
                $("#agama").val(data.agama);
                $("#status_kawin").val(data.status_kawin);
                $("#status_keluarga").val(data.status_keluarga);
                $("#email").val(data.email);
                $("#hp").val(data.hp);
            }
        });
    });

    $("#formUmum").submit(function(){
        alert('Form Umum');
    });

    // Alamat
    $("#btn_alamat").click(function(){
        $.ajax({
            url: 'modul/profil_proses.php',
            method: 'POST',
            data	: "proses=alamat&id="+id,
            dataType:'json',
            beforeSend:function(){
                $("#formAlamat").hide()
                $("#loader").show()
            },
            complete:function(){
                $("#loader").hide()
                $("#formAlamat").show()
            },
            success: function(data)
            {
                $("#nip").val(data.nip);
                $("#nama_lengkap").val(data.nama_lengkap);
                $("#gelar_depan").val(data.gelar_depan);
                $("#gelar_belakang").val(data.gelar_belakang);
                $("#tempat_lahir").val(data.tempat_lahir);
                $("#tgl_lahir").val(data.tgl_lahir);
                $("#kelamin").val(data.kelamin);
                $("#agama").val(data.agama);
                $("#status_kawin").val(data.status_kawin);
                $("#status_keluarga").val(data.status_keluarga);
                $("#email").val(data.email);
                $("#hp").val(data.hp);
            }
        });
    });

    $("#formAlamat").submit(function(){
        alert('Form Alamat');
    });


    // Nomor
    $("#btn_nomor").click(function(){
        $.ajax({
            url: 'modul/profil_proses.php',
            method: 'POST',
            data	: "proses=nomor&id="+id,
            dataType:'json',
            beforeSend:function(){
                $("#formNomor").hide()
                $("#loader").show()
            },
            complete:function(){
                $("#loader").hide()
                $("#formNomor").show()
            },
            success: function(data)
            {
                $("#no_ktp").val(data.no_ktp);
                $("#npwp").val(data.npwp);
                $("#nidn").val(data.nidn);
                $("#no_kp").val(data.no_kp);
                $("#no_ekp").val(data.no_ekp);
                $("#no_taspen").val(data.no_taspen);
                $("#no_bpjs").val(data.no_bpjs);
                $("#no_karis").val(data.no_karis);
            }
        });
    });

    $("#formNomor").submit(function(){
        alert('Form Nomor');
    });

    // Pekerjaan
    $("#btn_pekerjaan").click(function(){
        $.ajax({
            url: 'modul/profil_proses.php',
            method: 'POST',
            data	: "proses=pekerjaan&id="+id,
            dataType:'json',
            beforeSend:function(){
                $("#loader").show()
                $("#formPekerjaan").hide()
            },
            complete:function(){
                $("#loader").hide()
                $("#formPekerjaan").show()
            },
            success: function(data)
            {
                $("#nip").val(data.nip);
                $("#nama_lengkap").val(data.nama_lengkap);
                $("#gelar_depan").val(data.gelar_depan);
                $("#gelar_belakang").val(data.gelar_belakang);
                $("#tempat_lahir").val(data.tempat_lahir);
                $("#tgl_lahir").val(data.tgl_lahir);
                $("#kelamin").val(data.kelamin);
                $("#agama").val(data.agama);
                $("#status_kawin").val(data.status_kawin);
                $("#status_keluarga").val(data.status_keluarga);
                $("#email").val(data.email);
                $("#hp").val(data.hp);
            }
        });
    });

    $("#formPekerjaan").submit(function(){
        alert('Form Pekerjaan');
    });

});