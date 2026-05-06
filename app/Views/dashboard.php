<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Filter Bar -->
<div class="card shadow-sm border-0 mb-4" style="border-radius:12px;background:linear-gradient(135deg,#4e73df,#224abe)">
    <div class="card-body py-3 px-4">
        <div class="row align-items-center">
            <div class="col-md-4 mb-2 mb-md-0">
                <div class="bg-white rounded p-3 d-flex align-items-center">
                    <i class="fas fa-car text-primary mr-3" style="font-size:1.2rem"></i>
                    <div class="flex-grow-1">
                        <small class="text-muted font-weight-bold d-block">Jenis Kendaraan</small>
                        <select class="form-control form-control-sm border-0 p-0 font-weight-bold" id="jenisKendaraan" style="height:auto;font-size:.95rem" onchange="updateBiaya()">
                            <option value="mobil">Mobil</option>
                            <option value="motor">Motor</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-2 mb-md-0">
                <div class="bg-white rounded p-3 d-flex align-items-center">
                    <i class="fas fa-calendar-alt text-primary mr-3" style="font-size:1.2rem"></i>
                    <div class="flex-grow-1">
                        <small class="text-muted font-weight-bold d-block">Tanggal</small>
                        <input type="date" class="form-control form-control-sm border-0 p-0 font-weight-bold" id="tanggal" style="height:auto;font-size:.95rem" value="2026-05-06">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bg-white rounded p-3 d-flex align-items-center">
                    <i class="fas fa-clock text-primary mr-3" style="font-size:1.2rem"></i>
                    <div class="flex-grow-1">
                        <small class="text-muted font-weight-bold d-block">Durasi</small>
                        <select class="form-control form-control-sm border-0 p-0 font-weight-bold" id="durasi" style="height:auto;font-size:.95rem" onchange="updateBiaya()">
                            <option value="1">1 Jam</option>
                            <option value="2" selected>2 Jam</option>
                            <option value="3">3 Jam</option>
                            <option value="4">4 Jam</option>
                            <option value="5">5 Jam</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Info Banner -->
<div class="alert border-0 shadow-sm d-flex align-items-center justify-content-between mb-4" style="background:#fff;border-radius:10px">
    <div class="d-flex align-items-center">
        <i class="fas fa-star text-warning mr-3"></i>
        <span class="small font-weight-bold text-dark">Pilih slot parkir yang tersedia. Klik pada slot untuk melihat detail harga dan informasi lainnya.</span>
    </div>
    <div class="d-none d-md-flex align-items-center ml-3" style="gap:16px">
        <span class="small text-muted"><i class="fas fa-circle text-success mr-1" style="font-size:.5rem"></i> Tersedia</span>
        <span class="small text-muted"><i class="fas fa-circle text-danger mr-1" style="font-size:.5rem"></i> Terisi</span>
        <span class="small text-muted"><i class="fas fa-circle text-secondary mr-1" style="font-size:.5rem"></i> Maintenance</span>
        <span class="small text-muted"><span class="border d-inline-block mr-1" style="width:10px;height:10px;border-radius:2px"></span> Dipilih</span>
    </div>
</div>

