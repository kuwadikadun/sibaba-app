@extends('admin.master.master')

@section('content')
<div class="pagetitle">
    <h1>Tambah Barang Sitaan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Barang Sitaan</li>
        <li class="breadcrumb-item active">Create</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Barang Sitaan</h5>

            <!-- Vertical Form -->
            <form class="row g-3" action="/admin/barang/store" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="col-12">
                <label for="inputNanme4" class="form-label">No Barang</label>
                <input type="text" readonly class="form-control" value="{{ $no_barang }}" id="no_barang" name="no_barang">
              </div>
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Nama Barang</label>
                <input type="text"  class="form-control" value="{{ old('nama_barang') }}" id="nama_barang" name="nama_barang">
              </div>
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Jenis Barang</label>
                <input type="text"  class="form-control" value="{{ old('jenis_barang') }}" id="jenis_barang" name="jenis_barang">
              </div>
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" value="{{ old('deskripsi') }}"id="deskripsi" name="deskripsi">
              </div>
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Nama Pelaku</label>
                {{-- <input type="text" class="form-control" value="{{ old('nama_pelaku') }}"id="nama_pelaku" name="nama_pelaku"> --}}
                <select name="id_pelaku" id="id_pelaku" class="form-control" >
                  <option value="" disabled>Pilih Pelaku</option>
                  @foreach ($pelaku as $data)
                      <option value="{{$data->id}}">{{$data->nik}} | {{$data->nama_pelaku}}</option>
                  @endforeach
                </select>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary  me-1 mb-1">Submit</button>
           <a href="/admin/barang" class="btn btn-danger me-1 mb-1">Batal</a>
              </div>
            </form><!-- Vertical Form -->

          </div>
        </div>

       

      </div>
    </div>
  </section>

@endsection