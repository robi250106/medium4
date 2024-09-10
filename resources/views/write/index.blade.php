@extends('layouts.app', ['title' => 'Write'])

@section('content')
<div class="container mx-auto py-12 max-w-3xl">
    <div class="text-center mb-12">
        <h1 class="text-5xl font-bold leading-tight">Tulis Artikel Baru</h1>
        <p class="text-gray-500 mt-3 text-lg">Bagikan ide Anda dengan dunia. Mulai menulis di sini.</p>
    </div>

    <div class="w-full bg-white rounded-lg shadow-md p-6 flex justify-center items-center">
        <div class="card w-full max-w-2xl">
             <div class="card-header text-center">
                 <h2 class="text-3xl font-bold">Tulis Ceritamu</h2>
             </div>
             <div class="card-body mt-6">
                 <form action="{{ route('member') }}" method="write" class="mx-auto"> <!-- Add mx-auto class here -->
                     @csrf
                     <!-- Judul Artikel -->
                     <div class="mb-8">
                         <label for="title" class="block text-gray-700 text-2xl font-semibold mb-3">Judul Artikel</label>
                         <input type="text" id="title" name="title" placeholder="Judul artikel..."
                                class="w-full border-b-2 border-gray-300 focus:border-black focus:outline-none text-3xl font-bold placeholder-gray-500 text-gray-900 py-2">
                     </div>

                     <!-- Konten Artikel -->
                     <div class="mb-8">
                         <label for="body" class="block text-gray-700 text-2xl font-semibold mb-3">Isi Artikel</label>
                         <textarea id="body" name="body" rows="15" placeholder="Mulailah menulis cerita Anda..."
                                   class="w-full border-b-2 border-gray-300 focus:border-black focus:outline-none text-xl placeholder-gray-500 text-gray-900 leading-relaxed py-2"></textarea>
                     </div>

                     <!-- Tombol Publikasi -->
                     <div class="flex justify-center">
                         <button type="submit" class="bg-blue-600 hover:bg-yellow-700 text-white font-semibold py-3 px-6 rounded-lg">
                             Publikasikan
                         </button>
                     </div>
                 </form>
             </div>
        </div>
     </div>
@endsection
