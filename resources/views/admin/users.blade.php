<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechCorp - Gestion des Utilisateurs</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    </head>

<body class="bg-gray-900">
    <!-- Navigation -->
    @include('partials.navbar')

    <!-- Contenu principal -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- En-tête -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-white mb-2">Gestion des Utilisateurs</h1>
            <p class="text-gray-400">Gérez les employés, managers et leurs accès</p>
        </div>

        <!-- Statistiques utilisateurs -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <!-- Total utilisateurs -->
            <div class="bg-gradient-to-br from-indigo-600 to-indigo-700 rounded-xl shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-indigo-200 text-sm font-medium">Total Utilisateurs</p>
                        <p class="text-4xl font-bold mt-2">{{$total}}</p>
                    </div>
                    <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-users text-2xl"></i>
                    </div>
                </div>
            </div>

            <!-- Employés -->
            <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm font-medium">Employés</p>
                        <p class="text-3xl font-bold text-white mt-2">{{ $emoloyees}}</p>
                        <!-- <p class="text-gray-400 text-sm mt-2">77.5% du total</p> -->
                    </div>
                    <div class="w-14 h-14 bg-blue-500/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-blue-400 text-2xl"></i>
                    </div>
                </div>
            </div>

            <!-- Managers -->
            <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm font-medium">Managers</p>
                        <p class="text-3xl font-bold text-white mt-2">{{$managers}}</p>
                        <!-- <p class="text-gray-400 text-sm mt-2">16.9% du total</p> -->
                    </div>
                    <div class="w-14 h-14 bg-amber-500/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-user-tie text-amber-400 text-2xl"></i>
                    </div>
                </div>
            </div>

            <!-- Admins -->
            <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm font-medium">Administrateurs</p>
                        <p class="text-3xl font-bold text-white mt-2">{{$admin}}</p>
                        <!-- <p class="text-gray-400 text-sm mt-2">5.6% du total</p> -->
                    </div>
                    <div class="w-14 h-14 bg-purple-500/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-user-shield text-purple-400 text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="text-white">Barre d'actions</h2>
        <div class="bg-gray-800 rounded-xl shadow-lg p-6 mb-6 border border-gray-700">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex-1">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-500"></i>
                            </div>
                            <input type="Search" id="Search" name="Search"
                                class="block w-full pl-10 pr-3 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent placeholder-gray-400"
                                placeholder="Rechercher un utilisateur...">
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <!-- Liste des utilisateurs en cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <!-- Utilisateur 1 - Manager -->
            @foreach ($users as $user)

                <div
                    class="bg-gray-800 rounded-xl shadow-lg overflow-hidden border border-gray-700 hover:border-indigo-500 transition">
                    <div class="bg-gradient-to-r from-amber-500/20 to-transparent p-4 border-b border-gray-700">
                        <div class="flex items-center gap-3">

                            <img src="https://ui-avatars.com/api/?name=Julie+Martin&background=f59e0b&color=fff"
                                alt="Julie Martin" class="w-16 h-16 rounded-full border-2 border-amber-500">
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-white">{{ $user->name }}</h3>
                                <p class="text-sm text-gray-400">{{$user->email}}</p>
                            </div>
                            <span class="px-3 py-1 bg-amber-500/20 text-amber-400 text-xs font-bold rounded-full">
                                <i class="fas fa-user-tie mr-1"></i>{{$user->role->status}}
                            </span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="bg-gray-700/50 rounded-lg p-3 text-center border border-gray-600">
                                <p class="text-xs text-gray-400 mb-1">Département</p>
                                <p class="text-sm font-semibold text-white">{{$user->departement->title}}</p>
                            </div>
                            <div class="bg-gray-700/50 rounded-lg p-3 text-center border border-gray-600">
                                <p class="text-xs text-gray-400 mb-1">Équipe</p>
                                <p class="text-sm font-semibold text-white">24 membres</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-4">
                            <div class="bg-gray-700/50 rounded-lg p-3 text-center border border-gray-600">
                                <p class="text-xs text-gray-400 mb-1">Solde</p>
                                <p class="text-sm font-semibold text-white">{{$user->tokens}}</p>
                            </div>
                            <div class="bg-gray-700/50 rounded-lg p-3 text-center border border-gray-600">
                                <p class="text-xs text-gray-400 mb-1">statu</p>
                                <p class="text-sm font-semibold text-white">
                                    <i class="fas fa-circle mr-1" style="font-size: 6px;"></i>{{ $user->statu }}
                                </p>
                            </div>
                        </div>
        <div class="flex gap-3 mb-2">
            <form action="{{ route('users.accept', $user) }}" method="post" class="flex-1">
                @csrf
                @method('put')
                <button type="submit"
                    class="w-full bg-gradient-to-r from-green-500 to-green-600 text-white py-2.5 px-4 rounded-lg text-sm font-semibold hover:from-green-600 hover:to-green-700 active:scale-95 transition-all duration-200 shadow-md hover:shadow-lg flex items-center justify-center gap-2">
                    <i class="fas fa-check"></i>
                    <span>Accepter</span>
                </button>
            </form>

            <form action="{{ route('users.refuse', $user) }}" method="post" class="flex-1">
                @csrf
                @method('put')
                <button type="submit"
                    class="w-full bg-gradient-to-r from-red-500 to-red-600 text-white py-2.5 px-4 rounded-lg text-sm font-semibold hover:from-red-600 hover:to-red-700 active:scale-95 transition-all duration-200 shadow-md hover:shadow-lg flex items-center justify-center gap-2">
                    <i class="fas fa-times"></i>
                    <span>Refuser</span>
                </button>
            </form>
        </div>

                    </div>
                </div>
            @endforeach



            <!-- Pagination -->
            <!-- <div class="flex items-center justify-center gap-2">

            <button class="px-3 py-2 bg-gray-800 border border-gray-700 rounded-lg text-gray-400 hover:bg-gray-700">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg font-medium">1</button>
            <button class="px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg text-gray-400 hover:bg-gray-700">2</button>
            <button class="px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg text-gray-400 hover:bg-gray-700">3</button>
            <button class="px-3 py-2 bg-gray-800 border border-gray-700 rounded-lg text-gray-400 hover:bg-gray-700">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div> -->
        </div>
        <script type="text/javascript">
    $('#Search').on('Keyup', function(){

         $text = $(this).val();
         alert($text);


        $.ajax({

            type:"GET",
            url: '{{URL::to('search' ) }}',
            data: {'search':$text},
            success: function(data) {

                     console.log(data);


             }
        });



    });



        </script>

</body>

</html>
