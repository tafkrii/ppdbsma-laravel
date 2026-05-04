<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $pendaftar = User::where('role', 'student')->with('student')->get();
        return view('admin.admin', compact('pendaftar'));
    }
}