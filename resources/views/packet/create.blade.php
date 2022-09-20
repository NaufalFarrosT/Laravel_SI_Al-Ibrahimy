@extends('layouts.app')

@section('content')
<div class="container-fluid px-4" style="padding-top:5px;">
    <form role="form" method="POST" action="{{url('packet_add')}}">
    @csrf
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama Paket</label>
            <input type="text" class="form-control" id="packetName" name="packetName">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tanggal Keberangkatan</label>
            <input type="date" class="form-control" id="departureDate" name="departureDate">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tanggal Kedatangan</label>
            <input type="date" class="form-control" id="arrivalDate" name="arrivalDate">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" rows="3" style="width: 100%"></textarea>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Harga</label>
            <input type="number" class="form-control" id="totalPrice" name="totalPrice">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
