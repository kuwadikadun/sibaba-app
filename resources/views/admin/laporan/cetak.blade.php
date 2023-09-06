@extends('admin.master.master')

@section('content')
<div class="pagetitle">
    <h1>Tambah Pelaku</h1>
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
           
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Tanggal Awal</label>
                <input type="date"  class="form-control" value="{{ old('tanggal_awal') }}" id="tanggal_awal" name="tanggal_awal">
              </div>
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Tanggal Akhir</label>
                <input type="date"  class="form-control" value="{{ old('tanggal_akhir') }}" id="tanggal_akhir" name="tanggal_akhir">
              </div>
            
                        
              <div class="text-center mt-5">
            
                       {{-- <a href="/admin/pelaku" class="btn btn-danger me-1 mb-1">Batal</a> --}}
                       <a href="" onclick="this.href='/admin/cetak-perkara-pertanggal/'+ document.getElementById('tanggal_awal').value +
                       '/' + document.getElementById('tanggal_akhir').value " 
                       target="_blank" class="btn btn-primary me-1 mb-1">Cetak</a>
              </div>
          

          </div>
        </div>

       

      </div>
    </div>
  </section>

@endsection