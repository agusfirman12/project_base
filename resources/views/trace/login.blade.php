@extends('layouts.main')

@section('container')
<style>
    body{
    background-color: #1751a8;
}
</style>
<div class="row justify-content-center">
    <div class="image-section justify-content-center d-flex mt-3">
        <img class="mb-4" src="{{ asset('assets/img/logo.png') }}" width="120px">
    </div>
    <div class="title text-center text-white">
        <h2>Selamat Datang</h2>
        <h5>Di Sistem Lacak Alumni SMK Negeri Ihya'Ulumudin</h5>
    </div>
    <div class="col-md-4 mt-3">
        <main class="form-signin bg-white px-3 py-4 rounded-3 shadow">
            <form action="{{ route('loginProcess') }}" method="post">
                @csrf
                <div class="help justify-content-center d-flex mb-3">
                    <small class="fst-italic">Jika Lupa Nisn silakan Lihat <a href="https://nisn.data.kemdikbud.go.id/index.php/Cindex/formcaribynama" target="blank"> Disini</a></small>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="nisn" class="form-control @error('nisn') is-invalid @enderror" id="floatingInput" placeholder="35xxxxxxx" required value="{{ old('nisn') }}">
                    <label for="floatingInput">NISN</label>
                    @error('nisn')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Nama" required value="{{ old('name') }}">
                    <label for="floatingInput">Nama</label>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="floatingInput">Email</label>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3" >
                    <input type="number" name="nomer" class="form-control @error('nomer') is-invalid @enderror" id="floatingPassword" placeholder="Nomor Telephone" required>
                    <label for="floatingPassword">nomer Whatsapp</label>
                    @error('nomer')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <select aria-label="Default select example"  class="form-select @error('tahun_lulus') is-invalid @enderror" id="floatingPassword" name="jurusan"  required>
                        <option selected>Jurusan</option>
                        <option value="TRPL">TRPL (Teknologi Rekayasa Perangkat Lunak)</option>
                        <option value="Mesin">Mesin</option>
                        <option value="Sipil">Sipil</option>
                      </select>
                      @error('tahun_lulus')
                      <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                </div>
               
                <div class="form-floating mb-3">
                    <input type="number" name="tahun_lulus" class="form-control @error('tahun_lulus') is-invalid @enderror" id="floatingPassword" placeholder="YYYY" required>
                    <label for="floatingPassword">Tahun Lulus</label>
                    @error('tahun_lulus')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg my-3 text-white shadow" style="background-color: #154286" type="submit">Mulai</button>
            </form>
        </main>
    </div>
</div>
@endsection