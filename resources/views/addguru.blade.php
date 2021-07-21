@extends('layout.template')
@section('title','Add Data Guru')

@section('content')
<form action="/guru/insert" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
        <div class="col-sm-6">
            <div class="form-group">
    <label>NIP</label>
    <input type="text" name="nip" value="{{ old('nip') }}" class="form-control @error('nip') is-invalid @enderror">
    <div class="invalid-feedback">
        @error('nip')
{{ $message }}
@enderror
    </div>
    </div>
    <div class="form-group">
        <label>Nama Guru</label>
        <input type="text" name="nama_guru" value="{{ old('nama_guru') }}" class="form-control @error('nama_guru') is-invalid @enderror">
        <div class="invalid-feedback">
            @error('nama_guru')
    {{ $message }}
    @enderror
    </div>
    <div class="form-group">
    <label>Mata Pelajaran</label>
    <input type="text" name="mapel" value ="{{ old ('mapel') }}"" class="form-control @error('mapel') is-invalid @enderror">
    <div class="invalid-feedback">
        @error('mapel')
{{ $message }}
@enderror
</div>
    <div class="form-group">
        <label>Foto Guru</label><br>
        <input type="file" name="foto_guru" value ={{ old('foto_guru') }}class="form-control @error('foto_guru') is-invalid @enderror">
        <div class="invalid-feedback">
            @error('foto_guru')
    {{ $message }}
    @enderror
    </div>
        <div class="form-group">
<button class="btn btn-primary btn-sm "> Simpan </button>
            </div>
</div>
</div>
    </form>
@endsection
