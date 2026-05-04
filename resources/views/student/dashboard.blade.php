<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard — PPDB Online</title>
  <link rel="stylesheet" href="/css/dashboard.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"/>
</head>
<body>

  <aside class="sidebar">
    <div class="sidebar-top">
      <img src="img/logo.png" alt="Logo" class="logo" />
      <span class="app-name">PPDB Online</span>
    </div>
    <nav class="nav">
      <a href="/dashboard" class="nav-item active">Dashboard</a>
      @if(!$student)
        <a href="/form" class="nav-item">Form Pendaftaran</a>
      @endif
      <a href="#" class="nav-item">Status Seleksi</a>
    </nav>
    <div class="sidebar-bottom">
      <div class="user-info">
        <div class="avatar">{{ strtoupper(substr($user->name, 0, 1)) }}</div>
        <div>
          <p class="user-name">{{ $user->name }}</p>
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
      <h1>Dashboard</h1>
    </div>
    <div class="content">

      @if(session('success'))
        <div class="alert-success">✅ {{ session('success') }}</div>
      @endif
      @if(session('info'))
        <div class="alert-info">ℹ️ {{ session('info') }}</div>
      @endif

      <div class="cards">
        <div class="card">
          <p class="card-label">Status Pendaftaran</p>
          <p class="card-value {{ !$student ? 'pending' : '' }}">
            {{ $student ? ucfirst($student->status) : 'Belum Daftar' }}
          </p>
        </div>
        <div class="card">
          <p class="card-label">Jalur Pendaftaran</p>
          <p class="card-value">{{ $student ? str_replace('_', ' ', $student->jalur_masuk) : '—' }}</p>
        </div>
        <div class="card">
          <p class="card-label">Hasil Seleksi</p>
          <p class="card-value">
            @if(!$student) —
            @elseif($student->status == 'diterima') Diterima ✅
            @elseif($student->status == 'ditolak') Tidak Diterima ❌
            @else Menunggu keputusan...
            @endif
          </p>
        </div>
      </div>

      @if(!$student)
        <div class="info-box">
          <p class="info-title">Langkah Pendaftaran</p>
          <ol class="steps">
            <li>Lengkapi form pendaftaran</li>
            <li>Upload berkas yang dibutuhkan</li>
            <li>Tunggu hasil seleksi dari pihak sekolah</li>
          </ol>
          <a href="/form" class="btn">Mulai Pendaftaran</a>
        </div>
      @else
        <div class="info-box">
          <p class="info-title">Data Pendaftaran Kamu</p>
          <p class="info-sub">Nama Lengkap &nbsp;: {{ $student->nama_lengkap }}</p>
          <p class="info-sub">NISN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $student->nisn }}</p>
          <p class="info-sub">Sekolah Asal &nbsp;: {{ $student->nama_sekolah_asal }}</p>
          <p class="info-sub">Jalur &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ str_replace('_', ' ', $student->jalur_masuk) }}</p>
          <p class="info-sub">Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ ucfirst($student->status) }}</p>
        </div>
      @endif

    </div>
  </main>

</body>
</html>