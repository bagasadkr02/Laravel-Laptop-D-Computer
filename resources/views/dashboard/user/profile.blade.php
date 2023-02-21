@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap
align-items-center pt-3pb-2mb-3border-bottom">
    <h1 class="h2">Profile</h1>
</div>
<div class="col-lg-5">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" disabled class="form-control" id="name" name="name"
                value="{{ old('name', $data->name)}}">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" disabled class="form-control" id="username" name="username" value="{{ old('username', $data->username)}}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" disabled class="form-control" id="email" name="email" value="{{ old('email', $data->email)}}">
        </div>
</div>
@endsection