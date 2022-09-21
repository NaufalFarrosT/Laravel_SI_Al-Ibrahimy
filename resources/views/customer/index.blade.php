@extends('layouts.app')

@section('content')
<div class="container-fluid px-4" style="padding-top:5px;">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Jamaah
        </div>

        <div style="margin-right: auto; margin-left:auto; width:75%;">
            <a type="button" class="btn btn-primary" href="{{route('customer_create')}}" style="width:100%;">TAMBAH JAMAAH</a>
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
                        <th>No.Hp</th>
                        <th></th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Kelamin</th>
                        <th>No.Hp</th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>

                    @foreach($customers as $cust)
                        <tr>
                            <td>{{ $cust->NIK }}</td>
                            <td>{{ $cust->custName }}</td>
                            <td>{{ $cust->custDOB }}</td>
                            <td>{{ $cust->custAddress }}</td>
                            <td>{{ $cust->custGender }}</td>
                            <td>{{ $cust->custTelpNumber }}</td>
                            <td style="width:5%;">
                                <a href="#modalEdit" class='btn btn-primary btn-sm' onclick="">Detail</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
