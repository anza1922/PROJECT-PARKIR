<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Page Heading -->
<div class="mb-4">
    <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Riwayat Parkir</h1>
    <p class="mb-0 text-muted small">Lihat semua aktivitas parkir kendaraan Anda</p>
</div>

<!-- Filter Row -->
<div class="card shadow mb-4 border-0">
    <div class="card-header py-3 bg-white border-bottom d-flex align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">
            <i class="fas fa-filter mr-2"></i>Filter Riwayat
        </h6>
    </div>
    <div class="card-body">
        <form method="GET" action="<?= site_url('/riwayat') ?>">
            <div class="form-row align-items-end">
                <div class="col-md-3 mb-3">
                    <label class="small font-weight-bold text-muted text-uppercase">Tanggal Mulai</label>
                    <input type="date" class="form-control form-control-sm" name="dari" id="filterDari">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="small font-weight-bold text-muted text-uppercase">Tanggal Akhir</label>
                    <input type="date" class="form-control form-control-sm" name="sampai" id="filterSampai">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="small font-weight-bold text-muted text-uppercase">Status</label>
                    <select class="form-control form-control-sm" name="status" id="filterStatus">
                        <option value="">Semua Status</option>
                        <option value="selesai">Selesai</option>
                        <option value="aktif">Aktif</option>
                        <option value="dibatalkan">Dibatalkan</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <button type="submit" class="btn btn-primary btn-sm btn-block">
                        <i class="fas fa-search mr-1"></i> Cari
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Summary Cards -->
<div class="row mb-4">
    <!-- Total Kunjungan -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2 border-0" style="border-left: 4px solid #4e73df !important;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Kunjungan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">24 Kali</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-history fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Durasi -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2 border-0" style="border-left: 4px solid #1cc88a !important;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Durasi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">48 Jam 30 Mnt</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clock fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Biaya -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2 border-0" style="border-left: 4px solid #36b9cc !important;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Biaya</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 120.000</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-wallet fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Riwayat Table Card -->
