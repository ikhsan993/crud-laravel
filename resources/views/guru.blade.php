@extends('layout.template')
@section('title','Guru')

@section('content')
@foreach ($guru as $data)
NIP : {{ $data['nip'] }} <br>
NAMA : {{ $data['nama'] }} <br>
MAPEL: {{ $data['mapel'] }} <br>
<br>
@endforeach

@endsection
