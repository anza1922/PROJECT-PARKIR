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
            <div class="card border-0 shadow-sm h-100 py-3" data-toggle="modal" data-target="#modalBank"
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
            <div class="card border-0 shadow-sm h-100 py-3" data-toggle="modal" data-target="#modalEwallet"
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
            <div class="card border-0 shadow-sm h-100 py-3" data-toggle="modal" data-target="#modalTunai"
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

<!-- ==================== MODAL QRIS ==================== -->
<div class="modal fade" id="modalQRIS" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 shadow" style="border-radius:16px;overflow:hidden">
            <div class="modal-header border-0 text-white" style="background:linear-gradient(135deg,#1a73e8,#4285f4)">
                <h5 class="modal-title font-weight-bold"><i class="fas fa-qrcode mr-2"></i>Pembayaran QRIS</h5>
                <button type="button" class="close text-white" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body text-center py-4">
                <p class="text-muted small mb-3">Scan kode QR di bawah menggunakan aplikasi pembayaran Anda</p>
                <div class="mx-auto mb-3 d-flex align-items-center justify-content-center" style="width:200px;height:200px;background:#f8f9fc;border-radius:16px;border:2px dashed #d1d3e2">
                    <img src="<?= base_url('img/qr.png') ?>" style="width:160px;height:160px;object-fit:contain" alt="QR Code">
                </div>
                <div class="font-weight-bold text-dark mb-1" style="font-size:1.5rem">Rp 8.000</div>
                <p class="text-muted small">Berlaku selama <strong id="qrisTimer">05:00</strong> menit</p>
                <div class="d-flex justify-content-center gap-2 mt-3" style="gap:8px">
                    <span class="badge badge-light border px-3 py-2"><small>GoPay</small></span>
                    <span class="badge badge-light border px-3 py-2"><small>OVO</small></span>
                    <span class="badge badge-light border px-3 py-2"><small>DANA</small></span>
                    <span class="badge badge-light border px-3 py-2"><small>ShopeePay</small></span>
                </div>
            </div>
            <div class="modal-footer border-0 justify-content-center pt-0 pb-4">
                <button class="btn btn-primary btn-sm px-4 font-weight-bold" style="border-radius:50px" onclick="konfirmasiBayar('QRIS')">
                    <i class="fas fa-check-circle mr-1"></i>Sudah Bayar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ==================== MODAL BANK TRANSFER ==================== -->
