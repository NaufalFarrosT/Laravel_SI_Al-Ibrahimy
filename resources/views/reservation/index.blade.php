@extends('layouts.app')

@section('content')
<div class="container-fluid px-4" style="padding-top:5px;">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Reservasi
        </div>

        <div style="margin-right: auto; margin-left:auto; width:75%;">
            <a type="button" class="btn btn-primary" href="{{route('reservation_create')}}" style="width:100%;">TAMBAH RESERVASI</a>
        </div>

        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Tanggal</th>
                        <th>Nama Jamaah</th>
                        <th>Potongan</th>
                        <th>Total Pembayaran</th>
                        <th>Tipe Paket</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Kode</th>
                        <th>Tanggal</th>
                        <th>Nama Jamaah</th>
                        <th>Potongan</th>
                        <th>Total Pembayaran</th>
                        <th>Tipe Paket</th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>000001</td>
                        <td>22-10-2022</td>
                        <td>Bita</td>
                        <td>-</td>
                        <td>Rp.22.500.000</td>
                        <td>001</td>
                        <td style="width:7%;">
                            <a href="#modalEdit" class='btn btn-primary btn-sm' onclick="">Bayar</a>
                        </td>
                        <td style="width:7%;">
                            <a href="#modalEdit" class='btn btn-primary btn-sm' onclick="">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>001301122001</td>
                        <td>22-10-2022</td>
                        <td>Sinta</td>
                        <td>-</td>
                        <td>Rp.22.500.000</td>
                        <td>001</td>
                        <td style="width:7%;">
                            <a href="#modalEdit" class='btn btn-primary btn-sm' onclick="">Bayar</a>
                        </td>
                        <td style="width:7%;">
                            <a href="#modalEdit" class='btn btn-primary btn-sm' onclick="">Detail</a>
                        </td>
                    </tr>
                    <tr>
                        <td>001301122001</td>
                        <td>22-10-2022</td>
                        <td>Gege</td>
                        <td>-</td>
                        <td>Rp.22.500.000</td>
                        <td>001</td>
                        <td style="width:7%;">
                            <a href="#modalEdit" class='btn btn-primary btn-sm' onclick="">Bayar</a>
                        </td>
                        <td style="width:7%;">
                            <a href="#modalEdit" class='btn btn-primary btn-sm' onclick="">Detail</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
