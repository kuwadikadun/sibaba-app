@extends('admin.master.master')

@section('content')
<div class="pagetitle">
    <h1>Tambah Penyimpanan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Penyimpanan</li>
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
            <h5 class="card-title">Data penyimpanan</h5>

            <!-- Vertical Form -->
            <form class="row g-3" action="/admin/penyimpanan/store" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Nama Lokasi</label>
                <input type="text"  class="form-control" value="{{ old('nama_lokasi') }}" id="nama_lokasi" name="nama_lokasi">
              </div>
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Alamat Lokasi</label>
                <input type="text" class="form-control" value="{{ old('alamat_lokasi') }}"id="alamat_lokasi" name="alamat_lokasi">
              </div>
              
              <div class="text-center">
                <button type="submit" class="btn btn-primary  me-1 mb-1">Submit</button>
           <a href="/admin/penyimpanan" class="btn btn-danger me-1 mb-1">Batal</a>
              </div>
            </form><!-- Vertical Form -->

          </div>
        </div>

       

      </div>
    </div>
  </section>

@endsection