<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register - SMAN 2 Tanjung</title>
  <link rel="stylesheet" href="css/register.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"/>
</head>
<body>

  <div class="card">

    <div class="alert-success" id="alert">
      ✅ Akun berhasil dibuat! Silakan login untuk melanjutkan.
    </div>

    <img src="img/logo.png" alt="Logo" class="logo" />
    <h1>Buat Akun</h1>
    <p class="sub">Daftarkan diri untuk memulai pendaftaran</p>

    <div class="form-group">
      <label for="name">Nama Lengkap</label>
      <input type="text" id="name" placeholder="Masukkan nama lengkap" />
    </div>

    <div class="form-group">
      <label for="email">Alamat Email</label>
      <input type="email" id="email" placeholder="Masukkan email" />
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" id="password" placeholder="Buat password" />
    </div>

    <div class="form-group">
      <label for="password_confirm">Konfirmasi Password</label>
      <input type="password" id="password_confirm" placeholder="Ulangi password" />
    </div>

    <!-- Tombol demo notif, nanti diganti action Laravel -->
    <button class="btn" onclick="document.getElementById('alert').style.display='flex'">Daftar Sekarang</button>

    <p class="alt">Sudah punya akun? <a href="/login">Login</a></p>

  </div>

</body>
</html>