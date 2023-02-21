@extends('dashboard.layouts.main')

@section('container')
@if(session()->has('success'))
<div class="alert alert-primary" role="alert">
    {{session('success')}}I
</div>
@endif
<div class="row justify-content-center mt-5">
    <div class="col-md-5">
        <form action="/dashboard/user" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search .." id="search" name="search">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>
<div class="table-responsive col-lg-12 mt-2">
    <a href="/dashboard/user/create" class="btn btn-primary mb-3"> Create new Data </a>
    <table class="table table-striped table-md">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $laptop)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $laptop->name }}</td>
                <td>{{ $laptop->username }}</td>
                <td>{{ $laptop->email }}</td>
                <td>{{ $laptop->is_admin }}</td>
                <td>
                    <a href="/dashboard/user/{{ $laptop->id}}" class="badge
                        bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/user/{{ $laptop->id }}/edit" class="badge bg-warning"><span
                            data-feather="edit"></ span></a>
                    <a href="/dashboard/user/{{ $laptop->id }}/change-pass" class="badge bg-success"><span
                            data-feather="key"></ span></a>
                    <form action="/dashboard/user/{{ $laptop->id }}" method='post' class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Data Akan Di Delete')"><span
                                data-feather="x-circle"></ span></a></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section("scripts")
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('status'))
<script>
    Swal.fire({
            icon: '{{ session("status") }}',
            title: 'Success',
            text: '{{ session("message") }}',
    })
</script>
@endif

@endsection