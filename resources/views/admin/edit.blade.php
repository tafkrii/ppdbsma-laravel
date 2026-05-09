<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit Status | PPDB Admin</title>
  <link rel="stylesheet" href="/css/admin.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"/>
</head>
<body>

  <aside class="sidebar">
    <div class="sidebar-top">
      <img src="img/logo.png" alt="Logo" class="logo" />
      <span class="app-name">PPDB Admin</span>
    </div>
    <nav class="nav">
      <a href="/admin" class="nav-item active">Dashboard</a>
    </nav>
    <div class="sidebar-bottom">
      <div class="user-info">
        <div class="avatar">A</div>
        <div>
          <p class="user-name">Administrator</p>
          <p class="user-role">Admin</p>
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
      <h1>Edit Status Pendaftar</h1>
    </div>

    <div class="content">
      <div class="edit-card">

        <div class="edit-info">
          <p><span>Nama</span>{{ $student->nama_lengkap }}</p>
          <p><span>NISN</span>{{ $student->nisn }}</p>
          <p><span>Jalur</span>{{ str_replace('_', ' ', $student->jalur_masuk) }}</p>
          <p><span>Status Sekarang</span>
            <span class="badge {{ $student->status }}">{{ ucfirst($student->status) }}</span>
          </p>
        </div>

        <form method="POST" action="/admin/update/{{ $student->id }}">
          @csrf
          <div class="form-group">
            <label>Ubah Status</label>
            <select name="status" required>
              <option value="pending" {{ $student->status == 'pending' ? 'selected' : '' }}>Pending</option>
              <option value="diterima" {{ $student->status == 'diterima' ? 'selected' : '' }}>Diterima</option>
              <option value="ditolak" {{ $student->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
            </select>
          </div>
          <div class="edit-actions">
            <a href="/admin" class="btn-batal">Batal</a>
            <button type="submit" class="btn-simpan">Simpan</button>
          </div>
        </form>

      </div>
    </div>
  </main>

</body>
</html>