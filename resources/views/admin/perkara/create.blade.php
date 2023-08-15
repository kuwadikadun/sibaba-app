@extends('admin.master.master')

@section('content')
<div class="pagetitle">
    <h1>Tambah Kriteria</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">perkara</li>
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
            <h5 class="card-title">Data perkara</h5>

            <!-- Vertical Form -->
            <form class="row g-3" action="/admin/perkara/store" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="col-12">
                <label for="inputNanme4" class="form-label">No Perkara</label>
                <input type="text" readonly class="form-control" value="{{ $no_perkara }}" id="no_perkara" name="no_perkara">
              </div>
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Nama Barang</label>
                {{-- <input type="text" class="form-control" value="{{ old('nama_pegawai') }}"id="nama_pegawai" name="nama_pegawai"> --}}
                <select name="id_barang" id="id_barang" class="form-control" >
                  <option value="" disabled>Pilih Barang</option>
                  @foreach ($barang as $data)
                      <option value="{{$data->id}}">{{$data->no_barang}} | {{$data->nama_barang}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Lokasi Penyimpanan</label>
                {{-- <input type="text" class="form-control" value="{{ old('nama_pegawai') }}"id="nama_pegawai" name="nama_pegawai"> --}}
                <select name="id_penyimpanan" id="id_penyimpanan" class="form-control" >
                  <option value="" disabled>Pilih Penyimpanan</option>
                  @foreach ($penyimpanan as $data)
                      <option value="{{$data->id}}">{{$data->nama_lokasi}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Tanggal Perkara</label>
                <input type="date"  class="form-control" value="{{ old('tanggal_perkara') }}" id="tanggal_perkara" name="tanggal_perkara">
              </div>
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Status</label>
                <input type="text"  class="form-control" value="{{ old('status') }}" id="status" name="status">
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary  me-1 mb-1">Submit</button>
           <a href="/admin/pegawai" class="btn btn-danger me-1 mb-1">Batal</a>
              </div>
            </form><!-- Vertical Form -->

          </div>
        </div>

       

      </div>
    </div>
  </section>

@endsection