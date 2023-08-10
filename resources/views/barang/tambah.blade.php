@extends('layout.main')

@section('title', 'Tambah Data barang')

@section('content')
<div class="page-heading">
    <h3>Tambah Data barang</h3>
  </div>
  <div class="page-content">
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
          <div class="col-md-12 col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Tambah Data</h4>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <form class="form form-horizontal">
                    <div class="form-body">
                      <div class="row">
                        <div class="col-md-2">
                          <label>NIK</label>
                        </div>
                        <div class="col-md-10 form-group">
                          <input type="text" class="form-control" name="nik" placeholder="Nomor Induk Kependudukan..." />
                        </div>
                        <div class="col-md-2">
                          <label>Nama Pemilik</label>
                        </div>
                        <div class="col-md-10 form-group">
                          <input type="text" class="form-control" name="nama_pemilik" placeholder="Nama pemilik..." />
                        </div>
                        <div class="col-md-2">
                          <label>Alamat Pemilik</label>
                        </div>
                        <div class="col-md-10 form-group">
                          <input type="text" class="form-control" name="alamat_pemilik" placeholder="Alamat pemilik..." />
                        </div>
                        <div class="col-md-2">
                          <label>Jenis Barang</label>
                        </div>
                        <div class="col-md-10 form-group">
                          <input type="text" class="form-control" name="jenis_barang" placeholder="Jenis barang..." />
                        </div>
                        <div class="col-md-2">
                          <label>Nama Barang</label>
                        </div>
                        <div class="col-md-10 form-group">
                          <input type="text" class="form-control" name="nama_barang" placeholder="Nama barang..." />
                        </div>
                        <div class="col-md-2">
                          <label>Nomor Plat</label>
                        </div>
                        <div class="col-md-10 form-group">
                          <input type="text" class="form-control" name="no_plat" placeholder="Nama barang..." />
                        </div>
                        <div class="col-md-2">
                          <label>Foto</label>
                        </div>
                        <div class="col-md-10 form-group">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupFile01"><i
                                        class="bi bi-upload"></i></label>
                                <input type="file" class="form-control" id="inputGroupFile01">
                            </div>
                        </div>
                        <div class="col-sm-12 d-flex justify-content-end">
                          <button type="submit" class="btn btn-primary me-1 mb-1">
                            Submit
                          </button>
                          <a href="/data-barang" class="btn btn-danger me-1 mb-1">
                            Kembali
                          </a>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    {{-- <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row ">
                <div class="col-lg-6 col-sm-12">
                    <div class="card d-flex justify-self-center">
                            <div class="" style="background-color: blue; width:200px;">
                                <img width="200px" src="//upload.wikimedia.org/wikipedia/commons/6/6e/Lambang_Polri.png" alt="">
                            </div>
                        <div class="card-body">
                            <p class="text-center">POLISI</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
  </div>
  @endsection