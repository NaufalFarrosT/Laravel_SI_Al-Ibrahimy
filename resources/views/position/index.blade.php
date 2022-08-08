@extends('layouts.app')

@section('content')
    <div class="container-fluid px-4" style="padding-top:5px;">
        <div class="card mb-4">
            <div class="card-header" style="display: flex;">
                <div>
                    <i class="fas fa-table me-1"></i>
                    <label >Data Jabatan</label> 
                </div>
                <div style="margin-right: 20px; margin-left:auto; ">
                    <a type="button" class="btn btn-primary" href="{{route('position.create')}}" style=" width:300px;">TAMBAH JABATAN</a>
                </div>
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