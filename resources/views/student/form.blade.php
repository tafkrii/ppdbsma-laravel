<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Form Pendaftaran — PPDB Online</title>
  <link rel="stylesheet" href="/css/form.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"/>
</head>
<body>
  <div class="card">
    <h1>Form Pendaftaran</h1>
    <p class="sub">Isi semua data dengan benar sesuai dokumen resmi</p>

    @if($errors->any())
      <div class="alert-error">
        @foreach($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
      </div>
    @endif

    <form method="POST" action="/form" enctype="multipart/form-data">
      @csrf

      <div class="section-title">Data Siswa</div>

      <div class="form-group">
        <label>NAMA LENGKAP <span class="req">*</span></label>
        <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" value="{{ old('nama_lengkap') }}" required />
      </div>

      <div class="row-2">
        <div class="form-group">
          <label>NISN <span class="req">*</span></label>
          <input type="text" name="nisn" placeholder="Masukkan NISN" value="{{ old('nisn') }}" required />
        </div>
        <div class="form-group">
          <label>JENIS KELAMIN <span class="req">*</span></label>
          <select name="jenis_kelamin" required>
            <option value="">Pilih</option>
            <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
            <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label>ASAL SEKOLAH <span class="req">*</span></label>
        <input type="text" name="nama_sekolah_asal" placeholder="Masukkan Asal Sekolah" value="{{ old('nama_sekolah_asal') }}" required />
      </div>

      <div class="row-2">
        <div class="form-group">
          <label>HOBI <span class="req">*</span></label>
          <input type="text" name="hobi" placeholder="Masukkan Hobi" value="{{ old('hobi') }}" required />
        </div>
        <div class="form-group">
          <label>CITA-CITA <span class="req">*</span></label>
          <input type="text" name="cita_cita" placeholder="Masukkan Cita-cita" value="{{ old('cita_cita') }}" required />
        </div>
      </div>

      <div class="row-2">
        <div class="form-group">
          <label>NO HP SISWA <span class="req">*</span></label>
          <input type="text" name="no_hp_siswa" placeholder="Masukkan No HP Siswa" value="{{ old('no_hp_siswa') }}" required />
        </div>
        <div class="form-group">
          <label>NO HP ORANG TUA <span class="req">*</span></label>
          <input type="text" name="no_hp_ortu" placeholder="Masukkan No HP Orang Tua" value="{{ old('no_hp_ortu') }}" required />
        </div>
      </div>

      <div class="form-group">
        <label>JALUR PENDAFTARAN <span class="req">*</span></label>
        <select name="jalur_masuk" required>
          <option value="">Pilih Jalur</option>
          <option value="REGULER" {{ old('jalur_masuk') == 'REGULER' ? 'selected' : '' }}>Reguler</option>
          <option value="PRESTASI_AKADEMIK" {{ old('jalur_masuk') == 'PRESTASI_AKADEMIK' ? 'selected' : '' }}>Prestasi Akademik</option>
          <option value="PRESTASI_NON_AKADEMIK" {{ old('jalur_masuk') == 'PRESTASI_NON_AKADEMIK' ? 'selected' : '' }}>Prestasi Non Akademik</option>
          <option value="PRESTASI_KEAGAMAAN" {{ old('jalur_masuk') == 'PRESTASI_KEAGAMAAN' ? 'selected' : '' }}>Prestasi Keagamaan</option>
        </select>
      </div>

      <div class="section-title">Data Diri</div>

      <div class="row-2">
        <div class="form-group">
          <label>NIK <span class="req">*</span></label>
          <input type="text" name="nik" placeholder="Masukkan NIK" value="{{ old('nik') }}" required />
        </div>
        <div class="form-group">
          <label>NO KARTU KELUARGA <span class="req">*</span></label>
          <input type="text" name="no_kk" placeholder="Masukkan No KK" value="{{ old('no_kk') }}" required />
        </div>
      </div>

      <div class="row-2">
        <div class="form-group">
          <label>TEMPAT LAHIR <span class="req">*</span></label>
          <input type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" value="{{ old('tempat_lahir') }}" required />
        </div>
        <div class="form-group">
          <label>TANGGAL LAHIR <span class="req">*</span></label>
          <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required />
        </div>
      </div>

      <div class="form-group">
        <label>AGAMA <span class="req">*</span></label>
        <select name="agama" required>
          <option value="">Pilih Agama</option>
          @foreach(['Islam','Kristen','Hindu','Budha','Konghucu','Lainnya'] as $agama)
            <option value="{{ $agama }}" {{ old('agama') == $agama ? 'selected' : '' }}>{{ $agama }}</option>
          @endforeach
        </select>
      </div>

      <div class="section-title">Tempat Tinggal</div>

      <div class="form-group">
        <label>ALAMAT <span class="req">*</span></label>
        <input type="text" name="alamat" placeholder="Masukkan Alamat Lengkap" value="{{ old('alamat') }}" required />
      </div>

      <div class="row-2">
        <div class="form-group">
          <label>RT <span class="req">*</span></label>
          <input type="text" name="rt" placeholder="Contoh: 001" value="{{ old('rt') }}" required />
        </div>
        <div class="form-group">
          <label>RW <span class="req">*</span></label>
          <input type="text" name="rw" placeholder="Contoh: 002" value="{{ old('rw') }}" required />
        </div>
      </div>

      <div class="row-2">
        <div class="form-group">
          <label>DESA / KELURAHAN <span class="req">*</span></label>
          <input type="text" name="desa" placeholder="Masukkan Desa/Kelurahan" value="{{ old('desa') }}" required />
        </div>
        <div class="form-group">
          <label>KODE POS <span class="req">*</span></label>
          <input type="text" name="kode_pos" placeholder="Masukkan Kode Pos" value="{{ old('kode_pos') }}" required />
        </div>
      </div>

      <div class="form-group">
        <label>TINGGAL BERSAMA <span class="req">*</span></label>
        <select name="tempat_tinggal" required>
          <option value="">Pilih Opsi</option>
          <option value="orang_tua" {{ old('tempat_tinggal') == 'orang_tua' ? 'selected' : '' }}>Orang Tua</option>
          <option value="wali" {{ old('tempat_tinggal') == 'wali' ? 'selected' : '' }}>Wali</option>
          <option value="asrama" {{ old('tempat_tinggal') == 'asrama' ? 'selected' : '' }}>Asrama</option>
          <option value="kost" {{ old('tempat_tinggal') == 'kost' ? 'selected' : '' }}>Kost</option>
          <option value="panti" {{ old('tempat_tinggal') == 'panti' ? 'selected' : '' }}>Panti Asuhan</option>
        </select>
      </div>

      <div class="section-title">Info Tambahan</div>

      <div class="form-group">
        <label>ANAK KE BERAPA <span class="req">*</span></label>
        <select name="anak_ke" required>
          <option value="">Pilih Opsi</option>
          @foreach(range(1,10) as $n)
            <option value="{{ $n }}" {{ old('anak_ke') == $n ? 'selected' : '' }}>{{ $n }}</option>
          @endforeach
        </select>
      </div>

      <div class="row-2">
        <div class="form-group">
          <label>TINGGI BADAN (CM) <span class="req">*</span></label>
          <input type="number" name="tinggi_badan" placeholder="Contoh: 160" value="{{ old('tinggi_badan') }}" required />
        </div>
        <div class="form-group">
          <label>BERAT BADAN (KG) <span class="req">*</span></label>
          <input type="number" name="berat_badan" placeholder="Contoh: 50" value="{{ old('berat_badan') }}" required />
        </div>
      </div>

      <div class="form-group">
        <label>LINGKAR KEPALA (CM) <span class="req">*</span></label>
        <input type="number" name="lingkar_kepala" placeholder="Masukkan Lingkar Kepala" value="{{ old('lingkar_kepala') }}" required />
      </div>

      <div class="row-2">
        <div class="form-group">
          <label>JARAK KE SEKOLAH <span class="req">*</span></label>
          <input type="text" name="jarak_ke_sekolah" placeholder="Contoh: 5 km" value="{{ old('jarak_ke_sekolah') }}" required />
        </div>
        <div class="form-group">
          <label>WAKTU TEMPUH <span class="req">*</span></label>
          <input type="text" name="waktu_tempuh" placeholder="Contoh: 15 menit" value="{{ old('waktu_tempuh') }}" required />
        </div>
      </div>

      <div class="section-title">Data Ayah</div>

      <div class="form-group">
        <label>NAMA AYAH <span class="req">*</span></label>
        <input type="text" name="nama_ayah" placeholder="Masukkan Nama Ayah" value="{{ old('nama_ayah') }}" required />
      </div>

      <div class="row-2">
        <div class="form-group">
          <label>NIK AYAH <span class="req">*</span></label>
          <input type="text" name="nik_ayah" placeholder="Masukkan NIK Ayah" value="{{ old('nik_ayah') }}" required />
        </div>
        <div class="form-group">
          <label>TAHUN LAHIR AYAH <span class="req">*</span></label>
          <input type="text" name="tahun_lahir_ayah" placeholder="Contoh: 1975" value="{{ old('tahun_lahir_ayah') }}" required />
        </div>
      </div>

      <div class="form-group">
        <label>PENDIDIKAN TERAKHIR AYAH <span class="req">*</span></label>
        <div class="radio-group">
          @foreach(['Tidak Sekolah','SD','SMP','SMA','Diploma','Sarjana','Pascasarjana'] as $p)
            <label><input type="radio" name="pendidikan_ayah" value="{{ $p }}" {{ old('pendidikan_ayah') == $p ? 'checked' : '' }} required /> {{ $p }}</label>
          @endforeach
        </div>
      </div>

      <div class="row-2">
        <div class="form-group">
          <label>PEKERJAAN AYAH <span class="req">*</span></label>
          <select name="pekerjaan_ayah" required>
            <option value="">Pilih Pekerjaan</option>
            @foreach(['Tidak Bekerja','Nelayan','Petani','Peternak','PNS/TNI/Polri','Karyawan Swasta','Pedagang','Wiraswasta','Buruh','Pensiunan','TKI','Karyawan BUMN','Lainnya'] as $job)
              <option value="{{ $job }}" {{ old('pekerjaan_ayah') == $job ? 'selected' : '' }}>{{ $job }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label>PENGHASILAN AYAH <span class="req">*</span></label>
          <select name="penghasilan_ayah" required>
            <option value="">Pilih Penghasilan</option>
            @foreach(['Tidak Berpenghasilan','< Rp 500.000','Rp 500.000 - Rp 999.999','Rp 1.000.000 - Rp 1.999.999','Rp 2.000.000 - Rp 4.999.999','Rp 5.000.000 - Rp 20.000.000','> Rp 20.000.000'] as $inc)
              <option value="{{ $inc }}" {{ old('penghasilan_ayah') == $inc ? 'selected' : '' }}>{{ $inc }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="section-title">Data Ibu</div>

      <div class="form-group">
        <label>NAMA IBU <span class="req">*</span></label>
        <input type="text" name="nama_ibu" placeholder="Masukkan Nama Ibu" value="{{ old('nama_ibu') }}" required />
      </div>

      <div class="row-2">
        <div class="form-group">
          <label>NIK IBU <span class="req">*</span></label>
          <input type="text" name="nik_ibu" placeholder="Masukkan NIK Ibu" value="{{ old('nik_ibu') }}" required />
        </div>
        <div class="form-group">
          <label>TAHUN LAHIR IBU <span class="req">*</span></label>
          <input type="text" name="tahun_lahir_ibu" placeholder="Contoh: 1978" value="{{ old('tahun_lahir_ibu') }}" required />
        </div>
      </div>

      <div class="form-group">
        <label>PENDIDIKAN TERAKHIR IBU <span class="req">*</span></label>
        <div class="radio-group">
          @foreach(['Tidak Sekolah','SD','SMP','SMA','Diploma','Sarjana','Pascasarjana'] as $p)
            <label><input type="radio" name="pendidikan_ibu" value="{{ $p }}" {{ old('pendidikan_ibu') == $p ? 'checked' : '' }} required /> {{ $p }}</label>
          @endforeach
        </div>
      </div>

      <div class="row-2">
        <div class="form-group">
          <label>PEKERJAAN IBU <span class="req">*</span></label>
          <select name="pekerjaan_ibu" required>
            <option value="">Pilih Pekerjaan</option>
            @foreach(['Tidak Bekerja','Nelayan','Petani','Peternak','PNS/TNI/Polri','Karyawan Swasta','Pedagang','Wiraswasta','Buruh','Pensiunan','TKI','Karyawan BUMN','Lainnya'] as $job)
              <option value="{{ $job }}" {{ old('pekerjaan_ibu') == $job ? 'selected' : '' }}>{{ $job }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label>PENGHASILAN IBU <span class="req">*</span></label>
          <select name="penghasilan_ibu" required>
            <option value="">Pilih Penghasilan</option>
            @foreach(['Tidak Berpenghasilan','< Rp 500.000','Rp 500.000 - Rp 999.999','Rp 1.000.000 - Rp 1.999.999','Rp 2.000.000 - Rp 4.999.999','Rp 5.000.000 - Rp 20.000.000','> Rp 20.000.000'] as $inc)
              <option value="{{ $inc }}" {{ old('penghasilan_ibu') == $inc ? 'selected' : '' }}>{{ $inc }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="section-title">Upload Berkas (Opsional)</div>

      <div class="form-group">
        <label>KARTU KELUARGA</label>
        <input type="file" name="kk" accept=".pdf,.jpg,.jpeg,.png" />
        <p class="file-hint">Format: PDF/JPG/PNG. Maks. 10MB</p>
      </div>

      <div class="form-group">
        <label>AKTE KELAHIRAN</label>
        <input type="file" name="akta" accept=".pdf,.jpg,.jpeg,.png" />
        <p class="file-hint">Format: PDF/JPG/PNG. Maks. 10MB</p>
      </div>

      <div class="form-group">
        <label>SERTIFIKAT</label>
        <input type="file" name="sertifikat" accept=".pdf,.jpg,.jpeg,.png" />
        <p class="file-hint">Format: PDF/JPG/PNG. Maks. 10MB</p>
      </div>

      <button type="submit" class="btn">Kirim Pendaftaran</button>

    </form>
  </div>
</body>
</html>