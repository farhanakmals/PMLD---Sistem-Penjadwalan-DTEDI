<!doctype html>
<html lang="en">
     <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Sistem Penjadwalan DTEDI</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     </head>
     <body>
          <div class="row">
               <div class="col m-2">
                    <h1 class="text-center">Kurikulum</h1>
                    <table class="table table-bordered border-primary align-middle">
                         <thead class="align-middle text-center">
                              <tr>
                                   <th scope="col">prodi</th>
                                   <th scope="col">kode_mk</th>
                                   <th scope="col">mata_kuliah_ind</th>
                                   <th scope="col">kelompok</th>
                                   <th scope="col">jenis</th>
                              </tr>
                         </thead>
                         <tbody>
                              @foreach ($kurikulum as $data)
                              <tr>
                                   <th scope="row">{{ $data->prodi }}</th>
                                   <td>{{ $data->kode_mk }}</td>
                                   <td>{{ $data->mata_kuliah_ind }}</td>
                                   <td>{{ $data->kelompok }}</td>
                                   <td>{{ $data->jenis }}</td>
                              </tr>
                              @endforeach
                         </tbody>
                    </table>
               </div>
               <div class="col m-2">
                    <h1 class="text-center">Daftar Dosen</h1>
                    <table class="table table-bordered border-primary align-middle">
                         <thead class="text-center align-middle">
                              <tr>
                                   <th scope="col">Nama Dosen</th>
                                   <th scope="col">Jabatan Akademik</th>
                                   <th scope="col">Kode JA</th>
                                   <th scope="col">NIDN/NIDK</th>
                                   <th scope="col">Unit Kerja</th>
                                   <th scope="col">Unit Kecil</th>
                              </tr>
                         </thead>
                         <tbody>
                              @foreach ($daftar_dosen as $data)
                              <tr>
                                   <th scope="row">{{ $data->Dosen_Team_Teaching }}</th>
                                   <td>{{ $data->Jabatan_Akademik }}</td>
                                   <td>{{ $data->kode_JA }}</td>
                                   <td>{{ $data->NIDN_NIDK }}</td>
                                   <td>{{ $data->Unit_Kerja }}</td>
                                   <td>{{ $data->UNIT_KECIL }}</td>
                              </tr>
                              @endforeach
                         </tbody>
                    </table>
               </div>
          </div>
          

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     </body>
</html>
