@extends('layout.template')
@section('title','Guru')

@section('content')
<a href="/guru/add" class="btn btn-primary btn-sm">Add</a>
<br>
@if (session('pesan'))
<br>
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Success</h5>
 {{ (session('pesan')) }}
 <br>
</div>
@endif
<table class="table table-bordered">
    <thead>
        <tr>
            <th>NIP</th>
            <th>Nama Guru</th>
            <th>Mata Pelajaran</th>
            <th>Foto Guru</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach ($guru as $data )
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data ->nip}}</td>
                <td>{{ $data ->nama_guru}}</td>
                <td>{{ $data ->mapel}}</td>
                <td><img src="{{ url('fotoguru/'.$data->foto_guru) }}" width="100px"></td>
                <td>
                    <a href="/guru/detail/{{ $data ->id_guru }}" class="btn btn-sm btn-success">Detail</a>
                    <a href="/guru/edit/{{ $data ->id_guru }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">
                        <a href="" class="btn-danger " > Hapus </a>
                      </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>

@endsection
