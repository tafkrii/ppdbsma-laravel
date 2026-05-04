<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'student_id', 'jenis', 'nama_file', 'path_file',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}