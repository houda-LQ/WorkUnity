<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 text-gray-800">

  <nav class="flex items-center justify-between bg-white/80 backdrop-blur-md shadow-md px-8 py-4 rounded-2xl m-4">
    <span class="text-[#2e2e2e] text-xl font-bold">WorkUnity</span>

  <ul class="flex space-x-6 text-gray-600 font-medium">
    <li>
      <a href="{{ route('home') }}" 
         class="hover:text-[#2e2e2e] transition duration-300">Accueil</a>
    </li>
    <li>
      <a href="/employee" class="hover:text-[#2e2e2e] transition duration-300">Employés</a>

    </li>
    <li>
      <a href="/ajout" 
   class="bg-[#2e2e2e] text-white px-4 py-2 rounded-full hover:bg-gray-800 transition duration-300 shadow-sm">
   Ajouter
</a>

    </li>
  </ul>
</nav>

  <div class="container mx-auto mt-8 px-4">
    @yield('content')
  </div>

</body>
</html>