<div class="modal fade" id="modalBank" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 shadow" style="border-radius:16px;overflow:hidden">
            <div class="modal-header border-0 text-white" style="background:linear-gradient(135deg,#1e8e3e,#34a853)">
                <h5 class="modal-title font-weight-bold"><i class="fas fa-university mr-2"></i>Transfer Bank</h5>
                <button type="button" class="close text-white" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body py-4">
                <p class="text-muted small mb-3 text-center">Pilih bank tujuan dan transfer sesuai nominal</p>
                <!-- Bank Options -->
                <div class="mb-3">
                    <div class="d-flex align-items-center p-3 mb-2 border rounded-lg" style="border-radius:12px!important;cursor:pointer;transition:all .2s" onclick="pilihBank(this,'BCA')" onmouseover="this.style.borderColor='#1a73e8'" onmouseout="if(!this.classList.contains('selected'))this.style.borderColor='#dee2e6'">
                        <span class="font-weight-bold text-primary mr-3" style="font-size:1rem;width:60px">BCA</span>
                        <div class="flex-grow-1">
                            <div class="font-weight-bold small text-dark">Bank Central Asia</div>
                            <div class="text-muted" style="font-size:.75rem">Virtual Account</div>
                        </div>
                        <i class="fas fa-chevron-right text-muted"></i>
                    </div>
                    <div class="d-flex align-items-center p-3 mb-2 border rounded-lg" style="border-radius:12px!important;cursor:pointer;transition:all .2s" onclick="pilihBank(this,'BRI')" onmouseover="this.style.borderColor='#1a73e8'" onmouseout="if(!this.classList.contains('selected'))this.style.borderColor='#dee2e6'">
                        <span class="font-weight-bold text-primary mr-3" style="font-size:1rem;width:60px">BRI</span>
                        <div class="flex-grow-1">
                            <div class="font-weight-bold small text-dark">Bank Rakyat Indonesia</div>
                            <div class="text-muted" style="font-size:.75rem">Virtual Account</div>
                        </div>
                        <i class="fas fa-chevron-right text-muted"></i>
                    </div>
                    <div class="d-flex align-items-center p-3 border rounded-lg" style="border-radius:12px!important;cursor:pointer;transition:all .2s" onclick="pilihBank(this,'Mandiri')" onmouseover="this.style.borderColor='#1a73e8'" onmouseout="if(!this.classList.contains('selected'))this.style.borderColor='#dee2e6'">
                        <span class="font-weight-bold mr-3" style="font-size:1rem;width:60px;color:#f0ab00">mandiri</span>
                        <div class="flex-grow-1">
                            <div class="font-weight-bold small text-dark">Bank Mandiri</div>
                            <div class="text-muted" style="font-size:.75rem">Virtual Account</div>
                        </div>
                        <i class="fas fa-chevron-right text-muted"></i>
                    </div>
                </div>
                <!-- VA Number (hidden initially) -->
                <div id="vaDetail" style="display:none">
                    <hr>
                    <div class="text-center">
                        <p class="text-muted small mb-2">Nomor Virtual Account <strong id="vaBank"></strong></p>
                        <div class="bg-light p-3 rounded d-flex align-items-center justify-content-center" style="border-radius:12px!important">
                            <span class="font-weight-bold text-dark mr-3" style="font-size:1.3rem;letter-spacing:2px" id="vaNumber">8800 1234 5678 9012</span>
                            <button class="btn btn-sm btn-outline-primary" style="border-radius:50px;font-size:.7rem" onclick="salinVA()"><i class="fas fa-copy mr-1"></i>Salin</button>
                        </div>
                        <div class="font-weight-bold mt-3" style="font-size:1.3rem;color:#1e8e3e">Rp 8.000</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 justify-content-center pt-0 pb-4">
                <button class="btn btn-success btn-sm px-4 font-weight-bold" style="border-radius:50px" onclick="konfirmasiBayar('Transfer Bank')">
                    <i class="fas fa-check-circle mr-1"></i>Konfirmasi Pembayaran
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ==================== MODAL E-WALLET ==================== -->
<div class="modal fade" id="modalEwallet" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 shadow" style="border-radius:16px;overflow:hidden">
            <div class="modal-header border-0 text-white" style="background:linear-gradient(135deg,#7b1fa2,#9c27b0)">
                <h5 class="modal-title font-weight-bold"><i class="fas fa-wallet mr-2"></i>E-Wallet</h5>
                <button type="button" class="close text-white" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body py-4">
                <p class="text-muted small mb-3 text-center">Pilih e-wallet untuk pembayaran</p>
                <div class="mb-3">
                    <div class="d-flex align-items-center p-3 mb-2 border rounded-lg" style="border-radius:12px!important;cursor:pointer;transition:all .2s" onclick="pilihEwallet(this,'GoPay')" onmouseover="this.style.borderColor='#00aa13'" onmouseout="if(!this.classList.contains('selected'))this.style.borderColor='#dee2e6'">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mr-3" style="width:40px;height:40px;background:#e8f5e9">
                            <i class="fas fa-circle" style="color:#00aa13;font-size:.5rem"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="font-weight-bold small text-dark">GoPay</div>
                            <div class="text-muted" style="font-size:.75rem">Saldo & PayLater</div>
                        </div>
                        <i class="fas fa-chevron-right text-muted"></i>
                    </div>
                    <div class="d-flex align-items-center p-3 mb-2 border rounded-lg" style="border-radius:12px!important;cursor:pointer;transition:all .2s" onclick="pilihEwallet(this,'OVO')" onmouseover="this.style.borderColor='#4a2b82'" onmouseout="if(!this.classList.contains('selected'))this.style.borderColor='#dee2e6'">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mr-3" style="width:40px;height:40px;background:#ede7f6">
                            <span class="font-weight-bold" style="color:#4a2b82;font-size:.7rem">OVO</span>
                        </div>
                        <div class="flex-grow-1">
                            <div class="font-weight-bold small text-dark">OVO</div>
                            <div class="text-muted" style="font-size:.75rem">OVO Cash</div>
                        </div>
                        <i class="fas fa-chevron-right text-muted"></i>
                    </div>
                    <div class="d-flex align-items-center p-3 border rounded-lg" style="border-radius:12px!important;cursor:pointer;transition:all .2s" onclick="pilihEwallet(this,'DANA')" onmouseover="this.style.borderColor='#108ee9'" onmouseout="if(!this.classList.contains('selected'))this.style.borderColor='#dee2e6'">
                        <div class="rounded-circle d-flex align-items-center justify-content-center mr-3" style="width:40px;height:40px;background:#e3f2fd">
                            <span class="font-weight-bold" style="color:#108ee9;font-size:.7rem">DANA</span>
                        </div>
                        <div class="flex-grow-1">
                            <div class="font-weight-bold small text-dark">DANA</div>
                            <div class="text-muted" style="font-size:.75rem">Saldo DANA</div>
                        </div>
                        <i class="fas fa-chevron-right text-muted"></i>
                    </div>
                </div>
                <div id="ewalletDetail" style="display:none">
                    <hr>
                    <div class="text-center">
                        <p class="small text-muted">Anda akan diarahkan ke <strong id="ewalletName"></strong></p>
                        <div class="font-weight-bold" style="font-size:1.3rem;color:#7b1fa2">Rp 8.000</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 justify-content-center pt-0 pb-4">
                <button class="btn btn-sm px-4 font-weight-bold text-white" style="border-radius:50px;background:#7b1fa2" onclick="konfirmasiBayar('E-Wallet')">
                    <i class="fas fa-check-circle mr-1"></i>Bayar Sekarang
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ==================== MODAL TUNAI ==================== -->
<div class="modal fade" id="modalTunai" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 shadow" style="border-radius:16px;overflow:hidden">
            <div class="modal-header border-0 text-white" style="background:linear-gradient(135deg,#e65100,#ff6d00)">
                <h5 class="modal-title font-weight-bold"><i class="fas fa-money-bill-wave mr-2"></i>Tunai di Lokasi</h5>
                <button type="button" class="close text-white" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body text-center py-4">
                <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width:80px;height:80px;background:#fff3e0">
                    <i class="fas fa-store" style="color:#e65100;font-size:2rem"></i>
                </div>
                <h5 class="font-weight-bold text-dark">Bayar di Pos Parkir</h5>
                <p class="text-muted small mb-3">Tunjukkan kode berikut ke petugas parkir</p>
                <div class="bg-light p-3 rounded mx-auto" style="border-radius:12px!important;max-width:220px">
                    <div class="font-weight-bold text-dark" style="font-size:1.8rem;letter-spacing:4px">PKR-2847</div>
                    <div class="text-muted small mt-1">Kode Transaksi</div>
                </div>
                <div class="font-weight-bold mt-3" style="font-size:1.3rem;color:#e65100">Rp 8.000</div>
                <p class="text-muted small mt-2"><i class="fas fa-info-circle mr-1"></i>Siapkan uang pas untuk kemudahan transaksi</p>
            </div>
            <div class="modal-footer border-0 justify-content-center pt-0 pb-4">
                <button class="btn btn-sm px-4 font-weight-bold text-white" style="border-radius:50px;background:#e65100" onclick="konfirmasiBayar('Tunai')">
                    <i class="fas fa-check-circle mr-1"></i>Konfirmasi
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ==================== MODAL SUKSES ==================== -->
<div class="modal fade" id="modalSukses" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content border-0 shadow text-center" style="border-radius:16px;overflow:hidden">
            <div class="modal-body py-5">
                <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width:70px;height:70px;background:#d4edda">
                    <i class="fas fa-check" style="color:#1cc88a;font-size:2rem"></i>
                </div>
                <h5 class="font-weight-bold text-dark mb-2">Pembayaran Berhasil!</h5>
                <p class="text-muted small mb-0" id="suksesMsg">Transaksi via QRIS telah dikonfirmasi</p>
            </div>
            <div class="modal-footer border-0 justify-content-center pt-0 pb-4">
                <button class="btn btn-success btn-sm px-4 font-weight-bold" style="border-radius:50px" data-dismiss="modal">
                    <i class="fas fa-thumbs-up mr-1"></i>Selesai
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ==================== SCRIPTS ==================== -->
<script>
function pilihBank(el, nama) {
    document.querySelectorAll('#modalBank .rounded-lg').forEach(function(e) {
        e.classList.remove('selected');
        e.style.borderColor = '#dee2e6';
        e.style.background = '#fff';
    });
    el.classList.add('selected');
    el.style.borderColor = '#1e8e3e';
    el.style.background = '#f0fff4';
    document.getElementById('vaBank').textContent = nama;
    document.getElementById('vaDetail').style.display = 'block';
}

