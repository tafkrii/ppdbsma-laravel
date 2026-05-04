<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login — PPDB Online</title>
  <link rel="stylesheet" href="/css/login.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"/>
</head>
<body>
  <div class="card">

    @if($errors->has('email'))
      <div class="alert-error">{{ $errors->first('email') }}</div>
    @endif

    <img src="img/logo.png" alt="Logo" class="logo" />
    <h1>Login SPMB</h1>
    <p class="sub">Masuk untuk melanjutkan pendaftaran</p>

    <form method="POST" action="/login">
      @csrf
      <div class="form-group">
        <label>Alamat Email</label>
        <input type="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}" />
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan password" />
      </div>
      <button type="submit" class="btn">Masuk</button>
    </form>

    <p class="alt">Belum punya akun? <a href="/register">Daftar di sini</a></p>
  </div>
</body>
</html>