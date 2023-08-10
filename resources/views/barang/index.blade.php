@extends('layout.main')

@section('title', 'Data barang')

@section('content')
<div class="page-heading">
    <h3>Data barang</h3>
    <a href="/data-barang/tambah" class="btn btn-primary">Tambah Data Barang</a>
  </div>
  <div class="page-content">
    <section id="basic-horizontal-layouts">
        <table class="table table-bordered" style="background-color: white;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama Pemilik</th>
                    <th>Alamat Pemilik</th>
                    <th>Jenis Barang</th>
                    <th>Nama Barang</th>
                    <th>Plat Nomor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1234567</td>
                    <td>Dani Mana</td>
                    <td>Jakarta Selatan</td>
                    <td>Kendaraan Bermotor</td>
                    <td>Supra Fit</td>
                    <td>A 1762 BB</td>
                </tr>
            </tbody>
        </table>
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