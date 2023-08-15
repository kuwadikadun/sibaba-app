<!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Laporan</title>
            <style>
                @page {
                    size: A4;
                    margin: 0;
                }

                body {
                    margin: 2cm;
                }

                h1 {
                    text-align: center;
                    margin-bottom: 20px;
                }

                p {
                    text-align: center;
                    margin-bottom: 20px;
                }

                .logo {
                    height: 80px;
                    width: auto;
                    display: block;
                    text-align: left;
                }

                table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 20px;
                }

                th,
                td {
                    border: 1px solid #000;
                    padding: 8px;
                    text-align: center;
                }

                .wrap-text {
                    word-wrap: break-word;
                    white-space: normal;
                }

                .page-break {
                    page-break-after: always;
                }
            </style>
        </head>

      <body>


            <header>
                <h1>SIBABA</h1>
                <h1 class="wrap-text">Laporan Data Perkara</h1>
            </header>

            <main>
                {{-- <p>Berikut ini merupakan hasil penilaian untuk penentuan perpanjangan kontrak kerja Pegawai Tidak Tetap (PTT) :</p> --}}
                {{-- <p class="text-center">Range tanggal: {{ $tanggal_mulai }} s/d {{ $tanggal_terakhir }}</p> --}}

                <table>
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">No Perkara</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Lokasi Penyimpanan</th>
                            <th scope="col">Tanggal Perkara</th>
                            <th scope="col">Status</th>
                            {{-- <th scope="col">Action</th> --}}
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

           
              
        </main>
        
        <script>
            window.onload = function () {
                window.print();
            };
        </script>
        
        {{-- @if (!$loop->last)
            <div class="page-break"></div>
        @endif --}}


</body>

</html>