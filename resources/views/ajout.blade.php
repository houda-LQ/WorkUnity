@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-50">
  <div class="w-full max-w-md bg-white shadow-md rounded-lg p-8">
    
    <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
      Ajouter un employé
    </h1>

    <form action="" method="POST" class="space-y-5">
      @csrf
      @method('PUT')

      {{-- Nom --}}
      <div>
        <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
        <input type="text" id="nom" name="nom" value=""
               class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#fadb5f] focus:border-[#fadb5f]"
               required>
      </div>

      {{-- Prénom --}}
      <div>
        <label for="prenom" class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
        <input type="text" id="prenom" name="prenom" value=""
               class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#fadb5f] focus:border-[#fadb5f]"
               required>
      </div>

      {{-- Email --}}
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" id="email" name="email" value=""
               class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#fadb5f] focus:border-[#fadb5f]"
               required>
      </div>

      {{-- Poste --}}
      <div>
        <label for="poste" class="block text-sm font-medium text-gray-700 mb-1">Poste</label>
        <input type="text" id="poste" name="poste" value=""
               class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-[#fadb5f] focus:border-[#fadb5f]">
      </div>

      {{-- Bouton Modifier --}}
      <div class="pt-4">
        <button type="submit"
                class="w-full bg-[#fadb5f] py-2 rounded-lg font-semibold hover:bg-[#f8d54a] transition cursor-pointer">
          Ajouter
        </button>
      </div>
    </form>

    {{-- Bouton Retour --}}
    <div class="mt-4 text-center">
      <a href="/employee" 
         class="text-sm text-gray-600 hover:text-gray-800 transition">
        ← Retour à la liste
      </a>
    </div>
  </div>
</div>
@endsection
