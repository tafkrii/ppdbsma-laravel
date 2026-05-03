<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard — PPDB Online</title>
  <link rel="stylesheet" href="css/dashboard.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"/>
</head>
<body>

  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div class="sidebar-top">
      <img src="img/logo.png" alt="Logo" class="logo" />
      <span class="app-name">PPDB Online</span>
    </div>

    <nav class="nav">
      <a href="dashboard.html" class="nav-item active">Dashboard</a>
      <a href="form.html" class="nav-item">Form Pendaftaran</a>
      <a href="#" class="nav-item">Status Seleksi</a>
    </nav>

    <div class="sidebar-bottom">
      <div class="user-info">
        <div class="avatar">S</div>
        <div>
          <p class="user-name">Nama Siswa</p>
          <p class="user-role">Calon Pendaftar</p>
        </div>
      </div>
      <a href="login.html" class="btn-logout">Keluar</a>
    </div>
  </aside>

  <!-- MAIN -->
  <main class="main">
    <div class="topbar">
      <h1>Dashboard</h1>
    </div>

    <div class="content">

      <!-- Status cards -->
      <div class="cards">
        <div class="card">
          <p class="card-label">Status Pendaftaran</p>
          <p class="card-value pending">Belum Daftar</p>
        </div>
        <div class="card">
          <p class="card-label">Jalur Pendaftaran</p>
          <p class="card-value">—</p>
        </div>
        <div class="card">
          <p class="card-label">Hasil Seleksi</p>
          <p class="card-value">—</p>
        </div>
      </div>

      <!-- Info box -->
      <div class="info-box">
        <p class="info-title">Langkah Pendaftaran</p>
        <ol class="steps">
          <li>Lengkapi form pendaftaran</li>
          <li>Upload berkas yang dibutuhkan</li>
          <li>Tunggu hasil seleksi dari pihak sekolah</li>
        </ol>
        <a href="form.html" class="btn">Mulai Pendaftaran</a>
      </div>

    </div>
  </main>

</body>
</html>