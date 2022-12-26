@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Jadwal</h1>
  </div>

<div class="col-lg-8">
  <form method="post" action="{{route('jadwals.update', $editData->id)}})}}">
    @csrf
    <div class="mb-3">
        <label for="tanggal_mulai" class="form-label">tanggal_mulai</label>
        <input type="date" name="tanggal_mulai" class="form-control" required data-validation-required-message="This field is required">
    </div>
    <div class="mb-3">
      <label for="tanggal_selesai" class="form-label">tanggal_selesai</label>
      <input type="date" name="tanggal_selesai" class="form-control" required data-validation-required-message="This field is required">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection