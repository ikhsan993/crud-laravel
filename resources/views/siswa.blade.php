@extends('layout.template')
@section('title','Siswa')

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Mata Pelajaran</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach ($siswa as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item ->nis }}</td>
                <td>{{ $item ->nama_siswa }}</td>
                <td>{{ $item ->kelas}}</td>
                <td>{{ $item ->mapel }}</td>
                <td>
                    <a href="/guru/siswa/{{ $item ->id_siswa }}" class="btn btn-sm btn-success">Detail</a>
                    <a href="/guru/siswa/{{ $item ->id_siswa }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $item ->id_siswa }}">
                        Delete
                      </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
