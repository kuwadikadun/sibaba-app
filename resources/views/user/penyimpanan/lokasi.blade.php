@extends('layout.main')

@section('title', 'Data Perkara')

@section('content')
<div class="page-heading">
    <h3>Data Perkara</h3>
    {{-- <a href="/data-barang/tambah" class="btn btn-primary">Tambah Data Barang</a> --}}
  </div>
  <div class="page-content">
    <section id="basic-horizontal-layouts">
        <table class="table table-bordered" style="background-color: white;">
            <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">No Perkara</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Lokasi Penyimpanan</th>
                  <th scope="col">Tanggal Perkara</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($perkara as $data)
                <tr>
                  <td >{{$loop->iteration }}</td>
                  <td>{{$data->no_perkara}}</td>
                  <td>{{$data->BarangSitaan->nama_barang}}</td>    
                  <td>{{$data->Penyimpanan->nama_lokasi}}</td>    
                  <td>{{$data->tanggal_perkara}}</td>      
                  <td>{{$data->status}}</td>           
                  
                </tr>
                @endforeach
             
               
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