@extends('layouts.app')

@section('content')
  <section class="text-center py-20 ">

  <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
      Gérez vos <span class="text-[#fadb5f]">Employés</span> avec simplicité
    </h1>
    <p class="text-lg text-gray-600 mb-8">
      Une application intuitive pour visualiser, ajouter et gérer vos équipes en toute efficacité.
    </p>

    <a href="/employee" 
       class="inline-block bg-[#fadb5f] text-black px-6 py-3 rounded-xl font-semibold hover:bg-[#fdde61] transition transform hover:scale-105">
       Voir les employés
    </a>

    <div class="mt-20 flex justify-center flex-wrap gap-6 perspective-1000">
      <div class="transform rotate-[-10deg] hover:rotate-[-5deg] transition duration-500">
        <img src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?w=400&h=400&fit=crop" 
             class="w-40 h-40 rounded-2xl object-cover shadow-lg hover:shadow-2xl">
      </div>
      <div class="transform rotate-[5deg] hover:rotate-0 transition duration-500">
        <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?w=400&h=400&fit=crop" 
             class="w-40 h-40 rounded-2xl object-cover shadow-lg hover:shadow-2xl">
      </div>
      <div class="transform rotate-[-5deg] hover:rotate-0 transition duration-500">
        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=400&h=400&fit=crop" 
             class="w-40 h-40 rounded-2xl object-cover shadow-lg hover:shadow-2xl">
      </div>
      <div class="transform rotate-[10deg] hover:rotate-[5deg] transition duration-500">
        <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?w=400&h=400&fit=crop" 
             class="w-40 h-40 rounded-2xl object-cover shadow-lg hover:shadow-2xl">
      </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full h-40 "></div>
  </section>
@endsection
