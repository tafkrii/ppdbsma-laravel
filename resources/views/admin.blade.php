<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin — PPDB Online</title>
  <link rel="stylesheet" href="css/admin.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"/>
</head>
<body>

  <!-- SIDEBAR -->
  <aside class="sidebar">
    <div class="sidebar-top">
      <img src="img/logo.png" alt="Logo" class="logo" />
      <span class="app-name">PPDB Admin</span>
    </div>

    <nav class="nav">
      <a href="/admin" class="nav-item active">Dashboard</a>
      <a href="#" class="nav-item">Data Pendaftar</a>
      <a href="#" class="nav-item">Verifikasi</a>
    </nav>

    <div class="sidebar-bottom">
      <div class="user-info">
        <div class="avatar">A</div>
        <div>
          <p class="user-name">Administrator</p>
          <p class="user-role">Admin</p>
        </div>
      </div>
      <a href="/login" class="btn-logout">Keluar</a>
    </div>
  </aside>

  <!-- MAIN -->
  <main class="main">
    <div class="topbar">
      <h1>Dashboard Admin</h1>
    </div>

    <div class="content">

      <!-- Stat cards -->
      <div class="cards">
        <div class="card">
          <p class="card-label">Total Pendaftar</p>
          <p class="card-value">0</p>
        </div>
        <div class="card">
          <p class="card-label">Belum Diverifikasi</p>
          <p class="card-value">0</p>
        </div>
        <div class="card">
          <p class="card-label">Sudah Diverifikasi</p>
          <p class="card-value">0</p>
        </div>
      </div>

      <!-- Tabel pendaftar -->
      <div class="table-box">
        <div class="table-header">
          <p class="table-title">Data Pendaftar</p>
        </div>
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Jalur</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <!-- Kosong dulu, nanti diisi dari database -->
            <tr>
              <td colspan="6" class="empty">Belum ada data pendaftar</td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </main>

</body>
</html>