<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechCorp - Gestion des Utilisateurs</title>
    <script src="https://cdn.tailwindcss.com"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-900">
    <!-- Navigation -->
    <nav class="bg-gray-800 shadow-lg border-b border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <div class="w-10 h-10 bg-indigo-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-shopping-bag text-white"></i>
                        </div>
                        <span class="ml-3 text-xl font-bold text-white">TechCorp Store</span>
                        <span
                            class="ml-2 px-2 py-1 bg-purple-500/20 text-purple-400 text-xs font-bold rounded">ADMIN</span>
                    </div>
                    <div class="hidden md:block ml-10">
                        <div class="flex space-x-4">
                            <a href="#"
                                class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">Dashboard</a>
                            <a href="#"
                                class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">Produits</a>
                            <a href="#" class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">Stocks</a>
                            <a href="{{route('users.index')}}"
                                class="text-indigo-400 border-b-2 border-indigo-500 px-3 py-2 text-sm font-medium">Users</a>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="flex items-center space-x-3">
                        <div class="text-right hidden sm:block">
                            <p class="text-sm font-medium text-white">Admin Système</p>
                            <p class="text-xs text-gray-400">Administrateur</p>
                        </div>
                        <img src="https://ui-avatars.com/api/?name=Admin+Systeme&background=9333ea&color=fff"
                            alt="Avatar" class="w-10 h-10 rounded-full">
                    </div>
                </div>
            </div>
        </div>
    </nav>

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

        Barre d'actions
        <div class="bg-gray-800 rounded-xl shadow-lg p-6 mb-6 border border-gray-700">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="flex-1">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-500"></i>
                            </div>
                            <input type="text"
                                class="block w-full pl-10 pr-3 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent placeholder-gray-400"
                                placeholder="Rechercher un utilisateur...">
                        </div>
                    </div>



                <div class="flex gap-3">
                    <select
                        class="px-4 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-indigo-500">
                        <option>Tous les rôles</option>
                        <option>Employé</option>
                        <option>Manager</option>
                        <option>Administrateur</option>
                        <option>Finance</option>
                    </select>
                    <select
                        class="px-4 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-indigo-500">
                        <option>Tous les départements</option>
                        <option>Marketing</option>
                        <option>IT</option>
                        <option>RH</option>
                        <option>Ventes</option>
                        <option>Finance</option>
                    </select>
                    <input type="submit" id="submit" value="Search"
                        class="px-6 py-2 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700 transition flex items-center gap-2">
                        <i></i>

                        </input>
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
                        <div class="flex gap-2 mb-2">
                            <form action="{{ route('users.accept', $user) }}" method="post">
                                @csrf
                                @method('put')
                                <button type="submit"
                                    class="flex-1 bg-green-600 text-white py-2 rounded-lg text-sm font-medium hover:bg-green-700 transition">
                                    <i class="fas fa-check mr-1"></i>Accepter
                                </button>
                            </form>

                            <form action="{{ route('users.refuse', $user) }}" method="post">
                                @csrf
                                @method('put')
                                <button type="submit"
                                    class="flex-1 bg-red-600 text-white py-2 rounded-lg text-sm font-medium hover:bg-red-700 transition">
                                    <i class="fas fa-times mr-1"></i>Refuser
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

</body>

</html>
