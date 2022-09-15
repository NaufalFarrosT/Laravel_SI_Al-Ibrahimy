@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4" style="padding-top:5px;">
        <div class="card mb-4">
            <div class="card-header" style="display: flex;">
                <div>
                    <i class="fas fa-table me-1"></i>
                    <label >Data Jabatan</label>
                </div>
            </div>

            <div style="margin-right: auto; margin-left:auto; width:75%;">
                <a type="button" class="btn btn-primary" href="{{route('position_create')}}" style="width:100%;">TAMBAH JABATAN</a>
            </div>

            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama Jabatan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Kode</th>
                            <th>Nama Jabatan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Pemilik</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Manajer</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Marketing</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
