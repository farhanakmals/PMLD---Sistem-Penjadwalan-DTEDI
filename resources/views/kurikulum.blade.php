@extends('layoutmain/layoutmain')

@section('dashboard')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h1 class="text-center textcolor mt-4 fw-bold">KURIKULUM</h1>
            <table class="table tabelkurikulum table-bordered align-middle text-center mt-4">
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
        <div class="col-md-6">
            <h1 class="text-center textcolor mt-4 fw-bold">DAFTAR DOSEN</h1>
            <table class="table tabeldosen table-bordered align-middle text-center  mt-4 ">
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
    </div>   
</div>

@endsection