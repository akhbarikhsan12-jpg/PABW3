<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function simpan(Request $request)
    {
        // Mendukung input nama_pelapor / nama dan tinggi_genangan / tinggi
        if ($request->has('nama') && !$request->filled('nama_pelapor')) {
            $request->merge(['nama_pelapor' => $request->input('nama')]);
        }
        if ($request->has('tinggi') && !$request->filled('tinggi_genangan')) {
            $request->merge(['tinggi_genangan' => $request->input('tinggi')]);
        }
        if (!$request->filled('tanggal_kejadian')) {
            $request->merge(['tanggal_kejadian' => now()->toDateString()]);
        }

        $validated = $request->validate([
            'nama_pelapor'     => 'required|string',
            'lokasi'           => 'required|string',
            'tinggi_genangan'  => 'required|numeric',
            'tanggal_kejadian' => 'required|date',
        ]);

        // Menyimpan data ke tabel laporan menggunakan Laporan::create()
        $laporan = Laporan::create($validated);

        return view('konfirmasi', [
            'laporan'          => $laporan,
            'nama'             => $laporan->nama_pelapor,
            'lokasi'           => $laporan->lokasi,
            'tinggi'           => $laporan->tinggi_genangan,
            'tanggal_kejadian' => $laporan->tanggal_kejadian,
        ]);
    }

    public function laporan()
    {
        // Mengambil data dari database menggunakan Laporan::all()
        $laporan = Laporan::all();

        return view('laporan', compact('laporan'));
    }
}