<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<!-- Floating Stat Cards Row -->
<div class="row mb-2">
    <!-- Total Kendaraan -->
    <!-- <div class="col-md-3 mb-3">
        <div class="card info-card shadow-sm h-100 border-0">
            <div class="card-body">
                <h6 class="card-title text-uppercase text-muted fw-bold small p-0 mt-2 mb-2">Total Kendaraan</h6>
                <div class="d-flex align-items-center">
                    <div class="w-100">
                        <h2 class="fw-bolder mb-1">1,284</h2>
                        <div class="d-flex align-items-center mt-3">
                            <span class="badge bg-success bg-opacity-10 text-success fw-bold p-2"><i class="bi bi-arrow-up-short"></i> 14% naik</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Slot Terisi -->
    <div class="col-12 col-md-6 mb-3">
        <div class="card info-card shadow-sm h-100 border-0">
            <div class="card-body">
                <h6 class="card-title text-uppercase text-muted fw-bold small p-0 mt-2 mb-2">Slot Terisi</h6>
                <div class="d-flex align-items-center w-100">
                    <div class="w-100">
                        <h2 class="fw-bolder mb-2">72%</h2>
                        <div class="progress mt-3" style="height: 8px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 72%" aria-valuenow="72"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slot Kosong -->
    <div class="col-12 col-md-6 mb-3">
        <div class="card info-card shadow-sm h-100 border-0">
            <div class="card-body">
                <h6 class="card-title text-uppercase text-muted fw-bold small p-0 mt-2 mb-2">Slot Kosong</h6>
                <div class="d-flex align-items-center w-100">
                    <div class="w-100">
                        <h2 class="fw-bolder mb-2">18%</h2>
                        <div class="progress mt-3" style="height: 8px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 18%"
                                aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pendapatan Hari Ini -->
    <!-- <div class="col-md-6 mb-3">
        <div class="card info-card text-white shadow-sm h-100 border-0" style="background: linear-gradient(135deg, #4F46E5 0%, #1e3a8a 100%);">
            <div class="card-body d-flex justify-content-between align-items-center h-100">
                <div>
                    <h6 class="card-title text-uppercase text-white-50 fw-bold small p-0 mt-2 mb-2">Pendapatan Hari Ini</h6>
                    <h2 class="fw-bolder text-white mb-1">Rp 5.240.000</h2>
                    <div class="d-flex align-items-center text-white-50 small mt-3 fw-bold">
                        <i class="bi bi-check-circle me-1"></i> Target tercapai
                    </div>
                </div>
                <div class="d-none d-sm-flex align-items-center justify-content-center bg-white bg-opacity-25 rounded-3 p-3 ms-3" style="transform: rotate(12deg); width: 64px; height: 64px;">
                    <i class="bi bi-wallet2 fs-2 text-white"></i>
                </div>
            </div>
        </div>
    </div> -->
</div>

