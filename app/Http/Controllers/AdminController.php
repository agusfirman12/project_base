<?php

namespace App\Http\Controllers;

use App\Models\alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function processLogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt($credentials) == true) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function dashboard()
    {
        return view('admin.index');
    }

    public function viewAlumni($jurusan)
    {
        $alumni['alumni'] = alumni::where('jurusan', $jurusan)->get();
        return view('admin.alumni.index', $alumni, ['titleJudul' => $jurusan]);
    }
}
