<div class="row">
    <input type="hidden" name="id_user" id="id_user" value="<?=$_SESSION['id_userabsen']?>">
    <div class="col-md-12">
        <div class="nav-align-top mb-4">
            <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                <li class="nav-item">
                <button
                    id="btn_umum"
                    type="button"
                    class="nav-link active"
                    role="tab"
                    data-bs-toggle="tab"
                    data-bs-target="#tab_umum"
                    aria-controls="tab_umum"
                    aria-selected="true">
                    <i class="tf-icons bx bx-home me-1"></i><span class="d-none d-sm-block"> Umum</span
                    >
                    <!-- <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-danger ms-1">3</span> -->
                </button>
                </li>
                <li class="nav-item">
                <button
                id="btn_alamat"
                    type="button"
                    class="nav-link"
                    role="tab"
                    data-bs-toggle="tab"
                    data-bs-target="#tab_alamat"
                    aria-controls="tab_alamat"
                    aria-selected="false">
                    <i class="tf-icons bx bx-user me-1"></i><span class="d-none d-sm-block"> Alamat</span>
                </button>
                </li>
                <li class="nav-item">
                <button
                id="btn_nomor"
                    type="button"
                    class="nav-link"
                    role="tab"
                    data-bs-toggle="tab"
                    data-bs-target="#tab_nomor"
                    aria-controls="tab_nomor"
                    aria-selected="false">
                    <i class="tf-icons bx bx-message-square me-1"></i
                    ><span class="d-none d-sm-block"> Data Nomor</span>
                </button>
                </li>
                <li class="nav-item">
                <button
                id="btn_pekerjaan"
                    type="button"
                    class="nav-link"
                    role="tab"
                    data-bs-toggle="tab"
                    data-bs-target="#tab_pekerjaan"
                    aria-controls="tab_pekerjaan"
                    aria-selected="false">
                    <i class="tf-icons bx bx-message-square me-1"></i
                    ><span class="d-none d-sm-block"> Pekerjaan</span>
                </button>
                </li>
            </ul>
            <div class="tab-content">
                <!-- UMUM -->
                <div id="loader" class="spinner-border spinner-border-sm text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="tab-pane fade show active" id="tab_umum" role="tabpanel">
                    <form id="formUmum" method="POST" onsubmit="return false">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="nip" class="form-label">NIP</label>
                                <input class="form-control" type="text" name="nip" id="nip" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="gelar_depan" class="form-label">Gelar Depan</label>
                                <input class="form-control" type="text" name="gelar_depan" id="gelar_depan" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="gelar_belakang" class="form-label">Gelar Belakang</label>
                                <input class="form-control" type="text" name="gelar_belakang" id="gelar_belakang" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                <input class="form-control" type="text" name="tgl_lahir" id="tgl_lahir" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="kelamin" class="form-label">Kelamin</label>
                                <input class="form-control" type="text" name="kelamin" id="kelamin" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="agama" class="form-label">Agama</label>
                                <input class="form-control" type="text" name="agama" id="agama" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="status_kawin" class="form-label">Status Perkawinan</label>
                                <input class="form-control" type="text" name="status_kawin" id="status_kawin" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="status_keluarga" class="form-label">Status dalam Keluarga</label>
                                <input class="form-control" type="text" name="status_keluarga" id="status_keluarga" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control" type="text" name="email" id="email" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="hp" class="form-label">HP/Whatsapp</label>
                                <input class="form-control" type="text" name="hp" id="hp" value="" />
                            </div>
                            <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2" onclick="showdata()">Save changes</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- ALAMAT -->
                <div class="tab-pane fade" id="tab_alamat" role="tabpanel">
                    <form id="formAlamat" method="POST" onsubmit="return false">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="country">Country</label>
                                <select id="country" class="select2 form-select" data-allow-clear="true">
                                <option value="">Select</option>
                                <option value="Australia">Australia</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Canada">Canada</option>
                                <option value="China">China</option>
                                <option value="France">France</option>
                                <option value="Germany">Germany</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Japan">Japan</option>
                                <option value="Korea">Korea, Republic of</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Russia">Russian Federation</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="language" class="form-label">Language</label>
                                <select id="language" class="select2 form-select">
                                <option value="">Select Language</option>
                                <option value="en">English</option>
                                <option value="fr">French</option>
                                <option value="de">German</option>
                                <option value="pt">Portuguese</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="timeZones" class="form-label">Timezone</label>
                                <select id="timeZones" class="select2 form-select">
                                <option value="">Select Timezone</option>
                                <option value="-12">(GMT-12:00) International Date Line West</option>
                                <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                                <option value="-10">(GMT-10:00) Hawaii</option>
                                <option value="-9">(GMT-09:00) Alaska</option>
                                <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                                <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                                <option value="-7">(GMT-07:00) Arizona</option>
                                <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                                <option value="-6">(GMT-06:00) Central America</option>
                                <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                                <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                <option value="-6">(GMT-06:00) Saskatchewan</option>
                                <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                                <option value="-5">(GMT-05:00) Indiana (East)</option>
                                <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                                <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="currency" class="form-label">Currency</label>
                                <select id="currency" class="select2 form-select">
                                <option value="">Select Currency</option>
                                <option value="usd">USD</option>
                                <option value="euro">Euro</option>
                                <option value="pound">Pound</option>
                                <option value="bitcoin">Bitcoin</option>
                                </select>
                            </div>
                            <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- NOMOR -->
                <div class="tab-pane fade" id="tab_nomor" role="tabpanel">
                    <form id="formNomor" method="POST" onsubmit="return false">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="no_ktp" class="form-label">KTP</label>
                                <input class="form-control" type="number" name="no_ktp" id="no_ktp" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="npwp" class="form-label">NPWP</label>
                                <input class="form-control" type="number" name="npwp" id="npwp" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="nidn" class="form-label">NIDN</label>
                                <input class="form-control" type="number" name="nidn" id="nidn" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="no_kp" class="form-label">No Kartu Pegawai</label>
                                <input class="form-control" type="number" name="no_kp" id="no_kp" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="no_ekp" class="form-label">No Kartu Pegawai Elektronik</label>
                                <input class="form-control" type="number" name="no_ekp" id="no_ekp" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="no_taspen" class="form-label">Taspen</label>
                                <input class="form-control" type="number" name="no_taspen" id="no_taspen" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="no_bpjs" class="form-label">Kartu BPJS / KIS</label>
                                <input class="form-control" type="number" name="no_bpjs" id="no_bpjs" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="no_karis" class="form-label">Karis / Karsu</label>
                                <input class="form-control" type="number" name="no_karis" id="no_karis" value="" />
                            </div>
                            <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- PEKERJAAN -->
                <div class="tab-pane fade" id="tab_pekerjaan" role="tabpanel">
                <form id="formPekerjaan" method="POST" onsubmit="return false">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="status_pegawai" class="form-label">Status Pegawai</label>
                                <input class="form-control" type="text" name="status_pegawai" id="status_pegawai" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="tmt_cpns" class="form-label">TMT CPNS</label>
                                <input class="form-control" type="text" name="tmt_cpns" id="tmt_cpns" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="nip_lama" class="form-label">NIP Lama</label>
                                <input class="form-control" type="text" name="nip_lama" id="nip_lama" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="tmt_pns" class="form-label">TMT PNS</label>
                                <input class="form-control" type="text" name="tmt_pns" id="tmt_pns" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="nip_baru" class="form-label">NIP Baru</label>
                                <input class="form-control" type="text" name="nip_baru" id="nip_baru" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="pangkat" class="form-label">Pangkat</label>
                                <input class="form-control" type="text" name="pangkat" id="pangkat" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="golongan" class="form-label">Golongan</label>
                                <input class="form-control" type="text" name="golongan" id="golongan" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input class="form-control" type="text" name="jabatan" id="jabatan" value="" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="unit_kerja" class="form-label">Unit Kerja</label>
                                <input class="form-control" type="text" name="unit_kerja" id="unit_kerja" value="" />
                            </div>
                            <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2" onclick="showdata()">Save changes</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="modul/<?=$url[0]?>.js"></script>