function pilihEwallet(el, nama) {
    document.querySelectorAll('#modalEwallet .rounded-lg').forEach(function(e) {
        e.classList.remove('selected');
        e.style.borderColor = '#dee2e6';
        e.style.background = '#fff';
    });
    el.classList.add('selected');
    el.style.borderColor = '#7b1fa2';
    el.style.background = '#faf5ff';
    document.getElementById('ewalletName').textContent = nama;
    document.getElementById('ewalletDetail').style.display = 'block';
}

function salinVA() {
    var va = document.getElementById('vaNumber').textContent;
    navigator.clipboard.writeText(va.replace(/\s/g, ''));
    alert('Nomor VA berhasil disalin!');
}

function konfirmasiBayar(metode) {
    // Close all payment modals
    $('.modal').modal('hide');
    setTimeout(function() {
        document.getElementById('suksesMsg').textContent = 'Transaksi via ' + metode + ' telah dikonfirmasi';
        $('#modalSukses').modal('show');
    }, 500);
}

// QRIS countdown timer
var qrisTime = 300;
setInterval(function() {
    if (qrisTime > 0) {
        qrisTime--;
        var m = Math.floor(qrisTime / 60);
        var s = qrisTime % 60;
        var el = document.getElementById('qrisTimer');
        if (el) el.textContent = (m < 10 ? '0' : '') + m + ':' + (s < 10 ? '0' : '') + s;
    }
}, 1000);
</script>

<?= $this->endSection() ?>