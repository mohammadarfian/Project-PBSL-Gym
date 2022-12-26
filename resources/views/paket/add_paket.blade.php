@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Paket</h1>
  </div>

<div class="col-lg-8">
  <form method="post" action="{{route('pakets.store')}}">
    @csrf
    <div class="mb-3">
      <label for="id" class="form-label">Id_Member</label>
      <input type="integer" name="id_member" class="form-control" required data-validation-required-message="This field is required">
    </div>
    <div class="mb-3">
      <label for="id" class="form-label">Id_Coach</label>
      <input type="integer" name="id_coach" class="form-control" required data-validation-required-message="This field is required">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama_Paket</label>
        <input type="string" name="nama" class="form-control" required data-validation-required-message="This field is required">
      </div>
      <div class="mb-3">
        <label for="tanggal" class="form-label">Jenis_Paket</label>
        <input type="string" name="jenis" class="form-control" required data-validation-required-message="This field is required">
      </div>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection