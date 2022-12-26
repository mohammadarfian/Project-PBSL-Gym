@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Daftar Member</h1>
</div>

<div class="table-responsive col-lg-10">
    {{-- <a href="/dashboard/add" class="btn btn-primary mb-3">Tambah Member</a> --}}
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Jenis</th>
        <th scope="col">Action</th>
    </tr>
</thead>
<tbody>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ ($user->type == 0) ? "Member" : "Admin" }}</td>
        <td>
            {{-- <a href="{{route('dashboards.edit', $dashboard->id)}}" class="btn btn-warning"><span data-feather="edit"></span></a> --}}
            <a href="{{route('dashboards.delete', $user->id)}}" class="btn btn-danger"><span data-feather="x-circle"></span></a>
        </td>
      </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection