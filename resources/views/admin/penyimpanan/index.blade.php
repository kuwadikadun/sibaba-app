@extends('admin.master.master')

@section('content')
<div class="pagetitle">
    <h1>Data Penyimpanan</h1>
  </div><!-- End Page Title -->

  @if (session('status'))
  <div class="alert alert-success alert-dismissible show fade">
    {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  @endif
  
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">List Data Lokasi Penyimpanan</h5>
            {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> --}}
            <a href="/admin/penyimpanan/create" class="btn btn-success me-1 mb-3 mt-2"><i class="bi bi-plus" ></i>Tambah Data penyimpanan</a>
            <!-- Table with stripped rows -->
            <table class="table ">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Lokasi</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($penyimpanan as $data)
                <tr>
                  <td >{{$loop->iteration }}</td>
                  <td>{{$data->nama_lokasi}}</td>
                  <td>{{$data->alamat_lokasi}}</td>           
                  <td>
                    <a href="/admin/penyimpanan/edit/{{ $data->id }}" class="btn m-1 btn-warning"><i class="bi bi-pencil-square"></i></a>
                    <form action="/admin/penyimpanan/delete/{{$data->id}}" method="POST" class="d-inline">
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
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection