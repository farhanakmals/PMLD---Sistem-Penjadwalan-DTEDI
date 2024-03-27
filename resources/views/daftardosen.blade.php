@extends('layoutmain/layoutmain')

@section('dashboard')

<div class="container text-center">
    <h1 class="text-center textcolor my-4 fw-bold">DAFTAR DOSEN</h1>
    <div class="row justify-content-between">
        <div class="col-md-2 d-flex rounded">
            <a href="/" class="btn btndownload text-light" target="_blank">
                <i class="fa-solid fa-download me-2"></i>
                <strong>Unduh Excel</strong>
            </a>
        </div>
        <div class="col-6 row justify-content-end">
            <div class="col-md-6 d-flex">
                <input type="search" class="form-control" placeholder="Nama Dosen">
                <button class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <div class="col-md-3 dropdown">
                <button class="btn border btnfilter form-control" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Filter Prodi</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">TRPL</a></li>
                    <li><a class="dropdown-item" href="#">TRIK</a></li>
                    <li><a class="dropdown-item" href="#">TRI</a></li>
                    <li><a class="dropdown-item" href="#">TRE</a></li>
                </ul>
            </div>
        </div>
    </div>
    <table class="table table-bordered align-middle text-center mt-4 ">
        <thead class="align-middle tablehead">
            <tr>
                <th>NO</th>
                <th class="text-start">NAMA DOSEN / TEAM TEACHIN</th>
                <th>JABATAN AKADEMIK</th>
                <th>KODE JA</th>
                <th>NIDN / NIDK / NUP</th>
                <th>UNIT KERJA</th> 
                <th>UNIT KECIL</th>
            </tr>
        </thead>
        <tbody>   
            <tr>
                <td>1</td>
                <td class="text-start">Anny Kartika Sari, S. Si., M. Sc., Ph. D.</td>
                <td>Tenaga Pengajar</td>
                <td>3</td>
                <td>0005047703</td>
                <td>Sekolah Vokasi</td>
                <td>DTEDI</td>
    </tr>
        </tbody>
    </table> 
</div>

@endsection