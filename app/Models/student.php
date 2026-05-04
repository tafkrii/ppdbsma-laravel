<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'user_id', 'nisn', 'nama_lengkap', 'jenis_kelamin', 'nama_sekolah_asal',
        'hobi', 'cita_cita', 'no_hp_siswa', 'no_hp_ortu', 'jalur_masuk',
        'nik', 'no_kk', 'tempat_lahir', 'tanggal_lahir', 'agama',
        'alamat', 'rt', 'rw', 'desa', 'kode_pos', 'tempat_tinggal',
        'anak_ke', 'tinggi_badan', 'berat_badan', 'lingkar_kepala',
        'jarak_ke_sekolah', 'waktu_tempuh', 'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function berkas()
    {
        return $this->hasMany(Berkas::class);
    }

    public function orangTua()
    {
        return $this->hasMany(OrangTua::class);
    }
}