<div class="row">
    <!-- Peta Slot Parkir -->
    <div class="col-lg-8 mb-4">
        <div class="card shadow-sm border-0" style="border-radius:10px">
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center border-bottom">
                <div>
                    <h6 class="font-weight-bold text-dark mb-0">Peta Slot Parkir Logis</h6>
                    <small class="text-muted">Live monitoring Lantai 1 (A & B)</small>
                </div>
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-primary font-weight-bold px-3" id="btnLt1" onclick="switchLantai(1)">Lantai 1</button>
                    <button type="button" class="btn btn-outline-secondary font-weight-bold px-3" id="btnLt2" onclick="switchLantai(2)">Lantai 2</button>
                </div>
            </div>
            <div class="card-body p-4" style="background:#f8f9fc">
                <!-- Zona A -->
                <div class="mb-4">
                    <h6 class="text-muted text-uppercase font-weight-bold small mb-3">Zona A (Premium)</h6>
                    <div class="row" style="gap:0" id="zonaA">
                        <div class="col-4 col-sm-2 mb-3">
                            <div class="slot-box slot-free" onclick="pilihSlot(this,'A1')">
                                <span class="font-weight-bold">A1</span>
                            </div>
                        </div>
                        <div class="col-4 col-sm-2 mb-3">
                            <div class="slot-box slot-terisi">
                                <i class="fas fa-car text-danger"></i>
                                <small class="font-weight-bold text-danger">A2</small>
                            </div>
                        </div>
                        <div class="col-4 col-sm-2 mb-3">
                            <div class="slot-box slot-terisi">
                                <i class="fas fa-car text-danger"></i>
                                <small class="font-weight-bold text-danger">A3</small>
                            </div>
                        </div>
                        <div class="col-4 col-sm-2 mb-3">
                            <div class="slot-box slot-free" onclick="pilihSlot(this,'A4')">
                                <span class="font-weight-bold">A4</span>
                            </div>
                        </div>
                        <div class="col-4 col-sm-2 mb-3">
                            <div class="slot-box slot-free" onclick="pilihSlot(this,'A5')">
                                <span class="font-weight-bold">A5</span>
                            </div>
                        </div>
                        <div class="col-4 col-sm-2 mb-3">
                            <div class="slot-box slot-maint">
                                <i class="fas fa-tools text-secondary"></i>
                                <small class="font-weight-bold text-secondary">MTO</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Zona B -->
                <div>
                    <h6 class="text-muted text-uppercase font-weight-bold small mb-3">Zona B (Reguler)</h6>
                    <div class="row" id="zonaB">
                        <div class="col-4 col-sm-2 mb-3">
                            <div class="slot-box slot-free" onclick="pilihSlot(this,'B1')">
                                <span class="font-weight-bold">B1</span>
                            </div>
                        </div>
                        <div class="col-4 col-sm-2 mb-3">
                            <div class="slot-box slot-terisi">
                                <i class="fas fa-car text-danger"></i>
                                <small class="font-weight-bold text-danger">B2</small>
                            </div>
                        </div>
                        <div class="col-4 col-sm-2 mb-3">
                            <div class="slot-box slot-free" onclick="pilihSlot(this,'B3')">
                                <span class="font-weight-bold">B3</span>
                            </div>
                        </div>
                        <div class="col-4 col-sm-2 mb-3">
                            <div class="slot-box slot-free" onclick="pilihSlot(this,'B4')">
                                <span class="font-weight-bold">B4</span>
                            </div>
                        </div>
                        <div class="col-4 col-sm-2 mb-3">
                            <div class="slot-box slot-free" onclick="pilihSlot(this,'B5')">
                                <span class="font-weight-bold">B5</span>
                            </div>
                        </div>
                        <div class="col-4 col-sm-2 mb-3">
                            <div class="slot-box slot-free" onclick="pilihSlot(this,'B6')">
                                <span class="font-weight-bold">B6</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Detail Reservasi -->
    <div class="col-lg-4 mb-4">
        <div class="card shadow-sm border-0 mb-3" style="border-radius:10px">
            <div class="card-header bg-white py-3 border-bottom">
                <h6 class="font-weight-bold text-dark mb-0">Detail Reservasi</h6>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-2">
                    <span class="small text-muted">Slot</span>
                    <span class="small font-weight-bold" id="detailSlot">-</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="small text-muted">Tanggal</span>
                    <span class="small font-weight-bold" id="detailTanggal">6 Mei 2026</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="small text-muted">Waktu Masuk</span>
                    <span class="small font-weight-bold">08:00</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="small text-muted">Durasi</span>
                    <span class="small font-weight-bold" id="detailDurasi">2 Jam</span>
                </div>
                <div class="d-flex justify-content-between">
                    <span class="small text-muted">Jenis Kendaraan</span>
                    <span class="small font-weight-bold" id="detailKendaraan">Mobil</span>
                </div>
            </div>
        </div>

        <div class="card shadow-sm border-0" style="border-radius:10px">
            <div class="card-header bg-white py-3 border-bottom">
                <h6 class="font-weight-bold text-dark mb-0">Rincian Biaya</h6>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-2">
                    <span class="small text-muted" id="labelTarif">Tarif Parkir: 2 Jam x Rp 6.000</span>
                    <span class="small font-weight-bold" id="biayaTarif">Rp 12.000</span>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <span class="small text-muted">Biaya Layanan</span>
                    <span class="small font-weight-bold">Rp 1.000</span>
                </div>
                <hr class="my-2">
                <div class="d-flex justify-content-between">
                    <span class="font-weight-bold">Total</span>
                    <span class="font-weight-bold text-primary" id="biayaTotal">Rp 13.000</span>
                </div>
            </div>
            <div class="card-footer bg-white border-top-0 pb-3">
                <a href="<?= site_url('/pembayaran') ?>" class="btn btn-primary btn-block font-weight-bold" style="border-radius:6px" id="btnLanjut">
                    <i class="fas fa-arrow-right mr-1"></i> Lanjut ke Detail
                </a>
                <a href="#" class="btn btn-link btn-block text-muted small font-weight-bold" onclick="resetSlot()">
                    <i class="fas fa-undo mr-1"></i> Kembali ke Pencarian
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Styles -->
<style>
.slot-box {
    background: #fff;
    border: 2px solid #e3e6f0;
    border-radius: 8px;
    height: 70px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all .2s;
    gap: 2px;
}
.slot-box:hover { border-color: #4e73df; }
.slot-free { color: #858796; }
.slot-free:hover { background: #f0f3ff; }
.slot-terisi {
    border-color: #e74a3b;
    background: #fff5f5;
    cursor: not-allowed;
}
.slot-maint {
    border: 2px dashed #d1d3e2;
    background: #f8f9fc;
    cursor: not-allowed;
}
.slot-selected {
    border-color: #4e73df !important;
    background: #eef2ff !important;
    color: #4e73df !important;
}
</style>

<!-- Scripts -->
<script>
var selectedSlot = null;
var tarifMobil = 6000;
var tarifMotor = 3000;

function pilihSlot(el, nama) {
    // Remove previous selection
    document.querySelectorAll('.slot-selected').forEach(function(s) {
        s.classList.remove('slot-selected');
    });
    el.classList.add('slot-selected');
    selectedSlot = nama;
    document.getElementById('detailSlot').textContent = nama;
    updateBiaya();
}

function updateBiaya() {
    var jenis = document.getElementById('jenisKendaraan').value;
    var durasi = parseInt(document.getElementById('durasi').value);
    var tarif = jenis === 'mobil' ? tarifMobil : tarifMotor;
    var total = (tarif * durasi) + 1000;

    document.getElementById('detailDurasi').textContent = durasi + ' Jam';
    document.getElementById('detailKendaraan').textContent = jenis === 'mobil' ? 'Mobil' : 'Motor';
    document.getElementById('labelTarif').textContent = 'Tarif Parkir: ' + durasi + ' Jam x Rp ' + tarif.toLocaleString('id-ID');
    document.getElementById('biayaTarif').textContent = 'Rp ' + (tarif * durasi).toLocaleString('id-ID');
    document.getElementById('biayaTotal').textContent = 'Rp ' + total.toLocaleString('id-ID');
}

function resetSlot() {
    document.querySelectorAll('.slot-selected').forEach(function(s) {
        s.classList.remove('slot-selected');
    });
    selectedSlot = null;
    document.getElementById('detailSlot').textContent = '-';
}

function switchLantai(lt) {
    if (lt === 1) {
        document.getElementById('btnLt1').className = 'btn btn-primary font-weight-bold px-3';
        document.getElementById('btnLt2').className = 'btn btn-outline-secondary font-weight-bold px-3';
    } else {
        document.getElementById('btnLt1').className = 'btn btn-outline-secondary font-weight-bold px-3';
        document.getElementById('btnLt2').className = 'btn btn-primary font-weight-bold px-3';
    }
    resetSlot();
}
</script>

<?= $this->endSection() ?>