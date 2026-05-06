<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="mb-4">
    <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Profil Saya</h1>
    <p class="mb-0 text-muted small">Kelola informasi akun dan preferensi Anda</p>
</div>

<div class="row">

    <div class="col-lg-4 mb-4">


        <div class="card shadow mb-4 border-0">
            <div class="card-body text-center pt-4 pb-4">
                <div class="avatar-wrapper mx-auto mb-3">
                    <div class="avatar-img mx-auto" id="avatarDisplay">BU</div>
                    <div class="avatar-edit-btn" onclick="document.getElementById('avatarInput').click()" title="Ganti Foto">
                        <i class="fas fa-camera"></i>
                    </div>
                    <input type="file" id="avatarInput" accept="image/*" style="display:none" onchange="previewAvatar(event)">
                </div>
                <h5 class="font-weight-bold mb-0 text-gray-800">Budi Santoso</h5>
                <p class="text-muted small mb-2">budi.santoso@email.com</p>
                <span class="badge badge-success px-3 py-1 mb-3" style="font-size:.72rem">
                    <i class="fas fa-check-circle mr-1"></i>Terverifikasi
                </span>
                <div class="small text-muted mb-3">Bergabung sejak <strong>Januari 2024</strong></div>

                <div class="row no-gutters mt-2">
                    <div class="col-4">
                        <div class="stat-mini" style="border-radius:8px 0 0 8px;border-right:0">
                            <div class="stat-val">24</div>
                            <div class="stat-lbl">Parkir</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-mini" style="border-radius:0;border-right:0">
                            <div class="stat-val text-success">48j</div>
                            <div class="stat-lbl">Durasi</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-mini" style="border-radius:0 8px 8px 0">
                            <div class="stat-val text-info" style="font-size:1rem">120K</div>
                            <div class="stat-lbl">Biaya</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4 border-0">
            <div class="card-header py-3 bg-white border-bottom d-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-car mr-2"></i>Kendaraan Saya
                </h6>
                <span class="badge badge-primary" style="font-size:.65rem">2 Kendaraan</span>
            </div>
            <div class="card-body pb-2">

                <!-- Vehicle 1 -->
                <div class="vehicle-card">
                    <div class="v-icon" style="background:#eaecf4">
                        <i class="fas fa-car text-primary"></i>
                    </div>
                    <div class="flex-grow-1">
                        <div class="v-name">Toyota Avanza</div>
                        <div class="v-plate">B 1234 XYZ</div>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="badge-primary-soft mr-2">Utama</span>
                        <button class="btn btn-link btn-sm p-0 text-muted" onclick="hapusKendaraan(this)" title="Hapus">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <!-- Vehicle 2 -->
                <div class="vehicle-card">
                    <div class="v-icon" style="background:#d4edda">
                        <i class="fas fa-bicycle text-success"></i>
                    </div>
                    <div class="flex-grow-1">
                        <div class="v-name">Honda Beat</div>
                        <div class="v-plate">H 5678 ABC</div>
                    </div>
                    <div>
                        <button class="btn btn-link btn-sm p-0 text-muted" onclick="hapusKendaraan(this)" title="Hapus">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>

                <!-- Add Vehicle Button -->
                <button class="btn-add-vehicle mt-1" onclick="$('#modalKendaraan').modal('show')">
                    <i class="fas fa-plus-circle mr-1"></i> Tambah Kendaraan
                </button>
            </div>
        </div>

    </div>

    <div class="col-lg-8 mb-4">
        <div class="card shadow mb-4 border-0">

            <div class="card-header py-0 bg-white border-bottom">
                <ul class="nav tab-custom" id="profileTab">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" onclick="switchTab('info', this); return false;">
                            <i class="fas fa-user mr-1"></i>Informasi Pribadi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="switchTab('keamanan', this); return false;">
                            <i class="fas fa-lock mr-1"></i>Keamanan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="switchTab('notifikasi', this); return false;">
                            <i class="fas fa-bell mr-1"></i>Notifikasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="switchTab('aktivitas', this); return false;">
                            <i class="fas fa-history mr-1"></i>Aktivitas
                        </a>
                    </li>
                </ul>
            </div>

            <div class="card-body tab-panel" id="tab-info">
                <div class="section-divider"><i class="fas fa-user mr-1"></i>Data Pribadi</div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label class="small font-weight-bold text-muted text-uppercase">Nama Depan</label>
                        <input type="text" class="form-control form-control-sm" name="nama_depan" value="Budi">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="small font-weight-bold text-muted text-uppercase">Nama Belakang</label>
                        <input type="text" class="form-control form-control-sm" name="nama_belakang" value="Santoso">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="small font-weight-bold text-muted text-uppercase">Email</label>
                        <div class="input-group input-group-sm">
                            <input type="email" class="form-control form-control-sm" name="email" value="budi.santoso@email.com">
                            <div class="input-group-append">
                                <span class="input-group-text bg-success text-white border-0" style="font-size:.7rem">
                                    <i class="fas fa-check"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="small font-weight-bold text-muted text-uppercase">No. Telepon</label>
                        <input type="tel" class="form-control form-control-sm" name="telepon" value="0812-3456-7890">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="small font-weight-bold text-muted text-uppercase">Tanggal Lahir</label>
                        <input type="date" class="form-control form-control-sm" name="tgl_lahir" value="1990-05-15">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="small font-weight-bold text-muted text-uppercase">Jenis Kelamin</label>
                        <select class="form-control form-control-sm" name="jenis_kelamin">
                            <option selected>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="section-divider"><i class="fas fa-map-marker-alt mr-1"></i>Alamat</div>
                <div class="form-row">
                    <div class="col-12 mb-3">
                        <label class="small font-weight-bold text-muted text-uppercase">Alamat Lengkap</label>
                        <input type="text" class="form-control form-control-sm" name="alamat" value="Jl. Pandanaran No. 12, Semarang">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="small font-weight-bold text-muted text-uppercase">Kota</label>
                        <input type="text" class="form-control form-control-sm" name="kota" value="Semarang">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="small font-weight-bold text-muted text-uppercase">Provinsi</label>
                        <input type="text" class="form-control form-control-sm" name="provinsi" value="Jawa Tengah">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="small font-weight-bold text-muted text-uppercase">Kode Pos</label>
                        <input type="text" class="form-control form-control-sm" name="kodepos" value="50131">
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-2">
                    <small class="text-muted">
                        <i class="fas fa-info-circle mr-1"></i>Terakhir diperbarui: 01 Mei 2026
                    </small>
                    <button type="button" class="btn btn-primary btn-sm px-4" onclick="simpanProfil()">
                        <i class="fas fa-save mr-1"></i> Simpan Perubahan
                    </button>
                </div>
            </div>

            <div class="card-body tab-panel" id="tab-keamanan" style="display:none">
                <div class="section-divider"><i class="fas fa-lock mr-1"></i>Ganti Password</div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label class="small font-weight-bold text-muted text-uppercase">Password Saat Ini</label>
                        <div class="input-group input-group-sm">
                            <input type="password" class="form-control form-control-sm" id="currentPass" placeholder="Masukkan password saat ini">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary btn-sm" type="button" onclick="togglePass('currentPass')">
                                    <i class="fas fa-eye" id="eye-currentPass"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="small font-weight-bold text-muted text-uppercase">Password Baru</label>
                        <div class="input-group input-group-sm">
                            <input type="password" class="form-control form-control-sm" id="newPass" placeholder="Min. 8 karakter" oninput="checkStrength(this.value)">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary btn-sm" type="button" onclick="togglePass('newPass')">
                                    <i class="fas fa-eye" id="eye-newPass"></i>
                                </button>
                            </div>
                        </div>
                        <div class="password-strength mt-1">
                            <div class="password-strength-bar" id="strengthBar"></div>
                        </div>
                        <small class="text-muted" id="strengthText" style="font-size:.68rem"></small>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="small font-weight-bold text-muted text-uppercase">Konfirmasi Password</label>
                        <div class="input-group input-group-sm">
                            <input type="password" class="form-control form-control-sm" id="confirmPass" placeholder="Ulangi password baru">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary btn-sm" type="button" onclick="togglePass('confirmPass')">
                                    <i class="fas fa-eye" id="eye-confirmPass"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-1">
                    <button type="button" class="btn btn-primary btn-sm px-4" onclick="gantiPassword()">
                        <i class="fas fa-key mr-1"></i> Ganti Password
                    </button>
                </div>

                <div class="section-divider mt-4"><i class="fas fa-shield-alt mr-1"></i>Keamanan Akun</div>
                <div class="info-row">
                    <div class="info-label">Login Terakhir</div>
                    <div class="info-value"><i class="fas fa-sign-in-alt text-success mr-2"></i>06 Mei 2026 &middot; 07:42 WIB</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Perangkat</div>
                    <div class="info-value"><i class="fas fa-laptop text-primary mr-2"></i>Chrome &middot; Windows 11</div>
                </div>
                <div class="info-row">
                    <div class="info-label">Autentikasi 2FA</div>
                    <div class="info-value">
                        <span class="badge badge-danger px-2 py-1 mr-2" style="font-size:.68rem">Tidak Aktif</span>
                        <button class="btn btn-outline-primary btn-sm" style="font-size:.72rem">Aktifkan</button>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-label">Sesi Aktif</div>
                    <div class="info-value">
                        <span class="mr-2">1 perangkat</span>
                        <button class="btn btn-outline-danger btn-sm" style="font-size:.72rem">
                            <i class="fas fa-sign-out-alt mr-1"></i>Keluar Semua
                        </button>
                    </div>
                </div>

                <div class="section-divider mt-3">
                    <i class="fas fa-exclamation-triangle mr-1 text-danger"></i>
                    <span class="text-danger">Zona Berbahaya</span>
                </div>
                <div class="d-flex align-items-center justify-content-between p-3"
                     style="background:#fff5f5;border-radius:8px;border:1px solid #f5c6cb">
                    <div>
                        <div class="font-weight-bold text-danger" style="font-size:.85rem">Hapus Akun</div>
                        <div class="text-muted small">Semua data Anda akan dihapus permanen dan tidak dapat dipulihkan.</div>
                    </div>
                    <button class="btn btn-danger btn-sm ml-3" onclick="konfirmasiHapusAkun()">Hapus Akun</button>
                </div>
            </div>

            <div class="card-body tab-panel" id="tab-notifikasi" style="display:none">
                <div class="section-divider"><i class="fas fa-bell mr-1"></i>Preferensi Notifikasi</div>

                <div class="notif-item">
                    <div class="notif-icon" style="background:#eaecf4"><i class="fas fa-parking text-primary"></i></div>
                    <div class="flex-grow-1">
                        <div class="font-weight-bold" style="font-size:.85rem">Konfirmasi Parkir</div>
                        <div class="text-muted small">Notifikasi saat parkir berhasil dimulai</div>
                    </div>
                    <label class="toggle-switch mb-0"><input type="checkbox" checked><span class="toggle-slider"></span></label>
                </div>
                <div class="notif-item">
                    <div class="notif-icon" style="background:#d4edda"><i class="fas fa-sign-out-alt text-success"></i></div>
                    <div class="flex-grow-1">
                        <div class="font-weight-bold" style="font-size:.85rem">Notifikasi Keluar Parkir</div>
                        <div class="text-muted small">Pengingat saat batas waktu parkir mendekati</div>
                    </div>
                    <label class="toggle-switch mb-0"><input type="checkbox" checked><span class="toggle-slider"></span></label>
                </div>
                <div class="notif-item">
                    <div class="notif-icon" style="background:#fff3cd"><i class="fas fa-wallet text-warning"></i></div>
                    <div class="flex-grow-1">
                        <div class="font-weight-bold" style="font-size:.85rem">Tagihan &amp; Pembayaran</div>
                        <div class="text-muted small">Konfirmasi setiap transaksi pembayaran parkir</div>
                    </div>
                    <label class="toggle-switch mb-0"><input type="checkbox" checked><span class="toggle-slider"></span></label>
                </div>
                <div class="notif-item">
                    <div class="notif-icon" style="background:#d1ecf1"><i class="fas fa-tag text-info"></i></div>
                    <div class="flex-grow-1">
                        <div class="font-weight-bold" style="font-size:.85rem">Promo &amp; Diskon</div>
                        <div class="text-muted small">Informasi penawaran spesial dari kami</div>
                    </div>
                    <label class="toggle-switch mb-0"><input type="checkbox"><span class="toggle-slider"></span></label>
                </div>
                <div class="notif-item">
                    <div class="notif-icon" style="background:#f8d7da"><i class="fas fa-exclamation-circle text-danger"></i></div>
                    <div class="flex-grow-1">
                        <div class="font-weight-bold" style="font-size:.85rem">Peringatan Keamanan</div>
                        <div class="text-muted small">Login baru atau aktivitas mencurigakan</div>
                    </div>
                    <label class="toggle-switch mb-0"><input type="checkbox" checked><span class="toggle-slider"></span></label>
                </div>

                <div class="section-divider mt-3"><i class="fas fa-envelope mr-1"></i>Saluran Notifikasi</div>
                <div class="notif-item">
                    <div class="notif-icon" style="background:#eaecf4"><i class="fas fa-envelope text-primary"></i></div>
                    <div class="flex-grow-1">
                        <div class="font-weight-bold" style="font-size:.85rem">Email</div>
                        <div class="text-muted small">budi.santoso@email.com</div>
                    </div>
                    <label class="toggle-switch mb-0"><input type="checkbox" checked><span class="toggle-slider"></span></label>
                </div>
                <div class="notif-item">
                    <div class="notif-icon" style="background:#d4edda"><i class="fas fa-sms text-success"></i></div>
                    <div class="flex-grow-1">
                        <div class="font-weight-bold" style="font-size:.85rem">SMS / WhatsApp</div>
                        <div class="text-muted small">0812-3456-7890</div>
                    </div>
                    <label class="toggle-switch mb-0"><input type="checkbox"><span class="toggle-slider"></span></label>
                </div>

                <div class="d-flex justify-content-end mt-3">
                    <button type="button" class="btn btn-primary btn-sm px-4" onclick="simpanNotif()">
                        <i class="fas fa-save mr-1"></i> Simpan Pengaturan
                    </button>
                </div>
            </div>

            <div class="card-body tab-panel p-0" id="tab-aktivitas" style="display:none">
                <div class="px-4 pt-3">
                    <div class="section-divider"><i class="fas fa-history mr-1"></i>Aktivitas Terakhir</div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover mb-0" width="100%" cellspacing="0">
                        <thead class="thead-light">
                            <tr>
                                <th class="align-middle" style="font-size:.72rem">Aktivitas</th>
                                <th class="align-middle" style="font-size:.72rem">Perangkat</th>
                                <th class="align-middle" style="font-size:.72rem">Waktu</th>
                                <th class="text-center align-middle" style="font-size:.72rem">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle small"><i class="fas fa-sign-in-alt text-success mr-1"></i>Login berhasil</td>
                                <td class="align-middle small text-muted">Chrome &middot; Win 11</td>
                                <td class="align-middle small text-muted">06 Mei 2026 &middot; 07:42</td>
                                <td class="text-center align-middle"><span class="badge badge-success" style="font-size:.65rem">Sukses</span></td>
                            </tr>
                            <tr>
                                <td class="align-middle small"><i class="fas fa-parking text-primary mr-1"></i>Mulai parkir Zona A</td>
                                <td class="align-middle small text-muted">Aplikasi Mobile</td>
                                <td class="align-middle small text-muted">04 Mei 2026 &middot; 20:00</td>
                                <td class="text-center align-middle"><span class="badge badge-warning text-dark" style="font-size:.65rem">Aktif</span></td>
                            </tr>
                            <tr>
                                <td class="align-middle small"><i class="fas fa-edit text-info mr-1"></i>Update profil</td>
                                <td class="align-middle small text-muted">Chrome &middot; Win 11</td>
                                <td class="align-middle small text-muted">01 Mei 2026 &middot; 14:30</td>
                                <td class="text-center align-middle"><span class="badge badge-success" style="font-size:.65rem">Sukses</span></td>
                            </tr>
                            <tr>
                                <td class="align-middle small"><i class="fas fa-sign-in-alt text-success mr-1"></i>Login berhasil</td>
                                <td class="align-middle small text-muted">Chrome &middot; Win 11</td>
                                <td class="align-middle small text-muted">01 Mei 2026 &middot; 14:25</td>
                                <td class="text-center align-middle"><span class="badge badge-success" style="font-size:.65rem">Sukses</span></td>
                            </tr>
                            <tr>
                                <td class="align-middle small"><i class="fas fa-sign-in-alt text-danger mr-1"></i>Percobaan login gagal</td>
                                <td class="align-middle small text-muted">Unknown</td>
                                <td class="align-middle small text-muted">28 Apr 2026 &middot; 22:10</td>
                                <td class="text-center align-middle"><span class="badge badge-danger" style="font-size:.65rem">Gagal</span></td>
                            </tr>
                            <tr>
                                <td class="align-middle small"><i class="fas fa-car text-primary mr-1"></i>Tambah kendaraan</td>
                                <td class="align-middle small text-muted">Chrome &middot; Win 11</td>
                                <td class="align-middle small text-muted">15 Jan 2024 &middot; 10:00</td>
                                <td class="text-center align-middle"><span class="badge badge-success" style="font-size:.65rem">Sukses</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer bg-white py-2">
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#">&laquo; Sebelumnya</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">Selanjutnya &raquo;</a></li>
                    </ul>
                </div>
            </div>

        </div><!-- /.card -->
    </div>
    <!-- =================== END RIGHT COLUMN ================= -->

