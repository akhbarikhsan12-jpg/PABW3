<div class="card">
    <h3>{{ $data['lokasi'] ?? $data->lokasi }}</h3>

    <p>
        <strong>Nama Pelapor:</strong>
        {{ $data['nama_pelapor'] ?? $data['nama'] ?? $data->nama_pelapor }}
    </p>

    <p>
        <strong>Tinggi Genangan:</strong>
        {{ $data['tinggi_genangan'] ?? $data['tinggi'] ?? $data->tinggi_genangan }} cm
    </p>

    @if (!empty($data['tanggal_kejadian']) || !empty($data->tanggal_kejadian))
        <p>
            <strong>Tanggal Kejadian:</strong>
            {{ $data['tanggal_kejadian'] ?? $data->tanggal_kejadian }}
        </p>
    @endif

    @php
        $tinggi = $data['tinggi_genangan'] ?? $data['tinggi'] ?? $data->tinggi_genangan ?? 0;
    @endphp

    @if ($tinggi < 30)
        <p class="waspada">
            <strong>Status: Waspada</strong>
        </p>
    @elseif ($tinggi <= 70)
        <p class="siaga">
            <strong>Status: Siaga</strong>
        </p>
    @else
        <p class="awas">
            <strong>Status: Awas</strong>
        </p>
    @endif
</div>