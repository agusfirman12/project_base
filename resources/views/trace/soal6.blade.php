@extends('layouts/main')


@section('container')
<section style="background-color: rgb(63, 63, 180);">
  <div class="container" style="padding-top: 50px;">
      <h1 style="color: white;">Hallo, {{$user->name}}</h1>
      <p style="color:wheat;">Ayo Persiapkan Tujuan Hidupmu, Masa Sekolah bukan Akhir segalahnya Semangat <br> Jadilah Orang Yang Bermanfaat</p>
    </div>
  </div>

</section>
<div class="container">


  <section id="about" class="about">
    <div class="container" data-aos="fade-up" style="padding: 20px;">

      <div class="section-title text-center">
        <h2>Pelacak Alumni</h2>
      </div>

      <div class="row justify-content-center " style="padding: 20px;">
        <form action="{{ route('soal6-process') }}" method="post">
          @csrf
          <input type="hidden" name="id" value="{{ $user->id }}">
          <input type="hidden" name="nisn" value="{{ $user->nisn }}">
            <div class="title pt-4">
                <h4>6. Skill Yang Ingin Kamu Kembangkan</h4>
               </div>
            <div class="container"> 
              <div class="  label-background form-check  rounded"  style="padding:5px; ">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Dari Pekerjaan Utama (Rp.)
                </label>
                 <input class="form-control" type="number" name="gaji_utama" id="from-AFIRMASI"  required>
                 
              
              </div>
       
              <div class="  label-background form-check rounded"  style="padding:5px; margin: 2px; ">
                <label class="form-check-label" for="from-AFIRMASI" >
                  Dari Lembur dan Tip (Rp.)
                </label> 
                 <input class="form-control" type="number" name="lembur" id="from-AFIRMASI" required>
              
              
              </div>

              <div class="label-background form-check rounded "  style="padding:5px; ">
              
                <label class="form-check-label" for="from-AFIRMASI" >
                  Dari Perkerjaan Lainya (Rp.)
                </label> 
                 <input class="form-control" type="number" name="gaji_lain" id="from-AFIRMASI" required>
               

              </div>

                 

            <div class="button d-flex justify-content-between" style="margin-top: 20px; margin-left:10px; margin-right:10px;">
                  <a href="{{ route('soal5',['user'=>$user->nisn]) }}">
                   <button type="button" class="btn btn-primary">Back</button>
                </a> 
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
            </div>
        </form>
      </div>    
    </div>
  </section><!-- End About Us Section -->



</div>


@endsection