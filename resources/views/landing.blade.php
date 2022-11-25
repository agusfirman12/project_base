@extends('layouts.main')

@section('container')
<style>
    body{
    background-color: #1751a8;
}
</style>
<div class="row justify-content-center" style="margin-bottom: 100px">
    <div class="image-section justify-content-center d-flex mt-5">
        <img class="mb-4" src="{{ asset('assets/img/logo.png') }}" width="120px">
    </div>
    <div class="title text-center text-white">
        <h2>Selamat Datang</h2>
        <h5>Di Sistem Lacak Alumni SMK Negeri Ihya'Ulumudin</h5>
    </div>
    <div class="col-md-3" style="margin-top: 50px">
        <main class="form-signin bg-white px-4 py-4 rounded-3 shadow">
            <form action="{{ route('pilih-user') }}" method="post">
                @csrf
                <div class="title justify-content-center d-flex my-3 ">
                    <p class="fst-italic" style="opacity: 50%">Silahkan Pilih akses untuk melanjutkan</p>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select form-select-sm" name="tipe" aria-label=".form-select-sm example">
                        <option selected>Select User Type</option>
                        <option value="1">Alumni</option>
                        <option value="2">Teknisi</option>
                    </select>
                </div>
                <button class="w-100 btn btn-lg my-3 text-white shadow" style="background-color: #154286" type="submit">Mulai</button>
            </form>
        </main>
    </div>
</div>
@endsection