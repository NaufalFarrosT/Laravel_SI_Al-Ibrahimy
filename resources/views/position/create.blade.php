@extends('layouts.app')

@section('content')
<div class="container-fluid px-4" style="padding-top:5px;">
    <form role="form">
        <div class="mb-3">
            <label class="form-label">Kode</label>
            <input type="text" class="form-control" id="positionID" disabled>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama Posisi</label>
            <input type="text" class="form-control" id="custName">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