<div class="card shadow mb-4 border-0">
    <div class="card-header py-3 bg-white border-bottom d-flex align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">
            <i class="fas fa-list-alt mr-2"></i>Daftar Riwayat Parkir
        </h6>
        <small class="text-muted">Menampilkan data terbaru</small>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-bordered table-hover mb-0" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center align-middle" style="width: 45px;">#</th>
                        <th class="align-middle">Waktu Masuk</th>
                        <th class="align-middle">Waktu Keluar</th>
                        <th class="align-middle">Lokasi / Slot</th>
                        <th class="text-center align-middle">Kendaraan</th>
                        <th class="text-center align-middle">Durasi</th>
                        <th class="text-right align-middle">Biaya</th>
                        <th class="text-center align-middle">Status</th>
                        <th class="text-center align-middle">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td class="text-center align-middle text-muted small">1</td>
                        <td class="align-middle">
                            <div class="font-weight-bold text-gray-800">04 Mei 2026</div>
                            <div class="text-muted small">08:15 WIB</div>
                        </td>
                        <td class="align-middle">
                            <div class="font-weight-bold text-gray-800">04 Mei 2026</div>
                            <div class="text-muted small">10:30 WIB</div>
                        </td>
                        <td class="align-middle">
                            <div class="font-weight-bold text-gray-800">Zona A</div>
                            <div class="text-muted small">Slot A3 &mdash; Lantai 1</div>
                        </td>
                        <td class="text-center align-middle">
                            <i class="fas fa-car text-primary"></i>
                            <div class="small font-weight-bold text-gray-800 mt-1">Mobil</div>
                        </td>
                        <td class="text-center align-middle">
                            <span class="badge badge-light border font-weight-bold">2j 15m</span>
                        </td>
                        <td class="text-right align-middle font-weight-bold text-gray-800">Rp 6.750</td>
                        <td class="text-center align-middle">
                            <span class="badge badge-success px-2 py-1">Selesai</span>
                        </td>
                        <td class="text-center align-middle">
                            <button class="btn btn-outline-primary btn-sm" onclick="lihatDetail(1)" title="Lihat Detail">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- Row 2 -->
                    <tr>
                        <td class="text-center align-middle text-muted small">2</td>
                        <td class="align-middle">
                            <div class="font-weight-bold text-gray-800">03 Mei 2026</div>
                            <div class="text-muted small">13:00 WIB</div>
                        </td>
                        <td class="align-middle">
                            <div class="font-weight-bold text-gray-800">03 Mei 2026</div>
                            <div class="text-muted small">15:45 WIB</div>
                        </td>
                        <td class="align-middle">
                            <div class="font-weight-bold text-gray-800">Zona B</div>
                            <div class="text-muted small">Slot B2 &mdash; Lantai 1</div>
                        </td>
                        <td class="text-center align-middle">
                            <i class="fas fa-bicycle text-success"></i>
                            <div class="small font-weight-bold text-gray-800 mt-1">Motor</div>
                        </td>
                        <td class="text-center align-middle">
                            <span class="badge badge-light border font-weight-bold">2j 45m</span>
                        </td>
                        <td class="text-right align-middle font-weight-bold text-gray-800">Rp 4.000</td>
                        <td class="text-center align-middle">
                            <span class="badge badge-success px-2 py-1">Selesai</span>
                        </td>
                        <td class="text-center align-middle">
                            <button class="btn btn-outline-primary btn-sm" onclick="lihatDetail(2)" title="Lihat Detail">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- Row 3 - Aktif -->
                    <tr class="table-warning">
                        <td class="text-center align-middle text-muted small">3</td>
                        <td class="align-middle">
                            <div class="font-weight-bold text-gray-800">04 Mei 2026</div>
                            <div class="text-muted small">20:00 WIB</div>
                        </td>
                        <td class="align-middle">
                            <span class="text-muted small font-italic">Masih parkir...</span>
                        </td>
                        <td class="align-middle">
                            <div class="font-weight-bold text-gray-800">Zona A</div>
                            <div class="text-muted small">Slot A1 &mdash; Lantai 1</div>
                        </td>
                        <td class="text-center align-middle">
                            <i class="fas fa-car text-primary"></i>
                            <div class="small font-weight-bold text-gray-800 mt-1">Mobil</div>
                        </td>
                        <td class="text-center align-middle">
                            <span class="badge badge-warning border text-dark font-weight-bold">
                                <i class="fas fa-spinner fa-spin fa-xs mr-1"></i>Live
                            </span>
                        </td>
                        <td class="text-right align-middle font-weight-bold text-gray-800">&mdash;</td>
                        <td class="text-center align-middle">
                            <span class="badge badge-warning text-dark px-2 py-1">Aktif</span>
                        </td>
                        <td class="text-center align-middle">
                            <button class="btn btn-outline-warning btn-sm" onclick="lihatDetail(3)" title="Lihat Detail">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- Row 4 -->
                    <tr>
                        <td class="text-center align-middle text-muted small">4</td>
                        <td class="align-middle">
                            <div class="font-weight-bold text-gray-800">01 Mei 2026</div>
                            <div class="text-muted small">09:30 WIB</div>
                        </td>
                        <td class="align-middle">
                            <div class="font-weight-bold text-gray-800">01 Mei 2026</div>
                            <div class="text-muted small">11:00 WIB</div>
                        </td>
                        <td class="align-middle">
                            <div class="font-weight-bold text-gray-800">Zona B</div>
                            <div class="text-muted small">Slot B5 &mdash; Lantai 1</div>
                        </td>
                        <td class="text-center align-middle">
                            <i class="fas fa-bicycle text-success"></i>
                            <div class="small font-weight-bold text-gray-800 mt-1">Motor</div>
                        </td>
                        <td class="text-center align-middle">
                            <span class="badge badge-light border font-weight-bold">1j 30m</span>
                        </td>
                        <td class="text-right align-middle font-weight-bold text-gray-800">Rp 2.000</td>
                        <td class="text-center align-middle">
                            <span class="badge badge-success px-2 py-1">Selesai</span>
                        </td>
                        <td class="text-center align-middle">
                            <button class="btn btn-outline-primary btn-sm" onclick="lihatDetail(4)" title="Lihat Detail">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- Row 5 - Dibatalkan -->
                    <tr>
                        <td class="text-center align-middle text-muted small">5</td>
                        <td class="align-middle">
                            <div class="font-weight-bold text-gray-800">28 Apr 2026</div>
                            <div class="text-muted small">14:20 WIB</div>
                        </td>
                        <td class="align-middle">
                            <span class="text-muted small">&mdash;</span>
                        </td>
                        <td class="align-middle">
                            <div class="font-weight-bold text-gray-800">Zona A</div>
                            <div class="text-muted small">Slot A5 &mdash; Lantai 1</div>
                        </td>
                        <td class="text-center align-middle">
                            <i class="fas fa-car text-primary"></i>
                            <div class="small font-weight-bold text-gray-800 mt-1">Mobil</div>
                        </td>
                        <td class="text-center align-middle">
                            <span class="badge badge-light border text-muted">&mdash;</span>
                        </td>
                        <td class="text-right align-middle font-weight-bold text-muted">Rp 0</td>
                        <td class="text-center align-middle">
                            <span class="badge badge-danger px-2 py-1">Dibatalkan</span>
                        </td>
                        <td class="text-center align-middle">
                            <button class="btn btn-outline-secondary btn-sm" onclick="lihatDetail(5)" title="Lihat Detail">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer bg-white py-2">
        <ul class="pagination pagination-sm mb-0">
            <li class="page-item disabled"><a class="page-link" href="#">&laquo; Sebelumnya</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Selanjutnya &raquo;</a></li>
        </ul>
    </div>
</div>

<!-- Modal Detail -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="detailModalLabel">
                    <i class="fas fa-parking mr-2"></i>Detail Parkir
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-4 py-3" id="detailModalBody">
                <div class="row no-gutters mb-3 align-items-center">
                    <div class="col-5 text-xs font-weight-bold text-gray-600 text-uppercase">Lokasi</div>
                    <div class="col-7 font-weight-bold text-gray-800" id="d-lokasi">Zona A - Slot A3</div>
                </div>
                <hr class="my-2">
                <div class="row no-gutters mb-2 align-items-center">
                    <div class="col-5 text-xs font-weight-bold text-gray-600 text-uppercase">Waktu Masuk</div>
                    <div class="col-7 text-gray-800" id="d-masuk">04 Mei 2026 · 08:15 WIB</div>
                </div>
                <div class="row no-gutters mb-2 align-items-center">
                    <div class="col-5 text-xs font-weight-bold text-gray-600 text-uppercase">Waktu Keluar</div>
                    <div class="col-7 text-gray-800" id="d-keluar">04 Mei 2026 · 10:30 WIB</div>
                </div>
                <div class="row no-gutters mb-2 align-items-center">
                    <div class="col-5 text-xs font-weight-bold text-gray-600 text-uppercase">Durasi</div>
                    <div class="col-7 text-gray-800" id="d-durasi">2 jam 15 menit</div>
                </div>
                <hr class="my-2">
                <div class="row no-gutters mb-2 align-items-center">
                    <div class="col-5 text-xs font-weight-bold text-gray-600 text-uppercase">Kendaraan</div>
                    <div class="col-7 text-gray-800" id="d-kendaraan">Mobil</div>
                </div>
                <div class="row no-gutters mb-2 align-items-center">
                    <div class="col-5 text-xs font-weight-bold text-gray-600 text-uppercase">Total Biaya</div>
                    <div class="col-7 font-weight-bold text-primary" id="d-biaya">Rp 6.750</div>
                </div>
                <div class="row no-gutters mb-1 align-items-center">
                    <div class="col-5 text-xs font-weight-bold text-gray-600 text-uppercase">Status</div>
                    <div class="col-7" id="d-status"><span class="badge badge-success">Selesai</span></div>
                </div>
            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
const detailData = {
    1: { lokasi: 'Zona A - Slot A3, Lantai 1', masuk: '04 Mei 2026 · 08:15 WIB', keluar: '04 Mei 2026 · 10:30 WIB', durasi: '2 jam 15 menit', kendaraan: '<i class="fas fa-car text-primary mr-1"></i> Mobil', biaya: 'Rp 6.750', status: '<span class="badge badge-success">Selesai</span>' },
    2: { lokasi: 'Zona B - Slot B2, Lantai 1', masuk: '03 Mei 2026 · 13:00 WIB', keluar: '03 Mei 2026 · 15:45 WIB', durasi: '2 jam 45 menit', kendaraan: '<i class="fas fa-bicycle text-success mr-1"></i> Motor', biaya: 'Rp 4.000', status: '<span class="badge badge-success">Selesai</span>' },
    3: { lokasi: 'Zona A - Slot A1, Lantai 1', masuk: '04 Mei 2026 · 20:00 WIB', keluar: '<span class="text-warning font-italic">Masih parkir...</span>', durasi: '<span class="text-warning">Live <i class="fas fa-spinner fa-spin fa-xs"></i></span>', kendaraan: '<i class="fas fa-car text-primary mr-1"></i> Mobil', biaya: '—', status: '<span class="badge badge-warning text-dark">Aktif</span>' },
    4: { lokasi: 'Zona B - Slot B5, Lantai 1', masuk: '01 Mei 2026 · 09:30 WIB', keluar: '01 Mei 2026 · 11:00 WIB', durasi: '1 jam 30 menit', kendaraan: '<i class="fas fa-bicycle text-success mr-1"></i> Motor', biaya: 'Rp 2.000', status: '<span class="badge badge-success">Selesai</span>' },
    5: { lokasi: 'Zona A - Slot A5, Lantai 1', masuk: '28 Apr 2026 · 14:20 WIB', keluar: '—', durasi: '—', kendaraan: '<i class="fas fa-car text-primary mr-1"></i> Mobil', biaya: 'Rp 0', status: '<span class="badge badge-danger">Dibatalkan</span>' },
};

function lihatDetail(id) {
    const d = detailData[id];
    if (!d) return;
    document.getElementById('d-lokasi').textContent   = d.lokasi;
    document.getElementById('d-masuk').textContent    = d.masuk;
    document.getElementById('d-keluar').innerHTML     = d.keluar;
    document.getElementById('d-durasi').innerHTML     = d.durasi;
    document.getElementById('d-kendaraan').innerHTML  = d.kendaraan;
    document.getElementById('d-biaya').textContent    = d.biaya;
    document.getElementById('d-status').innerHTML     = d.status;
    $('#detailModal').modal('show');
}
</script>

<?= $this->endSection() ?>
