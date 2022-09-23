@extends('layouts.app')

@section('content')
<div class="container-fluid px-4" style="padding-top:5px;">
    <form role="form">
    @csrf
        <div class="mb-3">
            <label class="form-label">Kode</label>
            <input type="text" class="form-control" id="resID" disabled>
        </div>

        <div class="mb-3 form-group">
            <label for="exampleInputPassword1" class="form-label">Jamaah</label>
            <input type="text" class="form-control typeahead" id="resCust" name="resCust">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="resDate">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Potongan</label>
            <input type="number" class="form-control" id="resDiscount">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Total Pembayaran</label>
            <input type="number" class="form-control" id="resTotalPayment">
        </div>

        <div class="mb-3">
            <label for="paket id">Paket:</label>

            <select name="resPacket" id="resPacket">
                <option value="">13 hari November</option>
                <option value="">13 hari November</option>
                <option value="">13 hari November</option>
                <option value="">13 hari November</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

    <script type="text/javascript">
        var route = "{{ route('customer_search') }}";
        $('#resCust').typeahead({
            source: function (query, process){
                return $.get(route, {
                    query: query
                }, function(data){
                    return process(data);
                });
            }
        });
    </script>
</div>
@endsection
