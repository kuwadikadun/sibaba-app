@extends('layout.main')

@section('title', 'Data Barang Sitaan')

@section('content')
<div class="page-heading">
    <h3>Data Barang Sitaan</h3>
    {{-- <a href="/data-barang/tambah" class="btn btn-primary">Tambah Data Barang</a> --}}
  </div>
  <div class="page-content">
    <section id="basic-horizontal-layouts">
        <table class="table table-bordered" style="background-color: white;">
            <thead>
                <tr class="text-center">
                  <th scope="col">No</th>
                  <th scope="col">Foto</th>
                  <th scope="col">No Barang</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">Jenis Barang</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Pelaku</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($barang as $data)
                <tr>
                  <td >{{$loop->iteration }}</td>
                  <td class="text-center"><img width="100px" src="{{asset('/img/' . $data->foto) }}" alt="Foto"></td>
                  <td>{{$data->no_barang}}</td>
                  <td>{{$data->nama_barang}}</td>    
                  <td>{{$data->jenis_barang}}</td>    
                  <td>{{$data->deskripsi}}</td>      
                  <td>{{$data->Pelaku->nama_pelaku}}</td>
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