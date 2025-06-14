@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Detail Barang</h2>

    <div class="space-y-2">
        <p><strong>Nama:</strong> {{ $barang->nama }}</p>
        <p><strong>Stok:</strong> {{ $barang->stok }}</p>
        <p><strong>Kategori:</strong> {{ $barang->kategori }}</p>
    </div>

    <a href="{{ route('barang.index') }}" class="text-blue-600 underline mt-4 inline-block">← Kembali ke daftar</a>
@endsection
