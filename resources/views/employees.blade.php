@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-10">
  <div class="flex items-center justify-between mb-8">
    <h1 class="text-3xl font-bold text-gray-800">Liste des Employés</h1>
    <a href="/ajout" 
       class="bg-[#fadb5f]  px-4 py-2 rounded-lg hover:bg-[#ffdd57] transition">
      + Ajouter un employé
    </a>
  </div>

  <div class="bg-white shadow-md rounded-lg overflow-hidden">
    <table class="min-w-full border border-gray-200">
      <thead class="bg-gray-100 text-gray-700 uppercase text-sm">
        <tr>
          <th class="px-6 py-3 text-left">#</th>
          <th class="px-6 py-3 text-left">Nom</th>
          <th class="px-6 py-3 text-left">Prénom</th>
          <th class="px-6 py-3 text-left">Poste</th>
          <th class="px-6 py-3 text-left">Email</th>
          <th class="px-6 py-3 text-center">Actions</th>
        </tr>
      </thead>

      <tbody class="divide-y divide-gray-200">
        @forelse ($employes as $employe)
          <tr class="hover:bg-gray-50 transition">
            <td class="px-6 py-3">{{ $loop->iteration }}</td>
            <td class="px-6 py-3 font-medium text-gray-800">{{ $employe->nom }}</td>
            <td class="px-6 py-3 font-medium text-gray-800">{{ $employe->prenom }}</td>
            <td class="px-6 py-3 text-gray-600">{{ $employe->poste ?? '—' }}</td>
            <td class="px-6 py-3 text-gray-600">{{ $employe->email ?? '—' }}</td>
            <td class="px-6 py-3 flex justify-center gap-4">
              {{-- Modifier --}}
              <a href="/employes/{{$employe->id}}/edit" 
                 class="text-yellow-500 hover:text-yellow-600 transition">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.862 4.487a2.25 2.25 0 013.182 3.182L9.75 18.963 
                        6 19.5l.537-3.75L16.862 4.487z" />
                </svg>
              </a>

              {{-- Supprimer --}}
              <!-- <form action="/employes/{{$employe->id}}/delete" 
                    onsubmit="return confirm('Supprimer cet employé ?');"> -->
                <!-- @csrf -->
                <a href="/employes/{{$employe->id}}/delete" class="text-red-500 hover:text-red-600 transition">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                       stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M6 18L18 6M6 6l12 12" />
                  </svg>
</a>
              <!-- </form> -->
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5" class="text-center py-6 text-gray-500">
              Aucun employé trouvé.
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
