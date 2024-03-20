@extends('layoutmain/layoutmain')

@section('dashboard')

<div class="container text-center">
    <h1 class="text-center textcolor mt-4 fw-bold">DAFTAR DOSEN</h1>
    <div class="row justify-content-between">
        <div class="col-md-2 d-flex rounded">
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
    <table class="table table-bordered align-middle text-center mt-4 ">
        <thead class="align-middle tablehead">
            <tr>
            <th class="text-start">NAMA DOSEN / TEAM TEACHIN</th>
                        <th>JABATAN AKADEMIK</th>
                        <th>KODE JA</th>
                        <th>NIDN / NIDK / NUP</th>
                        <th>UNIT KECIL</th>
                    </tr>
                </thead>
                <tbody>   
                    <tr>
                        <td class="text-start">Anny Kartika Sari, S. Si., M. Sc., Ph. D.</td>
                        <td>Tenaga Pengajar</td>
                        <td>3</td>
                        <td>0005047703</td>
                        <td>Sekolah Vokasi</td>
            </tr>
        </tbody>
    </table> 
</div>

@endsection