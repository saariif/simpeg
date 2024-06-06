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
            <h5 class="modal-title" id="exampleModalLabel3"><span id="aksi"></span> Tanda Jasa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="row">
                <div class="col mb-2">
                <label for="nama" class="form-label">Tanda Jasa</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Keluarga" required/>
                <div id="nama_m" class="invalid-feedback"></div>
                </div>
            </div>
            <div class="row">
                <div class="col mb-2">
                <label for="nama" class="form-label">Lainnya</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Keluarga" required/>
                <div id="nama_m" class="invalid-feedback"></div>
                </div>
            </div>
            <div class="row">
                <div class="col mb-2">
                <label for="nama" class="form-label">Tahun</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Keluarga" required/>
                <div id="nama_m" class="invalid-feedback"></div>
                </div>
            </div>
            <div class="row">
                <div class="col mb-2">
                <label for="nama" class="form-label">Pemberi}</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Keluarga" required/>
                <div id="nama_m" class="invalid-feedback"></div>
                </div>
            </div>
            <div class="row">
                <div class="col mb-2">
                <label for="nama" class="form-label">Dokumen Penghargaan</label>
                <input type="file" id="fileUpload" name="fileUpload" class="form-control" required/>
                <div id="nama_m" class="invalid-feedback"></div>
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