@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Member</h1>
  </div>

<div class="col-lg-8">
  <form method="post" action="{{route('dashboards.update', $editData->id)}})}}">
    @csrf
    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="string" name="alamat" class="form-control" required data-validation-required-message="This field is required">
    </div>
    <div class="mb-3">
        <label for="no_telp" class="form-label">No Telp</label>
        <input type="char" name="no_telp" class="form-control" required data-validation-required-message="This field is required">
      </div>
      <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required data-validation-required-message="This field is required">
      </div>
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection