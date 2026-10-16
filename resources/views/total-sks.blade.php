@extends('layouts.app')

@section('judul', 'Total SKS')

@section('konten')
    <h1>Total SKS Mata Kuliah</h1>

    <div class="kartu-wrap">
        <div class="kartu"><small>Jumlah mata kuliah</small><strong>{{ $jumlahMk }}</strong></div>
        <div class="kartu"><small>Total SKS</small><strong>{{ $totalSks }}</strong></div>
    </div>
@endsection