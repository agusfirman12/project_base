<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\alumni;
use Illuminate\Http\Request;

class TraceController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function choseUser(Request $request)
    {
        if ($request->tipe == 1) {
            return redirect('/login-alumni');
        } else {
            return redirect('/login-admin');
        }
    }

    public function login()
    {
        return view('trace.login');
    }

    public function loginProcess(Request $request)
    {
        $credentials = $request->validate([
            'nisn' => 'required|unique:alumnis|min:10',
            'name' => 'required',
            'email' => 'required|unique:alumnis',
            'nomer' => 'required|unique:alumnis|min:12',
            'jurusan' => 'required',
            'tahun_lulus' => 'required'
        ]);

        $data = new alumni();
        $data->nisn = $request->nisn;
        $data->name =  $request->name;
        $data->email = $request->email;
        $data->nomer = $request->nomer;
        $data->jurusan = $request->jurusan;
        $data->tahun_lulus = $request->tahun_lulus;
        $data->save();
        return view('traceStudy');
    }
}
