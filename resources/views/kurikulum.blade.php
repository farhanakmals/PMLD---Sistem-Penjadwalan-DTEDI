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
            <div class="col-md-4 dropdown">
                <button class="btn border dropdown-toggle form-control" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Filter Mata Kuliah</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="col-md-6 d-flex">
                <input type="search" class="form-control" placeholder="Mata Kuliah">
                <button class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>
    <table class="table table-bordered align-middle text-center mt-4 ">
        <thead class="align-middle tablehead">
            <tr>
                <th>PRODI</th>
                <th class="text-start">KODE MATA KULIAH</th>
                <th>T / P</th>
                <th>SKS</th>
                <th class="text-start">MATA KULIAH</th>
                <th>KELOMPOK</th>
                <th>JENIS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>TRPL</td>
                <td class="text-start">SVIK214101</td>
                <td>T</td>
                <td>2</td>
                <td class="text-start">Aljabar dan Vektor Matriks</td>
                <td>MKK</td>
                <td>Wajib</td>
            </tr>
        </tbody>
    </table> 
</div>

@endsection