@extends('layout.main')

@section('title', 'Penyimpanan')

@section('content')
<style>

</style>
<div class="page-heading">
    <h3>Penyimpanan</h3>
    {{-- <a href="/data-barang/tambah" class="btn btn-primary">Tambah Data Barang</a> --}}
  </div>
  @foreach ($penyimpanan as $data)
  <div class="col-xl-4 col-md-6 col-sm-12">
    <div class="card">
        <a href="/penyimpanan/{{ $data->id }}">
        <div class="card-content text-center">
            <div class="card-body">
                <h3 class="">{{ $data->nama_lokasi }}</h3>
            </div>
        </div>
    </a>    
    </div>
  @endforeach
  
  @endsection