@extends('admin.master.master')

@section('content')
<div class="pagetitle">
    <h1>Tambah Akun</h1>
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
            <h5 class="card-title">Data Akun</h5>

            <!-- Vertical Form -->
            <form class="row g-3" action="/admin/akun/store" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Nama Akun</label>
                <input type="text"  class="form-control" value="{{ old('name') }}" id="name" name="name">
              </div>
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" value="{{ old('email') }}"id="email" name="email">
              </div>
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Password</label>
                <input type="password" class="form-control" value="{{ old('password') }}"id="password" name="password">
              </div>
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Role</label>
                <input type="text" class="form-control" value="admin" id="role" readonly name="role">


                {{-- <select name="role" id="role" class="form-control">
                  <option disabled value="">Pilih Role</option>
      
                      <option value="admin">Admin</option>
                      <option value="user">User</option>
                      <option value="kepala bidang">kepala bidang</option>
                      
           
              </select> --}}
                {{-- <input type="text" class="form-control" value="{{ old('role') }}"id="role" name="role"> --}}
              </div>
              
              <div class="text-center">
                <button type="submit" class="btn btn-primary  me-1 mb-1">Submit</button>
           <a href="/admin/akun" class="btn btn-danger me-1 mb-1">Batal</a>
              </div>
            </form><!-- Vertical Form -->

          </div>
        </div>

       

      </div>
    </div>
  </section>

@endsection