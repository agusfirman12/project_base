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
        <form action="{{ route('soal7-process') }}" method="post">
          @csrf
          <input type="hidden" name="status" value="finised">
            <div class="title pt-4">
                <h4>7. Apakah perusahaan/wirausaha anda terdampak karena adanya virus corona?</h4>
               </div>
            <div class="container"> 
              <div class="  label-background form-check border rounded "data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"   style="padding:15px; margin: 2px; ">
                 <input type="radio" name="corona" id="from-AFIRMASI" value="biaya-sendiri" style="width: 20px;">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Ya
                </label> 

              </div>
       
              <div class="  label-background form-check border rounded"  style="padding:15px; margin: 2px; ">
                 <input type="radio" name="biaya" id="from-AFIRMASI" value="bidikmisi">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Tidak
                </label> 
              </div>


            <div class="button d-flex justify-content-between" style="margin-top: 20px; margin-left:10px; margin-right:10px;">
                  <a href="{{ route('soal6',['user'=>$user->id]) }}">
                   <button type="button" class="btn btn-primary">Back</button>
                </a> 
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">finish</button>
              
            </div>
        </form>
      </div>    
    </div>
  </section><!-- End About Us Section -->



</div>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Silahkan pilih dampaknya</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('soal7-process') }}" method="POST">
            @csrf
            <div class="mb-3">
              <input type="radio" class="form-control" id="recipient-name">
              <label for="recipient-name" class="col-form-label">Kehilangan Pekerjaan</label>
              
            </div>
            <div class="mb-3">
              <input type="radio" class="form-control" id="recipient-name">
              <label for="recipient-name" class="col-form-label">Pendapatan Menurun</label>
            </div>
            <div class="mb-3">
              <input type="radio" class="form-control" id="recipient-name">
              <label for="recipient-name" class="col-form-label">Pendapatan Meningkat</label>
            </div>
            <div class="mb-3">
              <input type="radio" class="form-control" id="recipient-name">
              <label for="recipient-name" class="col-form-label">Ahli Profesi</label>
              
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Lainya</label>
              <input type="text" class="form-control" id="recipient-name">
              
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>

@endsection