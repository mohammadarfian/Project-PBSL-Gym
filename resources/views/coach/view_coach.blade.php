@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Daftar Coach</h1>
</div>

<div class="table-responsive col-lg-10">
    <a href="/coach/add" class="btn btn-primary mb-3">Tambah Coach</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nama</th>
        <th scope="col">No Telp</th>
        <th scope="col">Alamat</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($allDataCoach as $key => $coach)
      <tr>
        <td>{{$key+1}}</td>
		<td>{{$coach->nama}}</td>
        <td>{{$coach->no_telp}}</td>
	    <td>{{$coach->alamat}}</td>
        <td>
            <a href="{{route('coachs.edit', $coach->id)}}" class="btn btn-warning"><span data-feather="edit"></span></a>
            <a href="{{route('coachs.delete', $coach->id)}}" class="btn btn-danger"><span data-feather="x-circle"></span></a>
        </td>
      </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection