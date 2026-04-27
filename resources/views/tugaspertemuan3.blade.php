<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MedikaCare — Dashboard Rumah Sakit</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
    rel="stylesheet" />
  <style>
    :root {
      --teal: #0d9488;
      --teal-lt: #ccfbf1;
      --blue: #2563eb;
      --blue-lt: #dbeafe;
      --rose: #e11d48;
      --rose-lt: #ffe4e6;
      --amber: #d97706;
      --amber-lt: #fef3c7;
      --violet: #7c3aed;
      --violet-lt: #ede9fe;
      --slate: #1e293b;
      --muted: #64748b;
      --border: #e2e8f0;
      --bg: #f1f5f9;
    }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background: var(--bg);
      color: var(--slate);
    }

    .navbar { background: var(--slate); }
    .navbar-brand { color: #2dd4bf !important; font-weight: 800; font-size: 1.2rem; }
    .nav-link { color: #94a3b8 !important; font-weight: 600; }
    .nav-link:hover { color: #fff !important; }

    .card-section {
      background: #fff;
      border-radius: 16px;
      border: 1px solid var(--border);
      padding: 24px 26px;
      margin-bottom: 22px;
    }

    .card-section-title {
      font-size: 1rem;
      font-weight: 800;
      color: var(--slate);
      margin-bottom: 18px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .card-section-title::after {
      content: '';
      flex: 1;
      height: 1px;
      background: var(--border);
    }

    .stat-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
      margin-bottom: 22px;
    }

    .stat-card {
      background: #fff;
      border-radius: 16px;
      padding: 20px;
      border: 1px solid var(--border);
      position: relative;
      overflow: hidden;
    }

    .stat-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 3px;
    }

    .stat-card.c-teal::before { background: var(--teal); }
    .stat-card.c-rose::before { background: var(--rose); }
    .stat-card.c-blue::before { background: var(--blue); }
    .stat-card.c-violet::before { background: var(--violet); }

    .stat-label { font-size: 0.75rem; font-weight: 700; text-transform: uppercase; color: var(--muted); margin-bottom: 4px; }
    .stat-value { font-size: 2rem; font-weight: 800; line-height: 1; margin-bottom: 8px; }
    .stat-card.c-teal .stat-value { color: var(--teal); }
    .stat-card.c-rose .stat-value { color: var(--rose); }
    .stat-card.c-blue .stat-value { color: var(--blue); }
    .stat-card.c-violet .stat-value { color: var(--violet); }

    .badge { font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700; }
    .badge-teal { background: var(--teal); color: #fff; }
    .badge-violet { background: var(--violet); color: #fff; }
    .badge-blue { background: var(--blue); color: #fff; }
    .badge-soft-teal { background: var(--teal-lt); color: var(--teal); }
    .badge-soft-blue { background: var(--blue-lt); color: var(--blue); }
    .badge-soft-amber { background: var(--amber-lt); color: var(--amber); }
    .badge-soft-violet { background: var(--violet-lt); color: var(--violet); }

    .tbl { width: 100%; border-collapse: collapse; font-size: 0.88rem; }
    .tbl th { background: var(--bg); color: var(--muted); font-weight: 700; font-size: 0.75rem; text-transform: uppercase; padding: 10px 14px; border-bottom: 1px solid var(--border); }
    .tbl td { padding: 12px 14px; border-bottom: 1px solid var(--border); vertical-align: middle; }
    .tbl tr:last-child td { border-bottom: none; }

    .bottom-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 22px; }

    .doc-card { display: flex; align-items: center; gap: 12px; padding: 12px 0; border-bottom: 1px solid var(--border); }
    .doc-card:last-child { border-bottom: none; }
    .doc-avatar { width: 40px; height: 40px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; }

    .notif-item { display: flex; align-items: center; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid var(--border); }
    .notif-item:last-child { border-bottom: none; }
    .notif-dot { width: 8px; height: 8px; border-radius: 50%; margin-right: 10px; flex-shrink: 0; }

    .btn-panel { display: flex; flex-wrap: wrap; gap: 10px; }
    .btn-panel .btn { font-size: 0.85rem; font-weight: 700; border-radius: 10px; }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg mb-4">
    <a class="navbar-brand" href="#">🏥 MedikaCare</a>
    <div class="ml-auto d-flex">
      <a class="nav-link" href="#">Pasien <span class="badge badge-danger">127</span></a>
      <a class="nav-link" href="#">Farmasi <span class="badge badge-warning text-dark">5</span></a>
      <a class="nav-link" href="#">Lab <span class="badge badge-info">12</span></a>
      <a class="nav-link" href="#">Pesan <span class="badge badge-success">7</span></a>
    </div>
  </nav>

  <div class="container pb-5">

    <div class="stat-grid">
      <div class="stat-card c-teal">
        <div class="stat-label">Total Pasien Aktif</div>
        <div class="stat-value">127</div>
        <h6>Status <span class="badge badge-teal">Dalam Perawatan</span></h6>
      </div>
      <div class="stat-card c-rose">
        <div class="stat-label">Pasien Darurat</div>
        <div class="stat-value">8</div>
        <h6>Prioritas <span class="badge badge-danger">Kritis</span></h6>
      </div>
      <div class="stat-card c-blue">
        <div class="stat-label">Operasi Hari Ini</div>
        <div class="stat-value">5</div>
        <h6>Jadwal <span class="badge badge-blue">Terkonfirmasi</span></h6>
      </div>
      <div class="stat-card c-violet">
        <div class="stat-label">Hasil Lab Pending</div>
        <div class="stat-value">23</div>
        <h6>Proses <span class="badge badge-violet">Pemeriksaan</span></h6>
      </div>
    </div>

    <div class="card-section">
      <div class="card-section-title">🏢 Status Ruangan & Bangsal</div>
      <h1>Bangsal ICU <span class="badge badge-danger">Kritis</span></h1>
      <h2>Ruang Bedah <span class="badge badge-warning text-dark">Operasi Berjalan</span></h2>
      <h3>Unit Gawat Darurat <span class="badge badge-primary">Urgen</span></h3>
      <h4>Poli Jantung <span class="badge badge-info">Pemeriksaan</span></h4>
      <h5>Poli Umum <span class="badge badge-success">Normal</span></h5>
      <h6>Ruang Tunggu <span class="badge badge-secondary">Antrian: 14</span></h6>
    </div>

    <div class="card-section">
      <div class="card-section-title">🛏️ Status Pasien</div>
      <span class="badge badge-primary p-2 mr-1 mb-2">Dalam Perawatan</span>
      <span class="badge badge-secondary p-2 mr-1 mb-2">Observasi</span>
      <span class="badge badge-success p-2 mr-1 mb-2">Sembuh</span>
      <span class="badge badge-danger p-2 mr-1 mb-2">Kritis</span>
      <span class="badge badge-warning text-dark p-2 mr-1 mb-2">Perlu Perhatian</span>
      <span class="badge badge-info p-2 mr-1 mb-2">Pemeriksaan Lab</span>
      <span class="badge badge-light text-dark p-2 mr-1 mb-2" style="border:1px solid #dee2e6;">Baru Daftar</span>
      <span class="badge badge-dark p-2 mb-2">Arsip</span>

      <table class="tbl mt-3">
        <thead>
          <tr>
            <th>Pasien</th><th>Ruangan</th><th>Kondisi</th><th>Pembayaran</th><th>Lab</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Budi Santoso</strong><br><small class="text-muted">#RM-001</small></td>
            <td>ICU</td>
            <td><span class="badge badge-danger">Kritis</span></td>
            <td>Lunas</td><td>Pending</td>
          </tr>
          <tr>
            <td><strong>Siti Rahayu</strong><br><small class="text-muted">#RM-002</small></td>
            <td>Poli Jantung</td>
            <td><span class="badge badge-warning text-dark">Perlu Perhatian</span></td>
            <td>BPJS</td><td>Selesai</td>
          </tr>
          <tr>
            <td><strong>Ahmad Fauzi</strong><br><small class="text-muted">#RM-003</small></td>
            <td>Poli Umum</td>
            <td><span class="badge badge-success">Sembuh</span></td>
            <td>Lunas</td><td>Selesai</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="bottom-grid">
      <div class="card-section" style="margin-bottom:0;">
        <div class="card-section-title">👨‍⚕️ Dokter Aktif</div>
        <div class="doc-card">
          <div class="doc-avatar" style="background:var(--teal-lt);">👨‍⚕️</div>
          <div>
            <strong style="font-size:0.9rem;">dr. Andi Wijaya</strong><br>
            <span class="badge badge-pill badge-teal mt-1">Kardiologi</span>
          </div>
        </div>
        <div class="doc-card">
          <div class="doc-avatar" style="background:var(--violet-lt);">👩‍⚕️</div>
          <div>
            <strong style="font-size:0.9rem;">dr. Sinta Dewi</strong><br>
            <span class="badge badge-pill badge-violet mt-1">Neurologi</span>
          </div>
        </div>
        <div class="doc-card">
          <div class="doc-avatar" style="background:var(--blue-lt);">👨‍⚕️</div>
          <div>
            <strong style="font-size:0.9rem;">dr. Hendra</strong><br>
            <span class="badge badge-pill badge-blue mt-1">Ortopedi</span>
          </div>
        </div>
      </div>

      <div style="display:flex; flex-direction:column; gap:22px;">
        <div class="card-section" style="margin-bottom:0;">
          <div class="card-section-title">🔔 Notifikasi</div>
          <div class="notif-item">
            <div class="d-flex align-items-center">
              <div class="notif-dot" style="background:var(--rose);"></div>
              <span style="font-size:0.88rem;">Pasien ICU butuh penanganan segera</span>
            </div>
            <span class="badge badge-danger">Darurat</span>
          </div>
          <div class="notif-item">
            <div class="d-flex align-items-center">
              <div class="notif-dot" style="background:var(--amber);"></div>
              <span style="font-size:0.88rem;">Stok obat Amoxicillin hampir habis</span>
            </div>
            <span class="badge badge-warning text-dark">Segera</span>
          </div>
          <div class="notif-item">
            <div class="d-flex align-items-center">
              <div class="notif-dot" style="background:var(--teal);"></div>
              <span style="font-size:0.88rem;">Hasil lab pasien #RM-002 siap</span>
            </div>
            <span class="badge badge-teal">Selesai</span>
          </div>
        </div>

        <div class="card-section" style="margin-bottom:0;">
          <div class="card-section-title">⚡ Panel Aksi Petugas</div>
          <div class="btn-panel">
            <button type="button" class="btn btn-danger">Pasien Darurat <span class="badge badge-light text-danger ml-1">3</span></button>
            <button type="button" class="btn btn-primary">Notifikasi <span class="badge badge-light ml-1">8</span></button>
            <button type="button" class="btn btn-success">Antrian Poli <span class="badge badge-light text-success ml-1">24</span></button>
            <button type="button" class="btn btn-warning text-dark">Obat Kedaluwarsa <span class="badge badge-dark ml-1">5</span></button>
            <button type="button" class="btn btn-info">Hasil Lab <span class="badge badge-light text-info ml-1">12</span></button>
            <button type="button" class="btn btn-secondary">Pesan Masuk <span class="badge badge-light ml-1">7</span></button>
          </div>
        </div>
      </div>
    </div>

    <p class="mt-4"><a href="{{ url('/') }}">← Kembali ke Home</a></p>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
