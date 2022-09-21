@extends('layouts.app')

@section('content')
<div class="container-fluid px-4" style="padding-top:5px;">
    <form role="form" method="POST" action="{{url('customer_add')}}">
    @csrf
        <div class="mb-3">
            <label class="form-label">Nomor Induk Kewarganegaraan</label>
            <input type="text" class="form-control" id="NIK" name="NIK">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="custName" name="custName">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="custDOB" name="custDOB">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="custAddress" name="custAddress">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Kelamin</label>
            <select name="custGender" id="custGender" name="custGender">
                <option value="Pria">PRIA</option>
                <option value="Wanita">WANITA</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nomor Telepon</label>
            <input type="number" class="form-control" id="custNumber" name="custNumber">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Pekerjaan atau Tempat Belajar</label>
            <input type="text" class="form-control" id="custJob" name="custJob">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Alamat Pekerjaan atau Tempat Belajar</label>
            <input type="text" class="form-control" id="custJobAddress" name="custJobAddress">
        </div>

        <div class="mb-3">
            <label for="paket id">Nama Marketing:</label>

            <select name="resEmployee" id="resEmployee">
                <option value="">si X</option>
                <option value="">si Y</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
