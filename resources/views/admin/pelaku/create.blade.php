@extends('admin.master.master')

@section('content')
<div class="pagetitle">
    <h1>Tambah Pelaku</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Pelaku</li>
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
            <h5 class="card-title">Data Pelaku</h5>

            <!-- Vertical Form -->
            <form class="row g-3" action="/admin/pelaku/store" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="col-12">
                <label for="inputNanme4" class="form-label">NIK</label>
                <input type="text"  class="form-control" value="{{ old('nik') }}" id="nik" name="nik">
              </div>
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Nama Pelaku</label>
                <input type="text"  class="form-control" value="{{ old('nama_pelaku') }}" id="nama_pelaku" name="nama_pelaku">
              </div>
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Alamat</label>
                <input type="text"  class="form-control" value="{{ old('alamat') }}" id="alamat" name="alamat">
              </div>
                        
              <div class="text-center">
                <button type="submit" class="btn btn-primary  me-1 mb-1">Submit</button>
           <a href="/admin/pelaku" class="btn btn-danger me-1 mb-1">Batal</a>
              </div>
            </form><!-- Vertical Form -->

          </div>
        </div>

       

      </div>
    </div>
  </section>

@endsection