@extends('layouts.app')

@section('content')

<div class="card">
    <h2>Form Pelaporan Banjir</h2>

    <form action="{{ route('lapor.store') }}" method="POST">
        @csrf

        <label>Nama Pelapor</label>
        <input type="text" name="nama_pelapor" value="{{ old('nama_pelapor') }}" required>

        <label>Lokasi Kejadian</label>
        <input type="text" name="lokasi" value="{{ old('lokasi') }}" required>

        <label>Tinggi Genangan Air (cm)</label>
        <input type="number" name="tinggi_genangan" value="{{ old('tinggi_genangan') }}" required>

        <label>Tanggal Kejadian</label>
        <input type="date" name="tanggal_kejadian" value="{{ old('tanggal_kejadian', date('Y-m-d')) }}" required>

        <button type="submit">Kirim Laporan</button>
    </form>
</div>

@endsection