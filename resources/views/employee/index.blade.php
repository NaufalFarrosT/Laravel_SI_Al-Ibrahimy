@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4" style="padding-top:5px;">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Pegawai
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Kelamin</th>
                            <th>No. Telp.</th>
                            <th>Pekerjaan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Kelamin</th>
                            <th>No. Telp.</th>
                            <th>Pekerjaan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>351213123861823</td>
                            <td>Eden Hazard</td>
                            <td>20 Desember 1987</td>
                            <td>Jl. Raya Banjar Kemuning RT 10 RW 03 No.35, Banjar Kemuning, Sedati, Sidoarjo</td>
                            <td>Laki-Laki</td>
                            <td>081259547112</td>
                            <td>Pengusaha</td>
                        </tr>
                        <tr>
                            <td>351213123861823</td>
                            <td>Eden Hazard</td>
                            <td>20 Desember 1987</td>
                            <td>Jl. Raya Banjar Kemuning RT 10 RW 03 No.35, Banjar Kemuning, Sedati, Sidoarjo</td>
                            <td>Laki-Laki</td>
                            <td>081259547112</td>
                            <td>Pengusaha</td>
                        </tr>
                        <tr>
                            <td>351213123861823</td>
                            <td>Eden Hazard</td>
                            <td>20 Desember 1987</td>
                            <td>Jl. Raya Banjar Kemuning RT 10 RW 03 No.35, Banjar Kemuning, Sedati, Sidoarjo</td>
                            <td>Laki-Laki</td>
                            <td>081259547112</td>
                            <td>Pengusaha</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection