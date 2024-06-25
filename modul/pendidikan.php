<div class="row">
    <div class="col-md-12">
        <div class="card">
            <ul class="card-header nav nav-pills" role="tablist" id="data">
                <li class="nav-item">
                <button
                    id="btn-tambah"
                    type="button"
                    class="nav-link active"
                    data-bs-toggle="modal"
                    data-bs-target="#pendidikanModal">
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
    <div id="notif" class="me-auto fw-medium"></div>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
</div>
<div class="toast-body"></div>
</div>
<!-- Toast with Placements -->

<!-- Large Modal -->
<div class="modal fade" id="pendidikanModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <!-- <div class="alert alert-primary" role="alert" id='status'></div> -->
        <form class="form" id="myForm" enctype="multipart/form-data">
            <input type="hidden" id="id" />
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel3"><span id="aksi"></span> Pendidikan</h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="row g-2 mb-2">
                <div class="formGroup col mb-0">
                    <label for="jenjang" class="form-label">Tingkat</label>
                    <select name="jenjang" id="jenjang" class="form-select" required>
                            <option value="">-- Pilih salah satu --</option>
                            <?php
                              $data=mysqli_query($akademik,  "SELECT * FROM jenis_sekolah order by jenis_sekolah");
                              while($x=mysqli_fetch_assoc($data)){
                                 $sel="";
                                 if($x['jenis_sekolah']==$r['jenjang']) $sel="selected";
                                 echo "<option value='$x[jenis_sekolah]' $sel>$x[nama_jenis]</option>";
                              }
                            ?>
                        </select>
                    <div id="error" class="invalid-feedback"></div>
                </div>
                <div class="formGroup col mb-0">
                <label for="no_ijazah" class="form-label">No Ijazah</label>
                <input type="text" placeholder="No Ijazah" id="no_ijazah" class="form-control" required/>
                <div id="error" class="invalid-feedback"></div>
                </div>
            </div>
            <div class="row g-2 mb-2">
                <div class="formGroup col mb-0">
                    <label for="lembaga" class="form-label">Nama Sekolah</label>
                    <input type="text" id="lembaga" placeholder="Nama Sekolah/Universitas" class="form-control" required/>
                    <div id="error" class="invalid-feedback"></div>
                </div>
                <div class="formGroup col mb-0">
                    <label for="lulus" class="form-label">Tahun Lulus</label>
                    <input type="text" id="lulus" placeholder="Tahun Lulus" class="form-control" required/>
                    <div id="error" class="invalid-feedback"></div>
                </div>
            </div>
            <div class="row g-2 mb-2">
                <div class="formGroup col mb-0">
                <label for="status" class="form-label">Status Sekolah</label>
                <select name="status" id="status" class="form-select" required>
                    <option value=''>-- Pilih salah satu --</option>
                    <?php
                        $data=array("Negeri","Swasta");
                        foreach ($data as $x) {
                            $sel="";
                            if($x==$r['status']) $sel="selected";
                            echo "<option value='$x' $sel>$x</option>";
                        }
                    ?>
                </select>
                <div id="error" class="invalid-feedback"></div>
                </div>
                <div class="formGroup col mb-0">
                    <label for="jurusan" class="form-label">Jurusan Sekolah</label>
                    <input type="text" id="jurusan" placeholder="Jurusan Sekolah" class="form-control" required/>
                    <div id="error" class="invalid-feedback"></div>
                </div>
            </div>
            <div class="row g-2 mb-2">
                <div class="formGroup col mb-0">
                <label for="akreditasi" class="form-label">Akreditasi</label>
                <select name="akreditasi" id="akreditasi" class="form-select" required>
                    <option value=''>-- Pilih salah satu --</option>
                    <?php
                        $data=array("A","B","C");
                        foreach ($data as $x) {
                            $sel="";
                            if($x==$r['akreditasi']) $sel="selected";
                            echo "<option value='$x' $sel>$x</option>";
                        }
                    ?>
                </select>
                <div id="error" class="invalid-feedback"></div>
                </div>
                <div class="formGroup col mb-0">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" row="3" class="form-control" required></textarea>
                    <div id="error" class="invalid-feedback"></div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" id="btn-close" data-bs-dismiss="modal">
                    Close
                </button>
            <button  type="submit" class="btn btn-primary" id="btn-save">Save</button>
        </form>
        </div>
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