</div><!-- /.row -->


<!-- ===================== MODAL TAMBAH KENDARAAN ===================== -->
<div class="modal fade" id="modalKendaraan" tabindex="-1" role="dialog" aria-labelledby="modalKendaraanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalKendaraanLabel">
                    <i class="fas fa-car mr-2"></i>Tambah Kendaraan
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4 py-3">
                <div class="mb-3">
                    <label class="small font-weight-bold text-muted text-uppercase">Jenis Kendaraan</label>
                    <div class="d-flex mt-1" style="gap:10px">
                        <button class="btn btn-outline-primary btn-sm flex-fill active" id="btnMobil" onclick="pilihJenis('mobil')">
                            <i class="fas fa-car mr-1"></i> Mobil
                        </button>
                        <button class="btn btn-outline-success btn-sm flex-fill" id="btnMotor" onclick="pilihJenis('motor')">
                            <i class="fas fa-bicycle mr-1"></i> Motor
                        </button>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="small font-weight-bold text-muted text-uppercase">Nama / Merek</label>
                    <input type="text" class="form-control form-control-sm" id="namaKendaraan" placeholder="cth. Toyota Avanza">
                </div>
                <div class="mb-3">
                    <label class="small font-weight-bold text-muted text-uppercase">Nomor Plat</label>
                    <input type="text" class="form-control form-control-sm" id="platKendaraan" placeholder="cth. B 1234 XYZ">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="utamaCheck">
                    <label class="form-check-label small" for="utamaCheck">Jadikan kendaraan utama</label>
                </div>
            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary btn-sm" onclick="tambahKendaraan()">
                    <i class="fas fa-plus mr-1"></i>Tambah
                </button>
            </div>
        </div>
    </div>
