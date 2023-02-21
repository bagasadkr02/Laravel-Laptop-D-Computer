@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap
align-items-center pt-3pb-2mb-3border-bottom">
    <h1 class="h2">Edit Data</h1>
</div>
<div class="col-lg-5">
    <form method="post" action="/dashboard/user/{{ $id }}/change-pass">
        @method('post')
        @csrf
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection