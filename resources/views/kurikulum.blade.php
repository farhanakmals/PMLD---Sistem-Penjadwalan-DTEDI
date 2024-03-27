@extends('layoutmain/layoutmain')

@section('dashboard')

<div class="container text-center">
    <h1 class="text-center textcolor mt-4 fw-bold">KURIKULUM</h1>
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
                <th>PRODI + MK</th>
                <th>PRODI</th>
                <th class="text-start">KODE MATA KULIAH</th>
                <th class="text-start">MATA KULIAH ID</th>                
                <th class="text-start">MATA KULIAH EN</th>
                <th>SKS</th>
                <th>KELOMPOK</th>
                <th>JENIS</th>
                <th>SEMESTER</th>
                <th>T / P</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>TRPLSVIK214101</td>
                <td>TRPL</td>
                <td class="text-start">SVIK214101</td>
                <td class="text-start">Aljabar dan Vektor Matriks</td>
                <td class="text-start">Vector and Matrix Algebra</td>
                <td>2</td>
                <td>MKK</td>
                <td>Wajib</td>
                <td>2</td>
                <td>T</td>
            </tr>
        </tbody>
    </table> 
</div>

@endsection