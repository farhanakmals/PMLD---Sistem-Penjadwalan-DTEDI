@extends('layoutmain/layoutmain')

@section('dashboard')

<div class="container-fluid text-center">
    <h1 class="text-center textcolor mt-4 fw-bold">ATUR JADWAL</h1>
    <div class="row justify-content-between">
        <div class="col-md-2 d-flex rounded">
            <a href="/" class="btn btndownload text-light" target="_blank">
                <i class="fa-solid fa-download me-2"></i>
                <strong>Unduh Excel</strong>
            </a>
        </div>
        <div class="col-6 row justify-content-end">
            <div class="col-md-3 dropdown">
                <button class="btn border dropdown-toggle form-control" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Filter Jadwal </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="col-md-5 d-flex">
                <input type="search" class="form-control" placeholder="Nama Dosen">
                <button class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>
    <table class="table table-bordered align-middle text-center mt-4 ">
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
                <th>Aksi</th>
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
                <td class="">
                    <button type="button" class="btn btnaksi btnedit">
                        <i class="fa-solid fa-minus"></i>
                    </button>
                    <button type="button" class="btn btnaksi btnhapus">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            </tr>
        </tbody>
    </table> 
</div>

@endsection