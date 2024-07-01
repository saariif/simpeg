$(document).ready(function(){
    Get_record();
    Add_record();
    // Insert_record();
    View_file(); 
    View_record();
    Delete_record();
});
var pfile='', fsize=0, fname='';
function readURL(input, val){
    var allowedFileTypes = 'application/pdf', allowedFileSizes=1024000;
    if(input.files && input.files[0]){
        var reader = new FileReader();
        reader.onload = function(e){
            if(val=='1'){
                pfile = e.target.result;
                fsize = input.files[0].size;
                fname = input.files[0].name;
                ftype = input.files[0].type;
                // cek file type
                if(!ftype.match(allowedFileTypes)){ 
                    notif[0]="Ekstensi tidak sesuai";
                    $('#fileUpload').val('');
                    $('#fileUpload').addClass('is-invalid');
                }
                if(fsize>=allowedFileSizes){ 
                    notif[1]="Ukuran tidak sesuai";
                    $('#fileUpload').addClass('is-invalid');
                    // $('#fileUpload').focus();
                    $('#fileUpload').val('');
                    // alert(fsize);
                }
                console.log(notif[0]);
                $('#file_m').html(notif[0] +"<br/>"+ notif[1]);
            }
        }
        reader.readAsDataURL(input.files[0]);
    }
}

// ADD RECORD
function Add_record(){
    $("#btn-tambah").click(function(){
        $('#aksi').html('Tambah');
        $('#process').val('Add');
        $("form").trigger('reset');
        $('#nama').removeClass('is-invalid');
        $('#tempat_lahir').removeClass('is-invalid');
        $('#tanggal_lahir').removeClass('is-invalid');
        $('#jenis_kelamin').removeClass('is-invalid');
        $('#status_keluarga').removeClass('is-invalid');
        $('#status_menikah').removeClass('is-invalid');
        $('#status_diri').removeClass('is-invalid');
        $('#tanggung').removeClass('is-invalid');
        $('#fileUpload').removeClass('is-invalid');
        $('#btn-save').attr('data-id', 'add');
        $('#status').hide();
    });
}
// VIEW FILE
function View_file(){
    $(document).on("click", "#btn-file", function(){
        var id = $(this).attr('data-id');
        $('#aksi').html('File');
        $.ajax({
            url: 'modul/keluarga_proses.php',
            method: 'post',
            data:{
                aksi : 'getFile',
                id: id
            },
            // dataType:'json',
            success: function(data){
                $('#fileModal').modal('show');
                data=$.parseJSON(data);
                if(data.status=='success')
                    {
                        $('#isi').html(data.html);
                    }
            }
        });
    });
}
// UPDATE RECORD
function Get_record(){
    $(document).on("click", "#btn-edit", function(){
        var id = $(this).attr('data-id');
        $('#aksi').html('Edit');
        $('#process').val('Edit')
        $("form").trigger('reset');
        $('#nama').removeClass('is-invalid');
        $('#tempat_lahir').removeClass('is-invalid');
        $('#tanggal_lahir').removeClass('is-invalid');
        $('#jenis_kelamin').removeClass('is-invalid');
        $('#status_keluarga').removeClass('is-invalid');
        $('#status_menikah').removeClass('is-invalid');
        $('#status_diri').removeClass('is-invalid');
        $('#tanggung').removeClass('is-invalid');
        $('#fileUpload').removeClass('is-invalid');
        $.ajax({
            url: 'modul/keluarga_proses_2.php',
            method: 'post',
            data:{
                aksi : 'get',
                id: id
            },
            dataType:'json',
            success: function(data){
                $('#status').hide();
                $('#idkeluarga').val(data.id);
                $('#nama').val(data.nama_keluarga);
                $('#tempat_lahir').val(data.tempat_lahir);
                $('#tanggal_lahir').val(data.tanggal_lahir);
                $('#jenis_kelamin').val(data.jenis_kelamin);
                $('#status_keluarga').val(data.status_keluarga);
                $('#status_menikah').val(data.status_menikah);
                $('#status_diri').val(data.status_diri);
                $('#tanggung').val(data.tanggung);
                $('#keterangan').val(data.keterangan);
                $('#fileUpload').attr('value', data.file);
                $('#btn-save').attr('data-id', 'edit');
                $('#keluargaModal').modal('show');

                if (data.file) {
                    $('#thumbnail').html(`
                    <a class="btn btn-primary mt-1" data-bs-toggle="collapse" data-bs-target="#lihatThumbnail" role="button" aria-expanded="false" aria-controls="lihatThumbnail" style="--bs-btn-padding-y: .2rem; --bs-btn-padding-x: .35rem; --bs-btn-font-size: .65rem;">
                        Lihat file
                    </a>
                    <div class="collapse mt-1" id="lihatThumbnail">
                        <iframe src="uploads/${data.file}" frameborder="0">
                            This browser does not support PDFs. Please download the PDF to view it: <a href="${data.file}">Download PDF</a>
                        </iframe>
                    </div>
                    `);
                }

            }
        })
    });
}

// DELETE RECORD 
function Delete_record(){
    $(document).on("click", "#btn-del", function(){
        var id = $(this).attr('data-id');
        const toastPlacementExample = document.querySelector('.toast-placement-ex');
        alert(id);
        $('#delModal').modal('show');
        $.ajax({
            url: 'modul/keluarga_proses.php',
            method: 'post',
            data:{
                aksi : 'del',
                id: id
            },
            // dataType:'json',
            success: function(data){
                data=$.parseJSON(data);
                toastDell = document.querySelector('.toast-placement-ex');
                if(data.status ==='success')
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
}

// INSERT RECORD
const myForm = document.querySelector('form');
myForm.addEventListener('submit', event => {
    event.preventDefault();
    // validateForm('#myForm');
    const submitBtn = $(this).find('button[type="submit"]');
    submitBtn.prop('disabled', true);
    $.ajax(
        {
            url: 'modul/keluarga_proses_2.php',
            method: 'post',
            data:new FormData(myForm),
            contentType:false,
            processData:false,
            success: function(response){
                data=$.parseJSON(response);
                console.log(data);
                // toastSave = document.querySelector('.toast-placement-ex');
                // if(data.status === "success"){
                //     $('#keluargaModal').modal('hide');
                //     toastSave.classList.add('bg-success');
                //     toastSave.classList.add('top-0', 'end-0');
                //     $('#notif').html('Berhasil');
                //     toastInserty = new bootstrap.Toast(toastSave);
                //     toastInserty.show();
                //     View_record();
                // }
                // else{
                // toastSave.classList.add('bg-danger');
                // toastSave.classList.add('top-0', 'end-0');
                // $('#notif').html('Gagal');
                // $('#notif2').html(data.response);
                // toastInsertN = new bootstrap.Toast(toastSave);
                // toastInsertN.show();
                // View_record();   
                // }
                // submitBtn.prop('disabled', false);
            }
        }
    )
})

// DISPLAY RECORD
function View_record()
{
    $.ajax(
        {
            url: 'modul/keluarga_proses.php',
            method: 'post',
            data:'aksi=view',
            // dataType:'json',
            success: function(data){
                data=$.parseJSON(data);
                if(data.status=='success')
                    {
                        $('#table').html(data.html);
                    }
            }
        }
    )
}