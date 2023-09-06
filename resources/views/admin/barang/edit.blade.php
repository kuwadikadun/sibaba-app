@extends('admin.master.master')

@section('content')
<div class="pagetitle">
    <h1>Edit Barang Sitaan</h1>
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
              @foreach ($barang as $data)
              <form class="row g-3" action="/admin/barang/update/{{$data->id}}" method="POST" >
                @csrf
                @method('PATCH')
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">No Barang</label>
                  <input type="text" readonly class="form-control" value="{{ $data->no_barang }}" id="no_barang" name="no_barang" readonly disabled>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Nama Barang</label>
                  <input type="text" class="form-control" value="{{ $data->nama_barang}}"id="nama_barang" name="nama_barang">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Jenis Barang</label>
                  <input type="text" class="form-control" value="{{ $data->jenis_barang}}"id="jenis_barang" name="jenis_barang">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Deskripsi</label>
                  <input type="text" class="form-control" value="{{ $data->deskripsi}}"id="deskripsi" name="deskripsi">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Pelaku</label>
                  <input type="text" class="form-control" value="{{ $data->Pelaku->nama_pelaku}}"id="pelaku" name="pelaku" readonly disabled>
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Foto</label>
                  <input type="file" class="form-control" value="{{ old('foto') }}"id="foto" name="foto">
                  @if ($data->foto)
                  <br>
                  <img width="150px" src="{{asset('img/' .$data->foto)}}" alt="Foto">
                    {{-- <p>File saat ini: {{ $user->cv }}</p> --}}
          @endif
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary  me-1 mb-1">Submit</button>
             <a href="/admin/barang" class="btn btn-danger me-1 mb-1">Batal</a>
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