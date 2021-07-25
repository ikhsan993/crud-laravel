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
            <th>No.</th>
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
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{ $data ->id_guru }}">
                        Delete
                      </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
 @foreach ($guru as $data)
<div class="modal fade" id="delete{{ $data ->id_guru }}">
    <div class="modal-dialog modal-sm">
      <div class="modal-content bg-danger">
        <div class="modal-header">
          <h4 class="modal-title">Danger Modal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Yakin Ingin Menghapus Data Ini???</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>
          <a href="/guru/delete/{{ $data ->id_guru }}" class="btn btn-outline-light">Yes</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  @endforeach
  @endsection
