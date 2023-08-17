@extends('admin.master.master')

@section('content')
<div class="pagetitle">
    <h1>Edit Pelaku</h1>
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
              @foreach ($pelaku as $data)
              <form class="row g-3" action="/admin/pelaku/update/{{$data->id}}" method="POST" >
                @csrf
                @method('PATCH')
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">NIK</label>
                  <input type="text" readonly class="form-control" value="{{ $data->nik }}" id="nik" name="nik">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Nama Pelaku</label>
                  <input type="text" class="form-control" value="{{ $data->nama_pelaku}}"id="nama_pelaku" name="nama_pelaku">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Alamat</label>
                  <input type="text" class="form-control" value="{{ $data->alamat}}"id="alamat" name="alamat">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary  me-1 mb-1">Submit</button>
             <a href="/admin/pelaku" class="btn btn-danger me-1 mb-1">Batal</a>
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