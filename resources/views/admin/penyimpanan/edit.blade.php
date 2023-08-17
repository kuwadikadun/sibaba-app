@extends('admin.master.master')
@section('content')
<div class="pagetitle">
    <h1>Edit Pegawai</h1>
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
            <h5 class="card-title">Data Pegawai</h5>
              @foreach ($penyimpanan as $data)
              <form class="row g-3" action="/admin/penyimpanan/update/{{$data->id}}" method="POST" >
                @csrf
                @method('PATCH')
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Nama Lokasi</label>
                  <input type="text" class="form-control" value="{{ $data->nama_lokasi }}" id="nama_lokasi" name="nama_lokasi">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Alamat Lokasi</label>
                  <input type="text" class="form-control" value="{{ $data->alamat_lokasi}}"id="alamat_lokasi" name="alamat_lokasi">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary  me-1 mb-1">Submit</button>
             <a href="/admin/penyimpanan" class="btn btn-danger me-1 mb-1">Batal</a>
                </div>
              </form><!-- Vertical Form -->
  
              @endforeach
            <!-- Vertical Form -->
           
          </div>
        </div>

       

      </div>
    </div>
  </section>

@endsection