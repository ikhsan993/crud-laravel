@extends('layout.template')
@section('title','Edit Data Guru')

@section('content')
<form action="/guru/update/{{$guru ->id_guru}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
        <div class="col-sm-6">
            <div class="form-group">
    <label>NIP</label>
    <input type="text" readonly name="nip" value="{{ $guru ->nip }}" class="form-control @error('nip') is-invalid @enderror">
    <div class="invalid-feedback">
        @error('nip')
{{ $message }}
@enderror
    </div>
    </div>
    <div class="form-group">
        <label>Nama Guru</label>
        <input type="text" name="nama_guru" value="{{ $guru -> nama_guru }}" class="form-control @error('nama_guru') is-invalid @enderror">
        <div class="invalid-feedback">
            @error('nama_guru')
    {{ $message }}
    @enderror
    </div>
    <div class="form-group">
    <label>Mata Pelajaran</label>
    <input type="text" name="mapel" value ="{{ $guru ->mapel }}" class="form-control @error('mapel') is-invalid @enderror">
    <div class="invalid-feedback">
        @error('mapel')
{{ $message }}
@enderror
</div>
<br>
<div class="col-sm-12">
<div class="col-sm-4 float-left"><img src="{{ url('fotoguru/'.$guru->foto_guru) }}" width="150px"></div>
   <div class="col-sm-8 float-right">
    <div class="form-group">
        <label>Foto Guru</label><br>
        <input type="file" name="foto_guru" value ="{{ $guru ->foto_guru }} "class="form-control @error('foto_guru') is-invalid @enderror">
        <div class="invalid-feedback">
            @error('foto_guru')
    {{ $message }}
    @enderror
    </div>
   </div>
</div>
<br>
<div class="clearfix"></div>
        <div class="form-group"><br>
<button class="btn btn-primary btn-sm "> Simpan </button>
            </div>
</div>
</div>
    </form>
@endsection
