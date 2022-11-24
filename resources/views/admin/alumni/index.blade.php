@extends('admin.layouts.main')

<style>
  @media print{
    .aksi{
      display: none;
    } 

    #cetak,#navbar{
      display: none;
    }
  }
</style>

@section('container')
<div class="content-wrapper">
  <div class="container mt-3">
    <div class="box-header with-border">
      <h3 class="box-title">Data Alumni Jurusan {{ $titleJudul }}</h3>
          <a href="" style=" float:right;" id="cetak" type="button" class="btn btn-rounded btn-success mb-5">Cetak Daftar</a>
    </div>
    <table id="table" class="table table-bordered">
      <tr>
        <th>nisn</th>
        <th>nama</th>
        <th>email</th>
        <th>nomor Hp</th>
        <th class="aksi">aksi</th>
      </tr>
      @forelse($alumni as $data) 
      <tr>
        <td>{{ $data->nisn }}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->nomer}}</td>
        <td class="aksi">
          <a href="" class="btn btn-info">Edit</a>
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