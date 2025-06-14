@extends('layouts.app')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Edit Barang</h2>

    <form action="{{ route('barang.update', $barang->id) }}" method="POST" class="space-y-4">
        @csrf @method('PUT')
        <div>
            <label>Nama Barang</label>
            <input type="text" name="nama" value="{{ $barang->nama }}" class="w-full border p-2 rounded">
        </div>
        <div>
            <label>Stok</label>
            <input type="number" name="stok" value="{{ $barang->stok }}" class="w-full border p-2 rounded">
        </div>
        <div>
            <label>Kategori</label>
            <input type="text" name="kategori" value="{{ $barang->kategori }}" class="w-full border p-2 rounded">
        </div>
        <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-700">
            Update
        </button>
        <a href="{{ route('barang.index') }}" class="text-gray-600 underline ml-2">Kembali</a>
    </form>
@endsection
