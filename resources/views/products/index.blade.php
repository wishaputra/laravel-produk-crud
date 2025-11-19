

@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-semibold">Daftar Produk</h1>
  <a href="{{ route('products.create') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded shadow">
    Tambah Produk
  </a>
</div>

<div class="bg-white shadow rounded overflow-hidden">
  <table class="min-w-full divide-y">
    <thead class="bg-gray-50">
      <tr>
        <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">#</th>
        <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Nama</th>
        <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Harga</th>
        <th class="px-4 py-3 text-left text-sm font-medium text-gray-600">Stok</th>
        <th class="px-4 py-3 text-center text-sm font-medium text-gray-600">Aksi</th>
      </tr>
    </thead>
    <tbody class="bg-white divide-y">
      @forelse($products as $product)
        <tr class="hover:bg-gray-50">
          <td class="px-4 py-3 text-sm">{{ $product->id }}</td>
          <td class="px-4 py-3 text-sm">{{ $product->name }}</td>
          <td class="px-4 py-3 text-sm">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
          <td class="px-4 py-3 text-sm">{{ $product->stock }}</td>
          <td class="px-4 py-3 text-sm text-center">
            <div class="inline-flex gap-2 items-center">
              <a href="{{ route('products.show', $product) }}" class="text-sm px-2 py-1 rounded hover:bg-gray-100">Lihat</a>
              <a href="{{ route('products.edit', $product) }}" class="text-sm px-2 py-1 rounded hover:bg-gray-100">Edit</a>

              <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?');" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-sm px-2 py-1 rounded text-red-600 hover:bg-red-50">Hapus</button>
              </form>
            </div>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="5" class="px-4 py-6 text-center text-gray-500">Belum ada produk.</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>

<div class="mt-4">
  {{ $products->links() }}
</div>
@endsection
