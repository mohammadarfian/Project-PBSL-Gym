@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Daftar Paket</h1>
</div>

<div class="table-responsive col-lg-10">
    <a href="/paket/add" class="btn btn-primary mb-3">Tambah Paket</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Id_Member</th>
        <th scope="col">Id_Coach</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($allDataPaket as $key => $paket)
      <tr>
		    <td>{{$paket->id_member}}</td>
	      <td>{{$paket->id_coach}}</td>
		    <td>{{$paket->nama}}</td>
        <td>{{$paket->jenis}}</td>
        <td>
            <a href="{{route('pakets.edit', $paket->id)}}" class="btn btn-warning"><span data-feather="edit"></span></a>
            <a href="{{route('pakets.delete', $paket->id)}}" class="btn btn-danger"><span data-feather="x-circle"></span></a>
        </td>
      </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection