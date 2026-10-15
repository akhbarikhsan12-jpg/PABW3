@extends('layouts.app')

@section('content')

<h2>Daftar Laporan Banjir</h2>

@forelse ($laporan as $data)

    @include('partials.laporan-card', ['data' => $data])

@empty

    <div class="card">
        <p>Belum ada laporan banjir.</p>
    </div>

@endforelse

@endsection