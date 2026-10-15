@extends('layouts.app')

@section('content')

<x-alert>
    Laporan berhasil dikirim!
</x-alert>

<div class="card">
    <h2>Konfirmasi Laporan</h2>

    <p><strong>Nama Pelapor:</strong> {{ $laporan->nama_pelapor ?? $nama }}</p>
    <p><strong>Lokasi:</strong> {{ $laporan->lokasi ?? $lokasi }}</p>
    <p><strong>Tinggi Genangan:</strong> {{ $laporan->tinggi_genangan ?? $tinggi }} cm</p>
    @if (!empty($laporan->tanggal_kejadian) || !empty($tanggal_kejadian))
        <p><strong>Tanggal Kejadian:</strong> {{ $laporan->tanggal_kejadian ?? $tanggal_kejadian }}</p>
    @endif

    @php
        $tinggiVal = $laporan->tinggi_genangan ?? $tinggi;
    @endphp

    @if ($tinggiVal < 30)
        <p class="waspada"><strong>Status: Waspada</strong></p>
    @elseif ($tinggiVal <= 70)
        <p class="siaga"><strong>Status: Siaga</strong></p>
    @else
        <p class="awas"><strong>Status: Awas</strong></p>
    @endif

    <a href="{{ route('laporan.index') }}">
        Lihat Daftar Laporan
    </a>
</div>

@endsection