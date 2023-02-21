@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap
align-items-center pt-3pb-2mb-3border-bottom">
    <h1 class="h2">Create new Data</h1>
</div>
<div class="col-lg-5">
    <form method="post" action="/dashboard/toko">
        @csrf
        <div class="mb-3">
            <label for="namatoko" class="form-label">Nama Toko</label>
            <input type="text" class="form-control" id="namatoko" name="nama_toko">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi Toko</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="notes" class="form-label">Catatan</label>
            <input type="text" class="form-control" id="notes" name="notes">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Alamat Toko</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">No Telp</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection