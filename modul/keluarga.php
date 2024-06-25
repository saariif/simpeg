<div class="row">
    <div class="col-md-12">
        <div class="card">
            <ul class="card-header nav nav-pills" role="tablist">
                <li class="nav-item">
                <button id="btn-tambah" type="button" class="nav-link active" data-bs-toggle="modal" data-bs-target="#keluargaModal">
                    <i class="menu-icon tf-icons bx bx-plus"></i>
                    Tambah
                </button>
                </li>
            </ul>
            <div class="table-responsive text-nowrap" id="table">
            </div>
            </div>
    </div>
</div>
<!-- Toast with Placements  toast-placement-ex m-2 -->
<div class="bs-toast toast toast-placement-ex m-2" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="2000">
<div class="toast-header">
    <i class="bx bx-bell me-2"></i>
    <div id="notif" class="me-auto fw-medium">Bootstrap</div>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
</div>
<div class="toast-body" id="notif2"></div>
</div>
<!-- Toast with Placements -->

<div class="modal fade" id="fileModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-fullscreen" role="document">
    <div class="modal-content">
    <input type="hidden" id="id" />
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel3"><span id="aksi"></span> Keluarga</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="row">
                <div id="isi"></div>
            </div>
            </div>
    </div>
    </div>
</div>
<!-- Large Modal -->
<div class="modal fade" id="keluargaModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <!-- <div class="alert alert-primary" role="alert" id='status'></div> -->
        <form class="form" id="myForm" enctype="multipart/form-data">
            <input type="hidden" id="id" />
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel3"><span id="aksi"></span> Keluarga</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="row formGroup">
                <div class="col mb-2">
                <label for="nama" class="form-label">Nama</label>
                <input required type="text" id="nama" name="nama" class="form-control" placeholder="Nama Keluarga" />
                <div id="error" class="invalid-feedback"></div>
                </div>
            </div>
            <div class=" row g-2 mb-2">
                <div class="formGroup col mb-0">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input required type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir"/>
                <div id="error" class="invalid-feedback"></div>
                </div>
                <div class="formGroup col mb-0">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input required type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" />
                <div id="error" class="invalid-feedback"></div>
                </div>
            </div>
            <div class="row g-2 mb-2">
                <div class="formGroup col mb-0">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select required name="jenis_kelamin" id="jenis_kelamin" class="form-select" >
                        <option value=''>-- pilih salah satu --</option>
                        <?php
                            $data=array("L","P");
                            foreach ($data as $x) {
                                $sel="";
                                if($x==$r['jenis_kelamin']) $sel="selected";
                                echo "<option value='$x' $sel>$x</option>";
                            }
                        ?>
                    </select>
                    <div id="error" class="invalid-feedback"></div>
                </div>
                <div class="formGroup col mb-0">
                <label for="status_keluarga" class="form-label">Status dalam Keluarga</label>
                    <select required name="status_keluarga" id="status_keluarga" class="form-select" >
                        <option value=''>-- Pilih salah satu --</option>
                        <?php
                            $data=array("Suami","Istri","Anak","Bapak Kandung","Ibu Kandung","Bapak Mertua","Ibu Mertua","Saudara Kandung");
                            foreach ($data as $x) {
                                $sel="";
                                if($x==$r['status_keluarga']) $sel="selected";
                                echo "<option value='$x' $sel>$x</option>";
                            }
                        ?>
                    </select>
                    <div id="error" class="invalid-feedback"></div>
                </div>
            </div>
            <div class="row g-2 mb-2">
                <div class="formGroup col mb-0">
                <label for="status_menikah" class="form-label">Status Menikah</label>
                <select required class="form-select" id="status_menikah" name="status_menikah" aria-label="Status Menikah" >
                    <option value=''>-- Pilih salah satu --</option>
                    <?php
                        $data=array("Belum Kawin","Kawin","Cerai Hidup","Cerai Mati");
                        foreach ($data as $x) {
                            $sel="";
                            if($x==$r['status_menikah']) $sel="selected";
                            echo "<option value='$x' $sel>$x</option>";
                        }
                    ?>
                </select>
                <div id="error" class="invalid-feedback"></div>
                </div>
                <div class="formGroup col mb-0">
                <label for="status_diri" class="form-label">Hidup/cerai/meninggal</label>
                    <select required name="status_diri" id="status_diri" class="form-select">
                        <option value=''>-- Pilih salah satu --</option>
                        <?php
                            $data=array("Hidup","Meninggal","Bercerai");
                            foreach ($data as $x) {
                                $sel="";
                                if($x==$r['status_diri']) $sel="selected";
                                echo "<option value='$x' $sel>$x</option>";
                            }
                        ?>
                    </select>
                    <div id="error" class="invalid-feedback"></div>
                </div>
            </div>
            <div class="row g-2 mb-2">
                <div class="formGroup col mb-0">
                <label for="tanggung" class="form-label">Tertanggung</label>
                <select name="tanggung" id="tanggung" class="form-select" required>
                    <option value=''>-- pilih salah satu --</option>
                    <?php
                        $data=array("Ya","Tidak");
                        foreach ($data as $x) {
                            $sel="";
                            if($x==$r['tanggung']) $sel="selected";
                            echo "<option value='$x' $sel>$x</option>";
                        }
                    ?>
                </select>
                <div id="error" class="invalid-feedback"></div>
                </div>
                <div class="formGroup col mb-0">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" row="3" class="form-control"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="formGroup col mb-2">
                    <label for="file" class="form-label">File KTP/KK/Akte (*.pdf)</label>
                    <input required type="file" name="fileUpload" id="fileUpload" class="form-control" onchange="readURL(this,1)" accept="application/pdf"/>
                    <div id="error" class="invalid-feedback"></div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="process" id="process">
                <button type="button" class="btn btn-outline-secondary" id="btn-close" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary" id="btn-save">Save</button>
            </div>
        </form>
    </div>
    </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="delModal" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modalToggleLabel">Attention !!!</h5>
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        <div class="modal-body">Apakah Anda Yakin ?</div>
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" id="btn-close" data-bs-dismiss="modal">
                No
            </button>
            <button type="button" class="btn btn-primary" id="btn-delete">Yes</button>
        </div>
    </div>
    </div>
</div>
<script src="modul/<?=$url[0]?>.js"></script>