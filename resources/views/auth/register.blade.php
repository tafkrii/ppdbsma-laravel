<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Daftar — PPDB Online</title>
  <link rel="stylesheet" href="/css/register.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"/>
</head>
<body>
  <div class="card">

    @if(session('success'))
      <div class="alert-success">✅ {{ session('success') }}</div>
    @endif

    @if($errors->any())
      <div class="alert-error">
        @foreach($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
      </div>
    @endif

    <img src="img/logo.png" alt="Logo" class="logo"/>
    <h1>Buat Akun</h1>
    <p class="sub">Daftarkan diri untuk memulai pendaftaran</p>

    <form method="POST" action="/register">
      @csrf
      <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="name" placeholder="Masukkan nama lengkap" value="{{ old('name') }}" />
      </div>
      <div class="form-group">
        <label>Alamat Email</label>
        <input type="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}" />
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Buat password" />
      </div>
      <div class="form-group">
        <label>Konfirmasi Password</label>
        <input type="password" name="password_confirmation" placeholder="Ulangi password" />
      </div>
      <button type="submit" class="btn">Daftar Sekarang</button>
    </form>

    <p class="alt">Sudah punya akun? <a href="/login">Login</a></p>
  </div>
</body>
</html>