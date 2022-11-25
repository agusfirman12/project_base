@extends('layouts/main')

@section('container')
<section style="background-color: rgb(63, 63, 180);">
  <div class="container" style="padding-top: 50px;">
      <h1 style="color: white;">Hallo, {{ $user->name }}</h1>
      <p style="color:wheat;">Ayo Persiapkan Tujuan Hidupmu, Masa Sekolah bukan Akhir segalahnya Semangat <br> Jadilah Orang Yang Bermanfaat</p>
    </div>
  </div>

</section><!-- End Hero -->

<div class="container">


  <section id="about" class="about">
    <div class="container" data-aos="fade-up" style="padding: 20px;">

      <div class="section-title text-center">
        <h2>Tracer Study</h2>
      </div>

      <div class="row justify-content-center " style="padding: 20px;">
        <form action="{{ route('soal1-process') }}" method="POST">
          @csrf
              <input type="hidden" name="id_user" value="{{ $user->id }}">
              <input type="hidden" name="nisn" value="{{ $user->nisn }}">
            <div class="title pt-4">
                <h4>1. Sebutkan sumberdana dalam pembiayaan kuliah ?</h4>
               </div>
            <div class="container"> 
    
              <div class="  label-background form-check border rounded"  style="padding:5px; margin: 2px; ">
                <button class="btn  button"  type="button">
                 <input type="radio" name="akademi" id="from-AFIRMASI" value="biaya-sendiri" style="width: 20px;">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Biaya Sendiri / Keluarga
                </label> 
              
                </button>
              </div>
       
              <div class="  label-background form-check border rounded"  style="padding:5px; margin: 2px; ">
                <button class="btn  button"  type="button">
                 <input type="radio" name="akademi" id="from-AFIRMASI" value="bidikmisi">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Beasiswa BidikMisi
                </label> 
              
                </button>
              </div>

              <div class="  label-background form-check border rounded"  style="padding:5px; margin: 2px; ">
                <button class="btn  button"  type="button">
                 <input type="radio" name="akademi" id="from-AFIRMASI" value="PPA">
                 <label class="form-check-label" for="from-AFIRMASI" >
                  Beasiswa PPA
                </label> 
              
                </button>
              </div>
            
                <div class="  label-background form-check border rounded"  style="padding:5px; margin: 2px; ">
                  <button class="btn  button"  type="button">
                   <input type="radio" name="akademi" id="from-AFIRMASI" value="AFIRMASI">
                   <label class="form-check-label" for="from-AFIRMASI" >
                   Beasiswa AFIRMASI
                  </label> 
                
                  </button>
                </div>

                <div class="  label-background form-check border rounded"  style="padding:5px; margin: 2px; ">
                  <button class="btn  button"  type="button">
                   <input type="radio" name="akademi" id="from-AFIRMASI" value="Swasta">
                   <label class="form-check-label" for="from-AFIRMASI" >
                    Beasiswa Perusahaan / Swasta
                  </label> 
                
                  </button>
                </div>

                <div class="  label-background form-check border rounded" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"  style="padding:5px; margin: 2px; ">
                  <button class="btn  button"  type="button">
                   <input type="radio" id="from-AFIRMASI1">
                   <label class="form-check-label" for="from-AFIRMASI1" >
                    Lainya, Tuliskan
                  </label> 
                
                  </button>
                </div>



          <div class="button d-flex justify-content-end" style="margin-top: 20px; margin-left:10px; margin-right:10px;">
              <button type="submit" class="btn btn-success">Simpan</button>
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
          <h5 class="modal-title" id="exampleModalLabel">Tuliskan Nama Beasiswa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('soal1-process') }}" method="POST">
            @csrf
            <input type="hidden" name="id_user" value="{{ $user->id }}">
              <input type="hidden" name="nisn" value="{{ $user->nisn }}">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nama:</label>
              <input type="text" class="form-control" id="recipient-name" name="akademi">
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