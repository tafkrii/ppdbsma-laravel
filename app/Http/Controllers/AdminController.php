<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;

class AdminController extends Controller
{
    // Dashboard - tampilkan semua pendaftar
    public function dashboard()
    {
        $pendaftar = User::where('role', 'student')->with('student')->get();
        return view('admin.admin', compact('pendaftar'));
    }

    // Halaman untuk edit status siswa
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.edit', compact('student'));
    }

    // Proses update status
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,diterima,ditolak',
        ]);

        $student = Student::findOrFail($id);
        $student->status = $request->status;
        $student->save();

        return redirect('/admin')->with('success', 'Status siswa berhasil diperbarui.');
    }

    // Proses delete data student (bukan user)
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/admin')->with('success', 'Data pendaftar berhasil dihapus.');
    }
}