</div>


<!-- ===================== MODAL HAPUS AKUN ===================== -->
<div class="modal fade" id="modalHapusAkun" tabindex="-1" role="dialog" aria-labelledby="modalHapusLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="modalHapusLabel">
                    <i class="fas fa-exclamation-triangle mr-2"></i>Konfirmasi Hapus Akun
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4 py-3">
                <p class="text-muted small mb-3">
                    Untuk mengonfirmasi penghapusan akun, ketik <strong>HAPUS AKUN</strong> di bawah ini:
                </p>
                <input type="text" class="form-control form-control-sm" id="konfirmasiTeks" placeholder="Ketik: HAPUS AKUN">
            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger btn-sm" onclick="hapusAkun()">
                    <i class="fas fa-trash mr-1"></i>Hapus Permanen
                </button>
            </div>
        </div>
    </div>
</div>


<!-- ===================== TOAST NOTIFICATION ===================== -->
<div id="toastNotif" style="position:fixed;top:20px;right:20px;z-index:9999;min-width:260px;display:none">
    <div class="alert mb-0 shadow" id="toastAlert" style="border-left:4px solid #1cc88a">
        <span id="toastMsg"></span>
    </div>
</div>


<!-- ===================== STYLES ===================== -->
<style>
/* Avatar */
.avatar-wrapper { position: relative; display: inline-block; }
.avatar-img {
    width: 100px; height: 100px; border-radius: 50%;
    background: linear-gradient(135deg, #4e73df, #36b9cc);
    display: flex; align-items: center; justify-content: center;
    color: #fff; font-size: 2.2rem; font-weight: 700;
    border: 4px solid #fff; box-shadow: 0 4px 15px rgba(0,0,0,.12);
    margin: 0 auto; overflow: hidden;
}
.avatar-edit-btn {
    position: absolute; bottom: 4px; right: 4px;
    background: #4e73df; color: #fff; border-radius: 50%;
    width: 30px; height: 30px; display: flex;
    align-items: center; justify-content: center;
    cursor: pointer; border: 2px solid #fff;
    font-size: 11px; box-shadow: 0 2px 8px rgba(0,0,0,.2);
    transition: background .2s;
}
.avatar-edit-btn:hover { background: #2e59d9; }

/* Mini Stats */
.stat-mini {
    background: #f8f9fc; border-radius: 8px;
    padding: 12px 8px; text-align: center; border: 1px solid #e3e6f0;
}
.stat-val { font-size: 1.2rem; font-weight: 700; color: #4e73df; }
.stat-lbl { font-size: .7rem; color: #858796; text-transform: uppercase; font-weight: 600; }

/* Tabs */
.tab-custom { border-bottom: none; }
.tab-custom .nav-link {
    font-size: .8rem; font-weight: 700; color: #858796;
    padding: 10px 14px; border-radius: 0;
    border-bottom: 3px solid transparent;
}
.tab-custom .nav-link:hover { color: #4e73df; background: transparent; }
.tab-custom .nav-link.active { color: #4e73df; border-bottom-color: #4e73df; background: transparent; }

/* Section Divider */
.section-divider {
    font-size: .7rem; font-weight: 700; color: #4e73df;
    text-transform: uppercase; letter-spacing: 1px; margin: 18px 0 12px;
}

/* Info Row */
.info-row { display: flex; align-items: center; padding: 9px 0; border-bottom: 1px solid #f0f1f5; }
.info-row:last-child { border-bottom: none; }
.info-label { font-size: .7rem; font-weight: 700; color: #858796; text-transform: uppercase; width: 140px; flex-shrink: 0; }
.info-value { font-size: .88rem; color: #3a3b45; font-weight: 600; }

/* Vehicle Card */
.vehicle-card {
    border: 1px solid #e3e6f0; border-radius: 8px;
    padding: 12px 14px; margin-bottom: 10px;
    display: flex; align-items: center; gap: 12px; background: #fff;
}
.v-icon { width: 38px; height: 38px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1rem; flex-shrink: 0; }
.v-name { font-weight: 700; font-size: .88rem; color: #3a3b45; }
.v-plate { font-size: .75rem; color: #858796; }
.badge-primary-soft {
    background: #eaecf4; color: #4e73df;
    font-size: .65rem; border-radius: 4px;
    padding: 2px 8px; font-weight: 700;
}
.btn-add-vehicle {
    border: 2px dashed #d1d3e2; color: #858796;
    background: transparent; border-radius: 8px;
    padding: 10px; width: 100%; font-size: .8rem; transition: all .2s;
}
.btn-add-vehicle:hover { border-color: #4e73df; color: #4e73df; background: #eaecf4; }

/* Notif Toggle */
.notif-item {
    display: flex; align-items: center;
    padding: 10px 0; border-bottom: 1px solid #f0f1f5; gap: 12px;
}
.notif-item:last-child { border-bottom: none; }
.notif-icon {
    width: 34px; height: 34px; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: .85rem; flex-shrink: 0;
}
.toggle-switch { position: relative; display: inline-block; width: 42px; height: 22px; }
.toggle-switch input { opacity: 0; width: 0; height: 0; }
.toggle-slider {
    position: absolute; cursor: pointer;
    top:0; left:0; right:0; bottom:0;
    background: #ccc; border-radius: 22px; transition: .3s;
}
.toggle-slider:before {
    position: absolute; content: "";
    height: 16px; width: 16px; left: 3px; bottom: 3px;
    background: #fff; border-radius: 50%; transition: .3s;
}
input:checked + .toggle-slider { background: #4e73df; }
input:checked + .toggle-slider:before { transform: translateX(20px); }

/* Password Strength */
.password-strength { height: 4px; border-radius: 2px; background: #e3e6f0; overflow: hidden; margin-top: 6px; }
.password-strength-bar { height: 100%; border-radius: 2px; transition: width .3s, background .3s; width: 0%; }
</style>


<!-- ===================== SCRIPTS ===================== -->
<script>
/* ---------- TAB SWITCHER ---------- */
function switchTab(tab, el) {
    document.querySelectorAll('.tab-panel').forEach(p => p.style.display = 'none');
    document.getElementById('tab-' + tab).style.display = 'block';
    document.querySelectorAll('#profileTab .nav-link').forEach(l => l.classList.remove('active'));
    el.classList.add('active');
}

/* ---------- TOAST ---------- */
function showToast(msg, type) {
    type = type || 'success';
    var colors = { success: '#1cc88a', danger: '#e74a3b', warning: '#f6c23e', primary: '#4e73df' };
    document.getElementById('toastMsg').textContent = msg;
    var alert = document.getElementById('toastAlert');
    alert.style.borderLeftColor = colors[type] || '#1cc88a';
    alert.className = 'alert mb-0 shadow alert-light';
    var toast = document.getElementById('toastNotif');
    toast.style.display = 'block';
    setTimeout(function() { toast.style.display = 'none'; }, 3000);
}

/* ---------- SIMPAN PROFIL ---------- */
function simpanProfil() {
    showToast('✅ Profil berhasil disimpan!', 'success');
}

/* ---------- SIMPAN NOTIFIKASI ---------- */
function simpanNotif() {
    showToast('✅ Pengaturan notifikasi disimpan!', 'success');
}

/* ---------- GANTI PASSWORD ---------- */
function gantiPassword() {
    var curr = document.getElementById('currentPass').value;
    var newp = document.getElementById('newPass').value;
    var conf = document.getElementById('confirmPass').value;
    if (!curr || !newp || !conf) { showToast('⚠️ Semua field harus diisi!', 'warning'); return; }
    if (newp !== conf)           { showToast('❌ Konfirmasi password tidak cocok!', 'danger'); return; }
    if (newp.length < 8)         { showToast('❌ Password minimal 8 karakter!', 'danger'); return; }
    showToast('✅ Password berhasil diperbarui!', 'success');
    document.getElementById('currentPass').value = '';
    document.getElementById('newPass').value     = '';
    document.getElementById('confirmPass').value = '';
    document.getElementById('strengthBar').style.width = '0%';
    document.getElementById('strengthText').textContent = '';
}

/* ---------- PASSWORD STRENGTH ---------- */
function checkStrength(val) {
    var bar = document.getElementById('strengthBar');
    var txt = document.getElementById('strengthText');
    var score = 0;
    if (val.length >= 8)           score++;
    if (/[A-Z]/.test(val))         score++;
    if (/[0-9]/.test(val))         score++;
    if (/[^A-Za-z0-9]/.test(val))  score++;
    var levels = [
        { w:'0%',   c:'',        t:'' },
        { w:'25%',  c:'#e74a3b', t:'Sangat Lemah' },
        { w:'50%',  c:'#f6c23e', t:'Lemah' },
        { w:'75%',  c:'#4e73df', t:'Cukup Kuat' },
        { w:'100%', c:'#1cc88a', t:'Kuat ✓' }
    ];
    var lv = levels[score] || levels[0];
    bar.style.width      = lv.w;
    bar.style.background = lv.c;
    txt.textContent      = lv.t;
    txt.style.color      = lv.c;
}

/* ---------- TOGGLE PASSWORD VISIBILITY ---------- */
function togglePass(id) {
    var inp  = document.getElementById(id);
    var icon = document.getElementById('eye-' + id);
    if (inp.type === 'password') {
        inp.type       = 'text';
        icon.className = 'fas fa-eye-slash';
    } else {
        inp.type       = 'password';
        icon.className = 'fas fa-eye';
    }
}

/* ---------- PILIH JENIS KENDARAAN ---------- */
var jenisKendaraan = 'mobil';
function pilihJenis(jenis) {
    jenisKendaraan = jenis;
    document.getElementById('btnMobil').className =
        'btn btn-outline-primary btn-sm flex-fill' + (jenis === 'mobil' ? ' active' : '');
    document.getElementById('btnMotor').className =
        'btn btn-outline-success btn-sm flex-fill'  + (jenis === 'motor' ? ' active' : '');
}

/* ---------- TAMBAH KENDARAAN ---------- */
function tambahKendaraan() {
    var nama = document.getElementById('namaKendaraan').value.trim();
    var plat = document.getElementById('platKendaraan').value.trim();
    if (!nama || !plat) { showToast('⚠️ Nama dan nomor plat harus diisi!', 'warning'); return; }
    showToast('✅ Kendaraan berhasil ditambahkan!', 'success');
    document.getElementById('namaKendaraan').value = '';
    document.getElementById('platKendaraan').value = '';
    $('#modalKendaraan').modal('hide');
}

/* ---------- HAPUS KENDARAAN ---------- */
function hapusKendaraan(btn) {
    if (confirm('Hapus kendaraan ini dari daftar Anda?')) {
        btn.closest('.vehicle-card').remove();
        showToast('Kendaraan dihapus.', 'primary');
    }
}

/* ---------- HAPUS AKUN ---------- */
function konfirmasiHapusAkun() {
    document.getElementById('konfirmasiTeks').value = '';
    $('#modalHapusAkun').modal('show');
}
function hapusAkun() {
    var txt = document.getElementById('konfirmasiTeks').value;
    if (txt !== 'HAPUS AKUN') { showToast('❌ Teks konfirmasi tidak cocok!', 'danger'); return; }
    showToast('Akun dihapus. Anda akan diarahkan...', 'danger');
    $('#modalHapusAkun').modal('hide');
    /* Arahkan ke route logout/hapus akun */
    /* window.location.href = '<?= site_url('/akun/hapus') ?>'; */
}

/* ---------- PREVIEW AVATAR ---------- */
function previewAvatar(event) {
    var file = event.target.files[0];
    if (!file) return;
    var reader = new FileReader();
    reader.onload = function(e) {
        var av = document.getElementById('avatarDisplay');
        av.style.background = 'none';
        av.innerHTML = '<img src="' + e.target.result + '" style="width:100%;height:100%;border-radius:50%;object-fit:cover">';
    };
    reader.readAsDataURL(file);
}
</script>

<?= $this->endSection() ?>
