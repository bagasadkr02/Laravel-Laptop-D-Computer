@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap
align-items-center pt-3pb-2mb-3border-bottom">
    <h1 class="h2">Edit Data</h1>
</div>
<div class="col-lg-5">
    {{-- ieu error variable laptop na teuing kunaon --}}
    <form method="post" action="/dashboard/laptop/{{ $data->id }}">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="namalaptop" class="form-label">Nama Laptop</label>
            <input type="text" class="form-control" id="namalaptop" name="nama_laptop"
                value="{{ old('nama_laptop', $data->nama_laptop)}}">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Kerusakan Laptop</label>
            <input type="text" class="form-control" id="kerusakan" name="kerusakan" value="{{ old('harga', $data->kerusakan)}}">
        </div>
        <div class="mb-3">
            <label for="resi" class="form-label">Resi Laptop</label>
            <input type="text" class="form-control" id="resi" name="resi" value="{{ old('resi', $data->resi)}}">
        </div>
        <div class="mb-3">
            <label for="pemiliklaptop" class="form-label">Nama Pemilik Laptop</label>
            <input type="text" class="form-control" id="pemiliklaptop" name="pemilik_laptop"
                value="{{ old('pemilik_laptop', $data->pemilik_laptop)}}">
        </div>
        <div class="mb-3">
            <label for="laptop" class="form-label">Estimasi Pengerjaan</label>
            <input type="text" class="form-control" id="estimasi" name="estimasi" value="{{ old('laptop', $data->estimasi)}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection