@extends('layoutmain/layoutmain')

@section('dashboard')
<div class="container text-center">
    <h1 class="text-center textcolor my-4 fw-bold">JADWAL</h1>
    <div class="row justify-content-between">
        <div class="col-md-2 rounded">
            <a href="/" class="btn btndownload text-light" target="_blank">
                <i class="fa-solid fa-download me-2"></i>
                <strong>Unduh Excel</strong>
            </a>
        </div>
        <div class="col-md-3 d-flex">
            <input type="search" class="form-control" placeholder="Nama Dosen">
            <button class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
    <table class="table table-bordered align-middle text-center  mt-4 ">
        <thead class="align-middle tablehead">
            <tr>
                <th>SEM</th>
                <th class="text-start">MATA KULIAH</th>
                <th>T / P</th>
                <th>NO.</th>
                <th class="text-start">NAMA DOSEN / TEAM TEACHING</th>
                <th>JABATAN AKADEMIK</th>
                <th>NIDN / NIDK / NUP</th>
                <th>UNIT KERJA</th>
                <th>PRODI</th>
                <th>KLS</th>
                <th>SKS</th>
                <th>ΣSKS</th>
            </tr>
        </thead>
        <tbody>   
            <tr>
                <td>2</td>
                <td class="text-start">Aljabar dan Vektor Matriks</td>
                <td>T</td>
                <td>1</td>
                <td class="text-start">Anny Kartika Sari, S. Si., M. Sc., Ph. D.</td>
                <td>Tenaga Pengajar</td>
                <td>0005047703</td>
                <td>Sekolah Vokasi</td>
                <td>TRPL</td>
                <td>2</td>
                <td>2</td>
                <td>4</td>
            </tr>
        </tbody>
    </table> 
</div>
    



@endsection