@extends('layout.template')
@section('title','Guru')

@section('content')
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
                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br>

@endsection
