@extends('admin.layouts.main')

@section('container')
<div class="content-wrapper">
    <div class="container mt-3">
      <div class="box-header with-border">
        <h3 class="box-title">Tambah Data Jurusan</h3>
      </div>

      <div class="main-section">
        <form method="post" action="{{ route('process-add-jurusan') }}">
            @csrf
                <div class="row mt-5">
                    <div class="col-6">
                        <div class="row mt-2">
                            <div class="form-group">
                                <h5>kode Jurusan <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="kode" class="form-control" required data-validation-required-message="This field is required"> </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="form-group">
                                <h5>Nama Jurusan<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="jurusan" class="form-control" required data-validation-required-message="This field is required"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="text-xs-right mt-3">
                <button type="submit" class="btn btn-rounded btn-info">Simpan</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection