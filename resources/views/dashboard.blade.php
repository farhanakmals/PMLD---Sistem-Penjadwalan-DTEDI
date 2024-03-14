@extends('layoutmain/layoutmain')

@section('dashboard')
<div>
    <h1 class="text-center my-4 fw-bold">JADWAL</h1>
    <div class="row container-fluid text-center justify-content-between mt-4">
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
        <table class="table table-bordered kecil mt-4">
            <thead class="align-middle tablehead">
                <tr class="">
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
            <tbody >   
                <tr class="abu">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table> 
    </div>
</div>
    



@endsection