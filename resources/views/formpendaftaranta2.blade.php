@extends('layouts.main')

@section('container')
<div class="mb-3>
    <label for="formFile" class="form-label">Semester</label>
    <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
</div>
<div class="mb-3>
    <label for="formFile" class="form-label">Peminatan</label>
<select class="form-select" aria-label="Default select example">
  <option selected>Pilih peminatan</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
</div>
<div class="mb-3">
    <label for="formFile" class="form-label">Bukti pembayaran tagihan</label>
    <input class="form-control" type="file" id="formFile">
</div>
<div class="mb-3">
    <label for="formFile" class="form-label">Kartu rencana studi</label>
    <input class="form-control" type="file" id="formFile">
</div>
<div class="mb-3">
    <label for="formFile" class="form-label">Kartu hasil studi</label>
    <input class="form-control" type="file" id="formFile">
</div>
@endsection
