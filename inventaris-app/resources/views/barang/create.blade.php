@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Tambah Barang</h2>

    <form action="{{ route('barang.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label>Nama Barang</label>
            <input type="text" name="nama" class="w-full border p-2 rounded">
        </div>
        <div>
            <label>Stok</label>
            <input type="number" name="stok" class="w-full border p-2 rounded">
        </div>
        <div>
            <label>Kategori</label>
            <input type="text" name="kategori" class="w-full border p-2 rounded">
        </div>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Simpan
        </button>
        <a href="{{ route('barang.index') }}" class="text-gray-600 underline ml-2">Kembali</a>
    </form>
@endsection
