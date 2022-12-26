@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Daftar Jadwal</h1>
</div>

<div class="table-responsive col-lg-10">
    <a href="/jadwal/add" class="btn btn-primary mb-3">Tambah Jadwal</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">Id_Member</th>
        <th scope="col">Tanggal Mulai</th>
        <th scope="col">Tanggal Selesai</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($allDataJadwal as $key => $jadwal)
      <tr>
		    <td>{{$jadwal->id_member}}</td>
		    <td>{{$jadwal->tanggal_mulai}}</td>
        <td>{{$jadwal->tanggal_selesai}}</td>
        <td>
            <a href="{{route('jadwals.edit', $jadwal->id)}}" class="btn btn-warning"><span data-feather="edit"></span></a>
            <a href="{{route('jadwals.delete', $jadwal->id)}}" class="btn btn-danger"><span data-feather="x-circle"></span></a>
        </td>
      </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection