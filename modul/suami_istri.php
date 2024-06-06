<div class="row">
    <div class="col-md-12">
        <div class="card">
            <ul class="card-header nav nav-pills" role="tablist">
                <li class="nav-item">
                <button
                    id="btn-tambah"
                    type="button"
                    class="nav-link active"
                    data-bs-toggle="modal"
                    data-bs-target="#largeModal">
                    <i class="menu-icon tf-icons bx bx-plus"></i>
                    Tambah Suami/Istri
                </button>
                </li>
            </ul>
            <div class="table-responsive text-nowrap">
                <table class="table">
                <thead>
                    <tr class="text-nowrap">
                    <th>#</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Tanggal Nikah</th>
                    <th>Keterangan</th>
                    <th>Tertanggung</th>
                    <th>Dokumen</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                    <th scope="row">1</th>
                    <td>Table cell</td>
                    <td>
                        Table cell<p class="text-muted">Tempat Lahir</p>
                    </td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning">Lihat</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
    </div>
</div>
<!-- Large Modal -->
<div class="modal fade" id="largeModal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel3">Suami/Istri</h5>
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" id="nama" class="form-control" placeholder="Nama Suami/Istri" />
            </div>
        </div>
        <div class="row g-2 mb-3">
            <div class="col mb-0">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="email" id="tempat_lahir" class="form-control" placeholder="Tempat Lahir" />
            </div>
            <div class="col mb-0">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" class="form-control" />
            </div>
        </div>
        <div class="row g-2 mb-3">
            <div class="col mb-0">
            <label for="tanggal_menikah" class="form-label">Tanggal Menikah</label>
            <input type="date" id="tanggal_menikah" class="form-control" />
            </div>
            <div class="col mb-0">
            <label for="tanggal_pisah" class="form-label">Tanggal Pisah</label>
            <input type="date" id="tanggal_pisah" class="form-control" />
            </div>
        </div>
        <div class="row g-2 mb-3">
            <div class="col mb-0">
            <label for="tanggung" class="form-label">Tertanggung</label>
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
            </div>
            <div class="col mb-0">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea name="keternagan" id="keterangan" row="3" class="form-control"></textarea>
            </div>
        </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Close
        </button>
        <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </div>
</div>
<script src="modul/<?=$url[0]?>.js"></script>