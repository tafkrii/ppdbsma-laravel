<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Berkas;
use App\Models\OrangTua;

class StudentController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        $student = Student::where('user_id', $user->id)->first();
        return view('student.dashboard', compact('user', 'student'));
    }

    public function form()
    {
        $user = Auth::user();
        $student = Student::where('user_id', $user->id)->first();

        if ($student) {
            return redirect('/dashboard')->with('info', 'Kamu sudah pernah mengisi form pendaftaran.');
        }

        return view('student.form');
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        if (Student::where('user_id', $user->id)->exists()) {
            return redirect('/dashboard')->with('info', 'Kamu sudah pernah mengisi form pendaftaran.');
        }

        $request->validate([
            'nisn'              => 'required|string|max:20',
            'nama_lengkap'      => 'required|string|max:150',
            'jenis_kelamin'     => 'required|in:L,P',
            'nama_sekolah_asal' => 'required|string|max:150',
            'hobi'              => 'required|string|max:100',
            'cita_cita'         => 'required|string|max:150',
            'no_hp_siswa'       => 'required|string|max:20',
            'no_hp_ortu'        => 'required|string|max:20',
            'jalur_masuk'       => 'required|in:REGULER,PRESTASI_AKADEMIK,PRESTASI_NON_AKADEMIK,PRESTASI_KEAGAMAAN',
            'nik'               => 'required|string|max:20',
            'no_kk'             => 'required|string|max:20',
            'tempat_lahir'      => 'required|string|max:100',
            'tanggal_lahir'     => 'required|date',
            'agama'             => 'required|string|max:50',
            'alamat'            => 'required|string',
            'rt'                => 'required|string|max:5',
            'rw'                => 'required|string|max:5',
            'desa'              => 'required|string|max:100',
            'kode_pos'          => 'required|string|max:10',
            'tempat_tinggal'    => 'required|in:orang_tua,wali,kost,asrama,panti',
            'anak_ke'           => 'required|integer|min:1',
            'tinggi_badan'      => 'required|integer',
            'berat_badan'       => 'required|integer',
            'lingkar_kepala'    => 'required|integer',
            'jarak_ke_sekolah'  => 'required|string|max:50',
            'waktu_tempuh'      => 'required|string|max:50',
            'nama_ayah'         => 'required|string|max:150',
            'nik_ayah'          => 'required|string|max:20',
            'tahun_lahir_ayah'  => 'required|digits:4',
            'pendidikan_ayah'   => 'required|string|max:100',
            'pekerjaan_ayah'    => 'required|string|max:100',
            'penghasilan_ayah'  => 'required|string|max:100',
            'nama_ibu'          => 'required|string|max:150',
            'nik_ibu'           => 'required|string|max:20',
            'tahun_lahir_ibu'   => 'required|digits:4',
            'pendidikan_ibu'    => 'required|string|max:100',
            'pekerjaan_ibu'     => 'required|string|max:100',
            'penghasilan_ibu'   => 'required|string|max:100',
            'kk'                => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:10240',
            'akta'              => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:10240',
            'sertifikat'        => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:10240',
        ]);

        $student = Student::create([
            'user_id'           => $user->id,
            'nisn'              => $request->nisn,
            'nama_lengkap'      => $request->nama_lengkap,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'nama_sekolah_asal' => $request->nama_sekolah_asal,
            'hobi'              => $request->hobi,
            'cita_cita'         => $request->cita_cita,
            'no_hp_siswa'       => $request->no_hp_siswa,
            'no_hp_ortu'        => $request->no_hp_ortu,
            'jalur_masuk'       => $request->jalur_masuk,
            'nik'               => $request->nik,
            'no_kk'             => $request->no_kk,
            'tempat_lahir'      => $request->tempat_lahir,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'agama'             => $request->agama,
            'alamat'            => $request->alamat,
            'rt'                => $request->rt,
            'rw'                => $request->rw,
            'desa'              => $request->desa,
            'kode_pos'          => $request->kode_pos,
            'tempat_tinggal'    => $request->tempat_tinggal,
            'anak_ke'           => $request->anak_ke,
            'tinggi_badan'      => $request->tinggi_badan,
            'berat_badan'       => $request->berat_badan,
            'lingkar_kepala'    => $request->lingkar_kepala,
            'jarak_ke_sekolah'  => $request->jarak_ke_sekolah,
            'waktu_tempuh'      => $request->waktu_tempuh,
            'status'            => 'pending',
        ]);

        OrangTua::create([
            'student_id'  => $student->id,
            'tipe'        => 'ayah',
            'nama'        => $request->nama_ayah,
            'nik'         => $request->nik_ayah,
            'tahun_lahir' => $request->tahun_lahir_ayah,
            'pendidikan'  => $request->pendidikan_ayah,
            'pekerjaan'   => $request->pekerjaan_ayah,
            'penghasilan' => $request->penghasilan_ayah,
        ]);

        OrangTua::create([
            'student_id'  => $student->id,
            'tipe'        => 'ibu',
            'nama'        => $request->nama_ibu,
            'nik'         => $request->nik_ibu,
            'tahun_lahir' => $request->tahun_lahir_ibu,
            'pendidikan'  => $request->pendidikan_ibu,
            'pekerjaan'   => $request->pekerjaan_ibu,
            'penghasilan' => $request->penghasilan_ibu,
        ]);

        $berkasList = [
            'kk'         => 'KK',
            'akta'       => 'Akta Kelahiran',
            'sertifikat' => 'Sertifikat',
        ];

        foreach ($berkasList as $field => $jenis) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $path = $file->store('berkas', 'public');
                Berkas::create([
                    'student_id' => $student->id,
                    'jenis'      => $jenis,
                    'nama_file'  => $file->getClientOriginalName(),
                    'path_file'  => $path,
                ]);
            }
        }

        return redirect('/dashboard')->with('success', 'Pendaftaran berhasil dikirim!');
    }
}