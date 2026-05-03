<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Form Pendaftaran — PPDB Online</title>
  <link rel="stylesheet" href="css/form.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"/>
</head>
<body>

  <div class="card">
    <h1>Form Pendaftaran</h1>
    <p class="sub">Isi semua data dengan benar sesuai dokumen resmi</p>

    <!-- DATA DIRI -->
    <div class="section-title">Data Diri</div>

    <div class="form-group">
      <label>NO INDUK KEPENDUDUKAN (NIK)</label>
      <input type="text" placeholder="Masukkan NIK" />
    </div>

    <div class="form-group">
      <label>NO KARTU KELUARGA (KK)</label>
      <input type="text" placeholder="Masukkan No Kartu Keluarga" />
    </div>

    <div class="row-2">
      <div class="form-group">
        <label>TEMPAT LAHIR</label>
        <input type="text" placeholder="Masukkan Tempat Lahir" />
      </div>
      <div class="form-group">
        <label>TANGGAL LAHIR</label>
        <input type="date" />
      </div>
    </div>

    <div class="form-group">
      <label>AGAMA</label>
      <select>
        <option value="">Pilih Agama</option>
        <option>Islam</option>
        <option>Kristen</option>
        <option>Hindu</option>
        <option>Budha</option>
        <option>Konghucu</option>
        <option>Lainnya</option>
      </select>
    </div>

    <!-- TEMPAT TINGGAL -->
    <div class="section-title">Tempat Tinggal</div>

    <div class="form-group">
      <label>ALAMAT TEMPAT TINGGAL</label>
      <input type="text" placeholder="Masukkan Alamat" />
    </div>

    <div class="row-2">
      <div class="form-group">
        <label>RT</label>
        <input type="text" placeholder="Contoh: 001" />
      </div>
      <div class="form-group">
        <label>RW</label>
        <input type="text" placeholder="Contoh: 002" />
      </div>
    </div>

    <div class="row-2">
      <div class="form-group">
        <label>DESA / KELURAHAN</label>
        <input type="text" placeholder="Masukkan Desa/Kelurahan" />
      </div>
      <div class="form-group">
        <label>KODE POS</label>
        <input type="text" placeholder="Masukkan Kode Pos" />
      </div>
    </div>

    <div class="form-group">
      <label>TINGGAL BERSAMA</label>
      <select>
        <option value="">Pilih Opsi</option>
        <option>Orang Tua</option>
        <option>Wali</option>
        <option>Asrama</option>
        <option>Kost</option>
        <option>Panti Asuhan</option>
      </select>
    </div>

    <!-- INFO TAMBAHAN -->
    <div class="section-title">Info Tambahan</div>

    <div class="form-group">
      <label>TRANSPORTASI KE SEKOLAH</label>
      <select>
        <option value="">Pilih Opsi</option>
        <option>Jalan Kaki</option>
        <option>Sepeda</option>
        <option>Motor</option>
        <option>Mobil</option>
        <option>Ojek</option>
        <option>Angkutan Umum</option>
      </select>
    </div>

    <div class="row-2">
      <div class="form-group">
        <label>JARAK RUMAH KE SEKOLAH</label>
        <input type="text" placeholder="Contoh: 5 km" />
      </div>
      <div class="form-group">
        <label>WAKTU TEMPUH</label>
        <input type="text" placeholder="Contoh: 15 menit" />
      </div>
    </div>

    <div class="form-group">
      <label>ANAK KE BERAPA (BERDASARKAN KK)</label>
      <select>
        <option value="">Pilih Opsi</option>
        <option>1</option><option>2</option><option>3</option>
        <option>4</option><option>5</option>
      </select>
    </div>

    <div class="row-2">
      <div class="form-group">
        <label>TINGGI BADAN (CM)</label>
        <input type="number" placeholder="Contoh: 160" />
      </div>
      <div class="form-group">
        <label>BERAT BADAN (KG)</label>
        <input type="number" placeholder="Contoh: 50" />
      </div>
    </div>

    <div class="form-group">
      <label>LINGKAR KEPALA (CM)</label>
      <input type="number" placeholder="Masukkan Lingkar Kepala" />
    </div>

    <!-- DATA AYAH -->
    <div class="section-title">Data Ayah</div>

    <div class="form-group">
      <label>NAMA AYAH</label>
      <input type="text" placeholder="Masukkan Nama Ayah" />
    </div>

    <div class="row-2">
      <div class="form-group">
        <label>NIK AYAH</label>
        <input type="text" placeholder="Masukkan NIK Ayah" />
      </div>
      <div class="form-group">
        <label>TAHUN LAHIR AYAH</label>
        <input type="text" placeholder="Contoh: 1975" />
      </div>
    </div>

    <div class="form-group">
      <label>PENDIDIKAN AYAH</label>
      <div class="radio-group">
        <label><input type="radio" name="pendidikan_ayah" value="tidak_sekolah" /> Tidak Sekolah</label>
        <label><input type="radio" name="pendidikan_ayah" value="sd" /> SD</label>
        <label><input type="radio" name="pendidikan_ayah" value="smp" /> SMP</label>
        <label><input type="radio" name="pendidikan_ayah" value="sma" /> SMA</label>
        <label><input type="radio" name="pendidikan_ayah" value="diploma" /> Diploma</label>
        <label><input type="radio" name="pendidikan_ayah" value="sarjana" /> Sarjana</label>
        <label><input type="radio" name="pendidikan_ayah" value="pasca_sarjana" /> Pascasarjana</label>
      </div>
    </div>

    <div class="row-2">
      <div class="form-group">
        <label>PEKERJAAN AYAH</label>
        <select>
          <option value="">Pilih Pekerjaan</option>
          <option>Tidak Bekerja</option><option>Nelayan</option><option>Petani</option>
          <option>Peternak</option><option>PNS/TNI/Polri</option><option>Karyawan Swasta</option>
          <option>Pedagang</option><option>Wiraswasta</option><option>Buruh</option>
          <option>Pensiunan</option><option>TKI</option><option>Karyawan BUMN</option>
          <option>Lainnya</option>
        </select>
      </div>
      <div class="form-group">
        <label>PENGHASILAN AYAH</label>
        <select>
          <option value="">Pilih Penghasilan</option>
          <option>Tidak Berpenghasilan</option>
          <option>Kurang dari Rp 500.000</option>
          <option>Rp 500.000 - Rp 999.999</option>
          <option>Rp 1.000.000 - Rp 1.999.999</option>
          <option>Rp 2.000.000 - Rp 4.999.999</option>
          <option>Rp 5.000.000 - Rp 20.000.000</option>
          <option>Lebih dari Rp 20.000.000</option>
        </select>
      </div>
    </div>

    <!-- DATA IBU -->
    <div class="section-title">Data Ibu</div>

    <div class="form-group">
      <label>NAMA IBU</label>
      <input type="text" placeholder="Masukkan Nama Ibu" />
    </div>

    <div class="row-2">
      <div class="form-group">
        <label>NIK IBU</label>
        <input type="text" placeholder="Masukkan NIK Ibu" />
      </div>
      <div class="form-group">
        <label>TAHUN LAHIR IBU</label>
        <input type="text" placeholder="Contoh: 1978" />
      </div>
    </div>

    <div class="form-group">
      <label>PENDIDIKAN IBU</label>
      <div class="radio-group">
        <label><input type="radio" name="pendidikan_ibu" value="tidak_sekolah" /> Tidak Sekolah</label>
        <label><input type="radio" name="pendidikan_ibu" value="sd" /> SD</label>
        <label><input type="radio" name="pendidikan_ibu" value="smp" /> SMP</label>
        <label><input type="radio" name="pendidikan_ibu" value="sma" /> SMA</label>
        <label><input type="radio" name="pendidikan_ibu" value="diploma" /> Diploma</label>
        <label><input type="radio" name="pendidikan_ibu" value="sarjana" /> Sarjana</label>
        <label><input type="radio" name="pendidikan_ibu" value="pasca_sarjana" /> Pascasarjana</label>
      </div>
    </div>

    <div class="row-2">
      <div class="form-group">
        <label>PEKERJAAN IBU</label>
        <select>
          <option value="">Pilih Pekerjaan</option>
          <option>Tidak Bekerja</option><option>Nelayan</option><option>Petani</option>
          <option>Peternak</option><option>PNS/TNI/Polri</option><option>Karyawan Swasta</option>
          <option>Pedagang</option><option>Wiraswasta</option><option>Buruh</option>
          <option>Pensiunan</option><option>TKI</option><option>Karyawan BUMN</option>
          <option>Lainnya</option>
        </select>
      </div>
      <div class="form-group">
        <label>PENGHASILAN IBU</label>
        <select>
          <option value="">Pilih Penghasilan</option>
          <option>Tidak Berpenghasilan</option>
          <option>Kurang dari Rp 500.000</option>
          <option>Rp 500.000 - Rp 999.999</option>
          <option>Rp 1.000.000 - Rp 1.999.999</option>
          <option>Rp 2.000.000 - Rp 4.999.999</option>
          <option>Rp 5.000.000 - Rp 20.000.000</option>
          <option>Lebih dari Rp 20.000.000</option>
        </select>
      </div>
    </div>

    <!-- UPLOAD BERKAS -->
    <div class="section-title">Upload Berkas</div>

    <div class="form-group">
      <label>KARTU KELUARGA</label>
      <input type="file" name="kartu_keluarga" accept=".pdf,.jpg,.jpeg,.png" />
      <p class="file-hint">Format: PDF/JPG/PNG. Maks. 10MB</p>
    </div>

    <div class="form-group">
      <label>AKTE KELAHIRAN</label>
      <input type="file" name="akte_kelahiran" accept=".pdf,.jpg,.jpeg,.png" />
      <p class="file-hint">Format: PDF/JPG/PNG. Maks. 10MB</p>
    </div>

    <button class="btn">Kirim Pendaftaran</button>

  </div>

</body>
</html>