@extends('layout.main')

@section('title', 'Data barang')

@section('content')
<div class="page-heading">
    <h3>Data barang</h3>
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
                  <th scope="col">Action</th>
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
                  <td>
                    <a href="/admin/perkara/edit/{{ $data->id }}" class="btn m-1 btn-warning"><i class="bi bi-pencil-square"></i></a>
                    <form action="/admin/perkara/delete/{{$data->id}}" method="POST" class="d-inline">
                      @csrf
                      @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-xs"><i class="bi bi-trash"></i> </button>
                    </form>


                    {{-- <a href="/admin/kriteria/edit" class="btn m-1 btn-warning"><i class="bi bi-pencil-square"></i></a>
                    <a href="/kriteria/destroy" class="btn m-1 btn-danger"><i class="bi bi-trash"></i></a> --}}

                  </td>
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