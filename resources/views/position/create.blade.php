@extends('layouts.app')

@section('content')
<div class="container-fluid px-4" style="padding-top:5px;">
    <form role="form">
        <div class="mb-3">
            <label class="form-label">Nomor Induk Kewarganegaraan</label>
            <input type="text" class="form-control" id="custID">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="custName">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="custDOB">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="custAddress">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Kelamin</label>
            <input type="password" class="form-control" id="custGender">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nomor Telepon</label>
            <input type="number" class="form-control" id="custNumber">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Pekerjaan atau Tempat Belajar</label>
            <input type="text" class="form-control" id="custJobs">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Alamat Pekerjaan atau Tempat Belajar</label>
            <input type="password" class="form-control" id="custGender">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection