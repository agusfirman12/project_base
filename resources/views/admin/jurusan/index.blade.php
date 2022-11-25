@extends('admin.layouts.main')

@section('container')
<div class="content-wrapper">
  <div class="container mt-3">
    <div class="box-header with-border">
      <h3 class="box-title">Data Jurusan</h3>
          <a href="{{ route('add-jurusan') }}" style=" float:right;" type="button" class="btn btn-rounded btn-success mb-5">Tambah Jurusan</a>
    </div>
    <table id="table" class="table table-bordered">
      <tr>
        <th>kode jurusan</th>
        <th>jurusan</th>
        <th class="aksi">aksi</th>
      </tr>
      @forelse($jurusan as $data) 
      <tr>
        <td>{{ $data->kode_jurusan }}</td>
        <td>{{$data->nama_jurusan}}</td>
        <td class="aksi">
          <a href="{{ route('ubah-jurusan',$data->id) }}" class="btn btn-info">Edit</a>
          <a href="" id="delete" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="6"><h3 class="text-center" style="opacity: 50%"> Belum Data Alumni</h3></td>
      </tr>
      @endforelse 
    </table>
  </div>
</div>
@endsection