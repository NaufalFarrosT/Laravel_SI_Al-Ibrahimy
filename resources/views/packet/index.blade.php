@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4" style="padding-top:5px;">
        <div class="card mb-4">
            <div class="card-header" style="display: flex;">
                <div>
                    <i class="fas fa-table me-1"></i>
                    <label >Data Paket</label>
                </div>
            </div>

            <div style="margin-right: auto; margin-left:auto; width:75%;">
                <a type="button" class="btn btn-primary" href="{{route('packet_create')}}" style="width:100%;">TAMBAH PAKET</a>
            </div>

            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama Paket</th>
                            <th>Tanggal Keberangkatan</th>
                            <th>Tanggal Kedatangan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Kode</th>
                            <th>Nama Jabatan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($packets as $packet)
                            <tr>
                                <td>{{ $packet->id }}</td>
                                <td>{{ $packet->packetName }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
