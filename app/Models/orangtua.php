<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrangTua extends Model
{
    public $timestamps = false;

    protected $table = 'orang_tua';

    protected $fillable = [
        'student_id', 'tipe', 'nama', 'nik', 'tahun_lahir',
        'pendidikan', 'pekerjaan', 'penghasilan',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}