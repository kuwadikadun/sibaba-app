@extends('admin.master.master')

@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Kriteria Card -->
          <div class="col-xxl-6 col-md-6">
            <div class="card info-card sales-card">

          
              <div class="card-body">
                <h5 class="card-title">Data  <span>| Pelaku</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-circle"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$total_pelaku}}</h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah Pelaku</span> 

                  </div>
                </div>
              </div>

            </div>
          </div><!-- Kriteria Card -->

          <!-- Sub Kriteria Card -->
          <div class="col-xxl-6 col-md-6">
            <div class="card info-card revenue-card">

            <div class="card-body">
                <h5 class="card-title">Data <span>| Barang</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people-fill"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$total_barang}}</h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah Barang</span> 
                  </div>
                </div>
              </div>

            </div>
          </div><!-- Pegawai Card -->

                     <!-- Sub Kriteria Card -->
                     <div class="col-xxl-6 col-md-6">
                      <div class="card info-card revenue-card">
        
                      <div class="card-body">
                          <h5 class="card-title">Data <span>| Penyimpanan</span></h5>
        
                          <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                              <i class="bi bi-book-fill"></i>
                            </div>
                            <div class="ps-3">
                              <h6>{{$total_penyimpanan}}</h6>
                              <span class="text-success small pt-1 fw-bold">Jumlah Penyimpan</span> 
                            </div>
                          </div>
                        </div>
        
                      </div>
                    </div><!-- Pegawai Card -->

          <!-- Penilaian Card -->
          <div class="col-xxl-6 col-md-6">
            <div class="card info-card revenue-card">

            <div class="card-body">
                <h5 class="card-title">Data <span>| Perkara</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-book-half"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{$total_perkara}}</h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah Perkara</span> 
                  </div>
                </div>
              </div>

            </div>
          </div><!-- Penlian Card -->

       
  </section>

@endsection