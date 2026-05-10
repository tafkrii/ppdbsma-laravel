<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin | PPDB SMAN 2 Tanjung</title>
  <link rel="stylesheet" href="/css/admin.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"/>
</head>
<body>
  <div class="overlay" id="overlay" onclick="tutupSidebar()"></div>

  <aside class="sidebar" id="sidebar">
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

    {{-- TOPBAR: tombol hamburger hanya muncul di mobile --}}
    <div class="topbar">
      <button class="hamburger" onclick="bukaSidebar()">☰</button>
      <h1>Dashboard Admin</h1>
    </div>

    <div class="content">

      @if(session('success'))
        <div class="alert-success">✅ {{ session('success') }}</div>
      @endif

      <div class="cards">
        <div class="card">
          <p class="card-label">Total Akun Siswa</p>
          <p class="card-value">{{ $pendaftar->count() }}</p>
        </div>
        <div class="card">
          <p class="card-label">Sudah Isi Form</p>
          <p class="card-value">{{ $pendaftar->filter(fn($p) => $p->student)->count() }}</p>
        </div>
        <div class="card">
          <p class="card-label">Belum Isi Form</p>
          <p class="card-value">{{ $pendaftar->filter(fn($p) => !$p->student)->count() }}</p>
        </div>
      </div>

      <div class="table-box">
        <div class="table-header">
          <p class="table-title">Data Pendaftar</p>
        </div>
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Akun</th>
              <th>Email</th>
              <th>Nama Lengkap</th>
              <th>Jalur</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse($pendaftar as $i => $p)
              <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->student ? $p->student->nama_lengkap : '—' }}</td>
                <td>{{ $p->student ? str_replace('_', ' ', $p->student->jalur_masuk) : '—' }}</td>
                <td>
                  @if($p->student)
                    <span class="badge {{ $p->student->status }}">{{ ucfirst($p->student->status) }}</span>
                  @else
                    <span class="badge belum">Belum Daftar</span>
                  @endif
                </td>
                <td>
                  @if($p->student)
                    <div class="aksi">
                      <a href="/admin/edit/{{ $p->student->id }}" class="btn-icon edit" title="Edit Status">
                        <img src="/img/edit.png" alt="Edit" width="18" height="18" />
                      </a>
                      <form method="POST" action="/admin/delete/{{ $p->student->id }}" onsubmit="return confirm('Yakin hapus data pendaftar ini?')">
                        @csrf
                        <button type="submit" class="btn-icon delete" title="Hapus Data">
                          <img src="/img/delete.png" alt="Hapus" width="18" height="18" />
                        </button>
                      </form>
                    </div>
                  @else
                    —
                  @endif
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="7" class="empty">Belum ada data pendaftar</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

    </div>
  </main>

  <script>
    function bukaSidebar() {
      document.getElementById('sidebar').classList.add('aktif');
      document.getElementById('overlay').classList.add('aktif');
    }

    function tutupSidebar() {
      document.getElementById('sidebar').classList.remove('aktif');
      document.getElementById('overlay').classList.remove('aktif');
    }
  </script>

</body>
</html>