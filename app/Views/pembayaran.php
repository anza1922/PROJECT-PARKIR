<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<div class="container-fluid py-4" style="background-color: #f8f9fc; min-height: 100vh;">
    <div class="mb-4">
        <h2 class="text-dark font-weight-bold" style="color: #1a237e !important;">Selesaikan Pembayaran</h2>
        <p class="text-muted">Pilih metode cepat untuk menyelesaikan pembayaran parkir Anda</p>
    </div>

    <!-- Info Card -->
    <div class="card shadow-sm border-0 mb-5"
        style="border-radius: 15px; background: linear-gradient(135deg, #2841b8, #4527a0);">
        <div class="card-body p-1">
            <div class="bg-white" style="border-radius: 14px;">
                <div class="row text-center py-4 px-3 align-items-center">
                    <div class="col-md-2 col-6 mb-3 mb-md-0" style="border-right: 1px solid #e3e6f0;">
                        <div class="text-muted mb-2"><i class="fas fa-car fa-lg"></i></div>
                        <div class="small text-muted mb-1">Slot Parkir</div>
                        <div class="font-weight-bold text-dark">A2</div>
                    </div>
                    <div class="col-md-2 col-6 mb-3 mb-md-0" style="border-right: 1px solid #e3e6f0;">
                        <div class="text-muted mb-2"><i class="far fa-clock fa-lg"></i></div>
                        <div class="small text-muted mb-1">Durasi</div>
                        <div class="font-weight-bold text-dark">2 Jam 15 Menit</div>
                    </div>
                    <div class="col-md-2 col-6 mb-3 mb-md-0" style="border-right: 1px solid #e3e6f0;">
                        <div class="text-muted mb-2"><i class="far fa-calendar-alt fa-lg"></i></div>
                        <div class="small text-muted mb-1">Masuk</div>
                        <div class="font-weight-bold text-dark">10:30 WIB</div>
                    </div>
                    <div class="col-md-2 col-6 mb-3 mb-md-0" style="border-right: 1px solid #e3e6f0;">
                        <div class="text-muted mb-2"><i class="fas fa-sign-out-alt fa-lg"></i></div>
                        <div class="small text-muted mb-1">Keluar</div>
                        <div class="font-weight-bold text-dark">12:45 WIB</div>
                    </div>
                    <div class="col-md-4 col-12 mt-3 mt-md-0">
                        <div class="font-weight-bold text-dark mb-1">Total Bayar</div>
                        <div class="font-weight-bold mb-0" style="color: #2841b8; font-size: 2.5rem;">Rp 8.000</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Methods -->
    <h5 class="text-dark font-weight-bold mb-4">Pilih metode pembayaran yang tersedia</h5>

    <div class="row">
        <!-- QRIS -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100 py-3" data-toggle="modal" data-target="#modalQRIS"
                style="border-radius: 15px; cursor: pointer; transition: transform .2s;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
                <div class="card-body text-center d-flex flex-column">
                    <!-- Background lingkaran sedikit lebih terang -->
                    <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                        style="width: 80px; height: 80px; background-color: #e8f0fe;">
                        <img src="<?= base_url('img/qr.png') ?>"
                            style="width: 45px; height: 45px; color: #1a73e8; object-fit: contain;">
                    </div>
                    <h5 class="font-weight-bold text-dark mb-3">QRIS</h5>
                    <p class="text-muted small mb-4 flex-grow-1">Bayar praktis scan kode QR dari semua aplikasi
                        pembayaran</p>
                </div>
            </div>
        </div>

        <!-- Bank Transfer -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100 py-3"
                style="border-radius: 15px; cursor: pointer; transition: transform .2s;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
                <div class="card-body text-center d-flex flex-column">
                    <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                        style="width: 80px; height: 80px; background-color: #e6f4ea;">
                        <i class="fi fi-rr-bank" style="color: #1e8e3e; font-size: 2rem;"></i>
                    </div>
                    <h5 class="font-weight-bold text-dark mb-3">Transfer Bank</h5>
                    <p class="text-muted small mb-4 flex-grow-1">Transfer melalui virtual account dari bank pilihan</p>
                    <div class="d-flex justify-content-center align-items-center mt-auto">
                        <span class="font-weight-bold text-primary mr-3" style="font-size: 0.9rem;">BCA</span>
                        <span class="font-weight-bold text-primary mr-3" style="font-size: 0.9rem;">BRI</span>
                        <span class="font-weight-bold text-warning" style="font-size: 0.9rem;">mandiri</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- E-Wallet -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100 py-3"
                style="border-radius: 15px; cursor: pointer; transition: transform .2s;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
                <div class="card-body text-center d-flex flex-column">
                    <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                        style="width: 80px; height: 80px; background-color: #f3e5f5;">
                        <i class="fi fi-rr-wallet-arrow" style="color: #7b1fa2; font-size: 2rem;"></i>
                    </div>
                    <h5 class="font-weight-bold text-dark mb-3">E-Wallet</h5>
                    <p class="text-muted small mb-4 flex-grow-1">Bayar menggunakan e-wallet favorit Anda</p>
                    <div class="d-flex justify-content-center align-items-center mt-auto">
                        <span class="font-weight-bold mr-3" style="color: #4a2b82; font-size: 0.9rem;">OVO</span>
                        <span class="font-weight-bold text-info mr-3" style="font-size: 0.9rem;"><i
                                class="fas fa-circle" style="font-size: 8px;"></i> gopay</span>
                        <span class="font-weight-bold text-primary" style="font-size: 0.9rem;">DANA</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cash -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100 py-3"
                style="border-radius: 15px; cursor: pointer; transition: transform .2s;"
                onmouseover="this.style.transform='scale(1.02)'" onmouseout="this.style.transform='scale(1)'">
                <div class="card-body text-center d-flex flex-column">
                    <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-4"
                        style="width: 80px; height: 80px; background-color: #fff3e0;">
                        <i class="fi fi-tr-money-bill-wave"
                            style="color: #e65100; font-size: 2.5rem; line-height: 1;"></i>
                    </div>
                    <h5 class="font-weight-bold text-dark mb-3">Tunai di Lokasi</h5>
                    <p class="text-muted small mb-4 flex-grow-1">Bayar langsung di lokasi parkir</p>
                    <div class="d-flex justify-content-center align-items-center mt-auto opacity-50">
                        <i class="fas fa-store fa-2x text-muted"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Note -->
    <div class="alert d-flex align-items-center justify-content-between mt-4 border-0 shadow-sm" role="alert"
        style="background-color: #f0f4ff; border-radius: 10px;">
        <div class="d-flex align-items-center">
            <i class="fas fa-info-circle text-primary mr-3 fa-lg"></i>
            <span class="text-primary small font-weight-bold">Semua transaksi aman dan terenkripsi</span>
        </div>
        <div class="text-muted small">
            Powered by Parkir Anjay
        </div>
    </div>
</div>

<?= $this->endSection() ?>