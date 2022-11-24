@extends('layouts.main')

@section('container')
<style>
    body{
    background-color: #1751a8;
}
</style>
<div class="row justify-content-center">
    <div class="image-section justify-content-center d-flex mt-5">
        <img class="mb-4" src="{{ asset('assets/img/logo.png') }}" width="120px">
    </div>
    <div class="title text-center text-white">
        <h2>Login Admin</h2>
        <h5>Di Sistem Lacak Alumni SMK Negeri Ihya'Ulumudin</h5>
    </div>
    <div class="col-md-3" style="margin-top: 50px">
        <main class="form-signin bg-white px-3 py-4 rounded-3 shadow">
            <form action="{{ route('loginAdmin') }}" method="post">
                @csrf
                <div class="title justify-content-center d-flex my-3 ">
                    <p class="fst-italic" style="opacity: 50%">Silahkan Login Jika Anda Admin</p>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="35xxxxxxx" required value="{{ old('username') }}">
                    <label for="floatingInput">Username</label>
                    @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="Password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingInput" placeholder="Nama" required value="{{ old('password') }}">
                    <label for="floatingInput">Password</label>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg my-3 text-white shadow" style="background-color: #154286" type="submit">Login</button>
            </form>
        </main>
    </div>
</div>
@endsection