<div class="row">
    <!-- Park Map Section -->
    <div class="col-lg-12 mb-4">
        <div class="card shadow-sm h-100 border-0">
            <div class="card-header bg-white d-flex justify-content-between align-items-center py-3 border-bottom">
                <div>
                    <h5 class="fw-bolder mb-1">Peta Slot Parkir Logis</h5>
                    <small class="text-muted fw-semibold">Live monitoring Lantai 1 (A & B)</small>
                </div>
                <div class="btn-group btn-group-sm" role="group">
                    <button type="button" class="btn btn-outline-primary active fw-bold px-3 py-1">Lantai 1</button>
                    <button type="button" class="btn btn-outline-secondary fw-bold px-3 py-1">Lantai 2</button>
                </div>
            </div>

            <div class="card-body bg-light p-4">
                <!-- Zone A -->
                <div class="mb-4">
                    <h6 class="text-muted text-uppercase fw-bolder mb-3 d-flex align-items-center">
                        <span class="badge border border-4 border-primary rounded-circle bg-primary p-1 me-2"
                            style="--bs-border-opacity: .2;"></span> Zona A (Premium)
                    </h6>
                    <div class="row row-cols-2 row-cols-sm-4 row-cols-md-6 g-3">
                        <div class="col">
                            <div class="bg-white border rounded-3 d-flex align-items-center justify-content-center shadow-sm"
                                style="height: 80px; cursor: pointer;">
                                <span class="fw-bold text-muted">A1</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="bg-white border border-danger border-2 rounded-3 d-flex flex-column align-items-center justify-content-center shadow-sm text-danger"
                                style="height: 80px; cursor: not-allowed;">
                                <i class="bi bi-car-front fs-5 mb-1"></i>
                                <small class="fw-bold" style="font-size: 11px;">A2</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="bg-white border border-danger border-2 rounded-3 d-flex flex-column align-items-center justify-content-center shadow-sm text-danger"
                                style="height: 80px; cursor: not-allowed;">
                                <i class="bi bi-car-front fs-5 mb-1"></i>
                                <small class="fw-bold" style="font-size: 11px;">A3</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="bg-white border rounded-3 d-flex align-items-center justify-content-center shadow-sm"
                                style="height: 80px; cursor: pointer;">
                                <span class="fw-bold text-muted">A4</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="bg-white border rounded-3 d-flex align-items-center justify-content-center shadow-sm"
                                style="height: 80px; cursor: pointer;">
                                <span class="fw-bold text-muted">A5</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="bg-white border-secondary rounded-3 d-flex flex-column align-items-center justify-content-center text-secondary"
                                style="height: 80px; border-style: dashed !important; border-width: 2px !important; cursor: not-allowed;">
                                <i class="bi bi-tools fs-6 opacity-75 mb-1"></i>
                                <small class="fw-bold" style="font-size: 11px;">MTO</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Zone B -->
                <div>
                    <h6 class="text-muted text-uppercase fw-bolder mb-3 d-flex align-items-center">
                        <span class="badge border border-4 border-success rounded-circle bg-success p-1 me-2"
                            style="--bs-border-opacity: .2;"></span> Zona B (Reguler)
                    </h6>
                    <div class="row row-cols-2 row-cols-sm-4 row-cols-md-6 g-3">
                        <div class="col">
                            <div class="bg-white border rounded-3 d-flex align-items-center justify-content-center shadow-sm"
                                style="height: 80px; cursor: pointer;">
                                <span class="fw-bold text-muted">B1</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="bg-white border border-danger border-2 rounded-3 d-flex flex-column align-items-center justify-content-center shadow-sm text-danger"
                                style="height: 80px; cursor: not-allowed;">
                                <i class="bi bi-bicycle fs-5 mb-1"></i>
                                <small class="fw-bold" style="font-size: 11px;">B2</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="bg-white border rounded-3 d-flex align-items-center justify-content-center shadow-sm"
                                style="height: 80px; cursor: pointer;">
                                <span class="fw-bold text-muted">B3</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="bg-white border rounded-3 d-flex align-items-center justify-content-center shadow-sm"
                                style="height: 80px; cursor: pointer;">
                                <span class="fw-bold text-muted">B4</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="bg-white border rounded-3 d-flex align-items-center justify-content-center shadow-sm"
                                style="height: 80px; cursor: pointer;">
                                <span class="fw-bold text-muted">B5</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="bg-white border rounded-3 d-flex align-items-center justify-content-center shadow-sm"
                                style="height: 80px; cursor: pointer;">
                                <span class="fw-bold text-muted">B6</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer bg-white d-flex justify-content-center gap-4 py-3 border-top">
                <div class="d-flex align-items-center gap-2 small fw-bold text-muted">
                    <span class="border rounded-circle bg-white border-2"
                        style="width: 12px; height: 12px; display: inline-block;"></span> &emsp; Tersedia &emsp;
                </div>
                <div class="d-flex align-items-center gap-2 small fw-bold text-muted">
                    <span class="border border-danger border-2 rounded-circle bg-white"
                        style="width: 12px; height: 12px; display: inline-block;"></span> &emsp; Terisi &emsp;
                </div>
                <div class="d-flex align-items-center gap-2 small fw-bold text-muted">
                    <span class="border border-primary border-2 rounded-circle bg-primary bg-opacity-10"
                        style="width: 12px; height: 12px; display: inline-block;"></span> &emsp; Dipesan &emsp;
                </div>
            </div>
        </div>
    </div>

    <!-- Live Transactions Column -->
    <!-- <div class="col-lg-4 mb-4">
        <div class="card shadow-sm h-100 border-0">
            <div class="card-header bg-white d-flex justify-content-between align-items-center py-3 border-bottom">
                <h5 class="fw-bolder mb-0 d-flex align-items-center gap-2">
                   <div class="spinner-grow bg-success" style="width: 10px; height: 10px;" role="status">
                     <span class="visually-hidden"></span>
                   </div>
                     &emsp; Aktivitas Teras
                </h5>
            </div>
            
            <div class="card-body bg-light p-4 d-flex flex-column gap-3">
                
                <div class="bg-white p-3 rounded-4 border shadow-sm transition">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="badge bg-primary bg-opacity-10 text-primary text-uppercase" style="font-size: 10px; letter-spacing: 1px;">Masuk</span>
                        <small class="text-muted" style="font-size: 12px;">Baru saja</small>
                    </div>
                    <p class="fw-bold mb-0 text-dark" style="font-family: monospace; font-size: 15px;">B 1234 ABC</p>
                    <small class="text-muted d-block mt-1 fw-semibold" style="font-size: 12px;">Mobil - Gate Utara 1</small>
                </div>

                <div class="bg-white p-3 rounded-4 border shadow-sm transition">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="badge bg-success bg-opacity-10 text-success text-uppercase" style="font-size: 10px; letter-spacing: 1px;">Keluar</span>
                        <small class="text-muted" style="font-size: 12px;">2 mnt yll</small>
                    </div>
                    <p class="fw-bold mb-0 text-dark" style="font-family: monospace; font-size: 15px;">D 889 UI</p>
                    <small class="text-muted d-block mt-1 fw-semibold" style="font-size: 12px;">Motor - Pembayaran: QRIS</small>
                </div>

                <div class="bg-white p-3 rounded-4 border shadow-sm transition">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="badge bg-primary bg-opacity-10 text-primary text-uppercase" style="font-size: 10px; letter-spacing: 1px;">Masuk</span>
                        <small class="text-muted" style="font-size: 12px;">8 mnt yll</small>
                    </div>
                    <p class="fw-bold mb-0 text-dark" style="font-family: monospace; font-size: 15px;">F 2021 XYZ</p>
                    <small class="text-muted d-block mt-1 fw-semibold" style="font-size: 12px;">Mobil - Gate Selatan</small>
                </div>
                
                 <div class="bg-white p-3 rounded-4 border shadow-sm my-auto opacity-75">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <span class="badge bg-danger bg-opacity-10 text-danger text-uppercase" style="font-size: 10px; letter-spacing: 1px;">Gagal</span>
                        <small class="text-muted" style="font-size: 12px;">15 mnt yll</small>
                    </div>
                    <p class="fw-bold mb-0 text-dark" style="font-family: monospace; font-size: 15px;">Tidak Terbaca</p>
                    <small class="text-muted d-block mt-1 fw-semibold" style="font-size: 12px;">CCTV Gate Utara 2 Error</small>
                </div>

            </div>
            
            <a href="<?= site_url('/riwayat') ?>" class="card-footer bg-white text-center fw-bold text-primary text-decoration-none py-3 border-top hover-bg-light">
                Lihat Semua Riwayat
            </a>
        </div>
    </div> -->
</div>

<?= $this->endSection() ?>