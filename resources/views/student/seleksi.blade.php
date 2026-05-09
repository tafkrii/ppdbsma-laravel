<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Status Seleksi | PPDB SMAN 2 Tanjung</title>
  <link rel="stylesheet" href="/css/seleksi.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"/>
</head>
<body>

  <aside class="sidebar">
    <div class="sidebar-top">
      <img src="img/logo.png" alt="Logo" class="logo" />
      <span class="app-name">PPDB Online</span>
    </div>
    <nav class="nav">
      <a href="/dashboard" class="nav-item">Dashboard</a>
      <a href="/seleksi" class="nav-item active">Status Seleksi</a>
    </nav>
    <div class="sidebar-bottom">
      <div class="user-info">
        <div class="avatar">{{ strtoupper(substr($student->nama_lengkap, 0, 1)) }}</div>
        <div>
          <p class="user-name">{{ $student->nama_lengkap }}</p>
          <p class="user-role">Calon Pendaftar</p>
        </div>
      </div>
      <form method="POST" action="/logout">
        @csrf
        <button type="submit" class="btn-logout">Keluar</button>
      </form>
    </div>
  </aside>

  <main class="main">
    <div class="topbar">
      <h1>Status Seleksi</h1>
    </div>

    <div class="content">

      @if($student->status == 'diterima')
        <div class="status-card diterima">
          <div class="status-icon">✅</div>
          <h2 class="status-judul">DITERIMA</h2>
          <p class="status-text">
            Selamat! Anda dinyatakan lulus seleksi dan diterima sebagai peserta didik baru.
            Silakan melanjutkan ke tahap berikutnya sesuai petunjuk yang tersedia.
          </p>
        </div>

      @elseif($student->status == 'ditolak')
        <div class="status-card ditolak">
          <div class="status-icon">❌</div>
          <h2 class="status-judul">TIDAK DITERIMA</h2>
          <p class="status-text">
            Terima kasih telah mengikuti proses seleksi. Berdasarkan hasil penilaian,
            Anda belum dapat diterima pada tahap ini. Tetap semangat dan jangan berhenti
            mencoba di kesempatan lainnya.
          </p>
        </div>

      @else
        <div class="status-card pending">
          <div class="status-icon">⏳</div>
          <h2 class="status-judul">DALAM PROSES SELEKSI</h2>
          <p class="status-text">
            Data Anda sedang dalam tahap peninjauan oleh panitia. Mohon menunggu
            pengumuman hasil seleksi yang akan diinformasikan kemudian.
          </p>
        </div>
      @endif

    </div>
  </main>

</body>
</html>