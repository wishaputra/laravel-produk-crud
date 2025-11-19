@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
  <div class="flex items-center justify-between mb-6">
    <h2 class="text-xl font-semibold">Tambah Produk</h2>
    <a href="{{ route('products.index') }}" class="text-sm px-3 py-1 bg-gray-200 rounded">Kembali</a>
  </div>

  <form action="{{ route('products.store') }}" method="POST" class="bg-white p-6 rounded shadow">
    @csrf

    <div class="mb-4">
      <label for="name" class="block text-sm font-medium mb-1">Nama <span class="text-red-500">*</span></label>
      <input id="name" name="name" type="text" value="{{ old('name') }}" maxlength="100"
             class="w-full border rounded p-2 @error('name') border-red-500 @enderror">
      @error('name')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
    </div>

    <div class="mb-4">
      <label for="description" class="block text-sm font-medium mb-1">Deskripsi</label>
      <textarea id="description" name="description" rows="4" class="w-full border rounded p-2 @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
      @error('description')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
    </div>

    <div class="grid grid-cols-2 gap-4 mb-4">
      <div>
        <label for="price" class="block text-sm font-medium mb-1">Harga (Rp) <span class="text-red-500">*</span></label>
        <input id="price" name="price" type="number" step="0.01" value="{{ old('price') }}"
               class="w-full border rounded p-2 @error('price') border-red-500 @enderror">
        @error('price')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
      </div>

      <div>
        <label for="stock" class="block text-sm font-medium mb-1">Stok <span class="text-red-500">*</span></label>
        <input id="stock" name="stock" type="number" value="{{ old('stock', 0) }}"
               class="w-full border rounded p-2 @error('stock') border-red-500 @enderror">
        @error('stock')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
      </div>
    </div>

    <div class="flex gap-2">
      <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded">Simpan</button>
      <a href="{{ route('products.index') }}" class="px-4 py-2 bg-gray-200 rounded">Batal</a>
    </div>
  </form>
</div>
@endsection
