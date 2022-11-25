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
        <form action="{{ route('soal4-process') }}" method="post">
          @csrf
          <input type="hidden" name="id" value="{{ $user->id }}">
          <input type="hidden" name="nisn" value="{{ $user->nisn }}">
            <div class="title pt-4">
                <h4>Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini? </h4>
               </div>
            <div class="container"> 
              <div class="  label-background form-check border rounded"  style="padding:5px; margin: 2px; ">
                <button class="btn  button"  type="button">
                 <input type="radio" name="tingkat" id="from-AFIRMASI" value="setingkat lebih tinggi" style="width: 20px;">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Setingkat Lebih Tinggi
                </label> 
              
                </button>
              </div>
       
              <div class="  label-background form-check border rounded"  style="padding:5px; margin: 2px; ">
                <button class="btn  button"  type="button">
                 <input type="radio" name="tingkat" id="from-AFIRMASI" value="tingkat sama">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Tingkat yang sama
                </label> 
              
                </button>
              </div>

              <div class="  label-background form-check border rounded"  style="padding:5px; margin: 2px; ">
                <button class="btn  button"  type="button">
                 <input type="radio" name="tingkat" id="from-AFIRMASI" value="tingkat rendah">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Setingkat Lebih Rendah
                </label> 
              
                </button>
              </div>
            
                <div class="  label-background form-check border rounded"  style="padding:5px; margin: 2px; ">
                  <button class="btn  button"  type="button">
                   <input type="radio" name="tingkat" id="from-AFIRMASI" value="tidak perluh pendidikan tinggi">
                   <label class="form-check-label" for="from-AFIRMASI" >
                   Tidak Perlu Pendidikan Tinggi
                  </label> 
                
                  </button>
                </div>

            <div class="button d-flex justify-content-between" style="margin-top: 20px; margin-left:10px; margin-right:10px;">
                 <a href="{{ route('soal3',['nisn'=>$user->nisn]) }}">
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