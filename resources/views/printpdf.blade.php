@extends('layout.template')
@section('title','Detail Guru')

@section('content')

<table class="table">
        <tr>
        <th width="100px">NIP</th>
        <th width="30px">:</th>
        <th>{{ $guru -> nip }}</th>
    </tr>
    <tr>
        <th width="100px">Nama Guru</th>
        <th width="30px">:</th>
        <th>{{ $guru -> nama_guru }}</th>
    </tr>
    <tr>
        <th width="100px">Mata Pelajaran</th>
        <th width="30px">:</th>
        <th>{{ $guru -> mapel}}</th>
    </tr>
    <tr>
        <th width="100px">Foto Guru</th>
        <th width="30px">:</th>
        <th><img src="{{ url('fotoguru/'.$guru->foto_guru) }}"width="300px"></th>
    </tr>
</table>
@endsection
