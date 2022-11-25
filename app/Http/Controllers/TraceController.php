<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\alumni;
use App\Models\Tracer_answer;
use App\Models\Jurusan;
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
        
        //cek apakah user pernah mendaftar di tracer ?
       if(alumni::where('nisn',$request->nisn)->first()==!null) {
        $request->validate([
            'nisn' => 'required|min:10'
        ]);
        
        //cek user apakah user pernah melakukan finis question
        if(Tracer_answer::select('status')->where('nisn')->first()==null){
            $user = alumni::where('nisn',$request->nisn)->first();

            return redirect()->route('soal1',['nisn' => $user->nisn]);
        }
       }else if (alumni::where('nisn', $request->nisn)->first()==null){
         $request->validate([
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
        
        
        
        return redirect()->route('soal1',['nisn' => $data->nisn]);
       }
       
    }



    //soal 1
    public function viewSoal1($nisn){
    
        $user = alumni::where('nisn',$nisn)->first();
        return view('trace/page',['user'=> $user]);
    }

    public function soal1Process(Request $request){
        
        if(Tracer_answer::where('nisn',$request->nisn)->first()==!null) {
             $user = Tracer_answer::where('nisn',$request->nisn)->first();
             $user->akademi = $request->akademi;
             $user->save(); 
             return redirect()->route('soal2',['nisn'=>$request->nisn]); 
        }else if (Tracer_answer::where('nisn',$request->nisn)->first()==null){
            $request->validate([
                'akademi' => 'required',
            ]);
    
            $user = new Tracer_answer();
            $user->id_user= $request->id_user;
            $user->nisn = $request->nisn;
            $user->akademi = $request->akademi;
            $user->save();
            return redirect()->route('soal2',['nisn'=>$request->nisn]); 
        }
    }

    //soal 2
    public function viewSoal2($nisn){
        $user = alumni::where('nisn',$nisn)->first();
        return view('trace/soal2',['user'=>$user]);
    }

    public function soal2Process(Request $request){

        $user = Tracer_answer::where('nisn',$request->nisn)->first();
        $user->kategori = $request->kategori;
        $user->save(); 

        return redirect()->route('soal3',['nisn'=>$request->nisn]);
        
     
    }

        //soal 3
        public function viewSoal3($nisn){
            $user = alumni::where('nisn',$nisn)->first();
            return view('trace/soal3',['user'=>$user]);
        }
    
        public function soal3Process(Request $request){
            $request->validate([
                'tema'=>'required'
            ]);
            $user = Tracer_answer::where('nisn',$request->nisn)->first();
            $user->tema = $request->tema;
            $user->nama_perusahaan = $request->nama_perusahaan;
            $user->jabatan =$request->jabatan;
            $user->jenis_perusahaan = $request->jenis_perusahaan;
            $user->kota = $request->kota;
            $user->nomer = $request->nomer;
            $user->lesensi = $request->lesensi;
            $user->nama_usaha = $request->nama_usaha;
            $user->bidang = $request->bidang;
            $user->sesuai = $request->sesuai;
            $user->save(); 
            return redirect()->route('soal4',['nisn' => $user->nisn]);
            
            
            
        }

        //soal4

    public function viewSoal4($nisn){
        $user = alumni::where('nisn',$nisn)->first();
        return view('trace/soal4',['user'=>$user]);
    }

    public function soal4Process(Request $request){

        $user = Tracer_answer::where('nisn',$request->nisn)->first();
        $user->tingkat = $request->tingkat;
        $user->save(); 
        return redirect()->route('soal5',$request->nisn);
        
        
        
    }

    //soal5
        
        public function viewSoal5($nisn){
            $user = alumni::where('nisn',$nisn)->first();

            return view('trace/soal5',['user'=>$user]);
        }
    
        public function soal5Process(Request $request){
            $user = Tracer_answer::where('nisn',$request->nisn)->first();
            $user->hubungan = $request->hubungan;
            $user->save(); 
            return redirect()->route('soal6',['nisn'=>$request->nisn]);
            
            
            
        }

            //soal 6

    public function viewSoal6($nisn){
        $user = alumni::where('nisn',$nisn)->first();

        return view('trace/soal6',['user'=>$user]);

     
    }

    public function soal6Process(Request $request){
        $user = Tracer_answer::where('nisn',$request->nisn)->first();
        $user->gaji_utama = $request->gaji_utama;
        $user->lembur = $request->gaji_lembur;
        $user->gaji_lain = $request->gaji_lain;
        $user->save(); 
        return redirect()->route('soal7',['nisn'=>$request->nisn]);
        
        
        
    }



        //soal 7
        public function viewSoal7($nisn){
            $user = alumni::where('nisn',$nisn)->first();

            return view('trace/soal7',['user'=>$user]);

        }
    
        public function soal7Process(Request $request){
            $user = Tracer_answer::where('nisn',$request->nisn)->first();
            $user->terdampak = $request->terdampak;
            $user->dampak_corona = $request->dampak_corona;
            $user->status = $request->status;
            $user->save(); 
            
            return redirect()->route('finish');
            
            
            
        }
        public function finish(){
            return view('trace/page-success');
        }
}










