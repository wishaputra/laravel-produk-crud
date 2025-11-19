<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Produk CRUD') — Aksesmu</title>
  <script src="https://cdn.tailwindcss.com"></script>
  @stack('styles')
</head>
<body class="bg-slate-50 min-h-screen text-slate-800">

  {{-- NAVBAR --}}
  <header class="bg-white border-b">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between gap-4">
      <div class="flex items-center gap-3">
        <a href="{{ route('products.index') }}" class="flex items-center gap-3">
          <svg class="w-8 h-8 text-blue-600" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden>
            <path d="M3 7h18M5 7v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8 7V5a4 4 0 0 1 8 0v2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
          <span class="text-lg font-semibold">Produk CRUD</span>
        </a>
        <span class="text-sm text-slate-400">/ Admin</span>
      </div>

      
    </div>
  </header>

  
  <main class="container mx-auto px-4 py-8">
    <div class="mb-6">
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-2xl font-semibold">@yield('heading', 'Kelola Produk')</h1>
          @hasSection('subheading')
            <p class="text-sm text-slate-500 mt-1">@yield('subheading')</p>
          @endif
        </div>
        <div>
          @yield('header-actions')
        </div>
      </div>
    </div>

   
    @if(session('success'))
      <div id="flash-success" class="mb-6 p-4 rounded border bg-green-50 border-green-200 text-green-800 flex items-start justify-between gap-4">
        <div class="flex-1">
          <p class="font-medium">Sukses</p>
          <p class="text-sm mt-1">{{ session('success') }}</p>
        </div>
        <button onclick="document.getElementById('flash-success').remove()" class="text-green-700 hover:text-green-900" aria-label="Tutup">
          ✕
        </button>
      </div>
    @endif

   
    @if ($errors->any())
      <div id="flash-errors" class="mb-6 p-4 rounded border bg-red-50 border-red-200 text-red-800">
        <p class="font-medium">Terjadi kesalahan</p>
        <ul class="list-disc ml-5 mt-2 text-sm">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

   
    <section class="bg-white shadow-sm rounded p-6">
      @yield('content')
    </section>
  </main>

  
  <footer class="border-t mt-8">
    <div class="container mx-auto px-4 py-4 text-sm text-slate-500">
      © {{ date('Y') }} Aksesmu — Simple Produk CRUD
    </div>
  </footer>

  
  @stack('scripts')

  
  <script>
    // auto-dismiss flash after 6s
    (function(){
      const flash = document.getElementById('flash-success');
      if (flash) setTimeout(()=> flash.remove(), 6000);
    })();
  </script>
</body>
</html>
