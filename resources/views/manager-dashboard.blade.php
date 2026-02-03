<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechCorp - Manager Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-900">
    <!-- Navigation -->
    <nav class="bg-gray-800 shadow-lg border-b border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-indigo-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-shopping-bag text-white"></i>
                    </div>
                    <span class="ml-3 text-xl font-bold text-white">TechCorp Store</span>
                    <div class="hidden md:block ml-10">
                        <div class="flex space-x-4">
                            <a href="#" class="text-indigo-400 border-b-2 border-indigo-500 px-3 py-2 text-sm font-medium">Approbations</a>
                            <a href="#" class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">Mon Équipe</a>
                            <a href="#" class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">Rapports</a>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="relative p-2 text-gray-400 hover:text-white">
                        <i class="fas fa-bell text-xl"></i>
                        <span class="absolute top-0 right-0 inline-flex w-5 h-5 text-xs font-bold text-white bg-red-500 rounded-full items-center justify-center">5</span>
                    </button>
                    <div class="flex items-center space-x-3">
                        <p class="text-sm font-medium text-white hidden sm:block">Julie Martin</p>
                        <img src="https://ui-avatars.com/api/?name=Julie+Martin&background=f59e0b&color=fff" alt="Avatar" class="w-10 h-10 rounded-full">
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-3xl font-bold text-white mb-6">Gestion des Approbations</h1>

        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm font-medium">En attente</p>
                        <p class="text-3xl font-bold text-yellow-400 mt-2">5</p>
                    </div>
                    <div class="w-14 h-14 bg-yellow-500/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-clock text-yellow-400 text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm font-medium">Approuvées</p>
                        <p class="text-3xl font-bold text-green-400 mt-2">18</p>
                    </div>
                    <div class="w-14 h-14 bg-green-500/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-check-circle text-green-400 text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm font-medium">Refusées</p>
                        <p class="text-3xl font-bold text-red-400 mt-2">3</p>
                    </div>
                    <div class="w-14 h-14 bg-red-500/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-times-circle text-red-400 text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-gradient-to-br from-indigo-600 to-indigo-700 rounded-xl p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-indigo-200 text-sm font-medium">Budget équipe</p>
                        <p class="text-3xl font-bold mt-2">24,500</p>
                        <p class="text-sm text-indigo-200 mt-1">Tokens</p>
                    </div>
                    <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-users text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Demande urgente -->
        <div class="bg-gray-800 rounded-xl p-6 mb-6 border-2 border-yellow-500">
            <div class="flex items-start gap-4">
                <img src="https://ui-avatars.com/api/?name=Marie+Dupont&background=6366f1&color=fff" alt="Marie" class="w-12 h-12 rounded-full">
                <div class="flex-1">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <h3 class="font-bold text-white">Marie Dupont</h3>
                                <span class="px-2 py-0.5 bg-gray-700 text-gray-300 text-xs rounded">Marketing</span>
                                <span class="px-2 py-0.5 bg-red-500/20 text-red-400 text-xs font-bold rounded">
                                    <i class="fas fa-exclamation-circle mr-1"></i>Urgent
                                </span>
                            </div>
                            <p class="text-sm text-gray-400">Demandé il y a 2 heures</p>
                        </div>
                        <span class="text-xs bg-gray-700 px-3 py-1 rounded-full text-gray-400">#CMD-2026-0234</span>
                    </div>

                    <!-- Produit -->
                    <div class="bg-gray-700/50 rounded-lg p-4 border border-amber-500/30 mb-4">
                        <div class="flex items-center gap-4">
                            <img src="https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=100&h=100&fit=crop" alt="Casque" class="w-24 h-24 rounded-lg object-cover">
                            <div class="flex-1">
                                <div class="flex items-center gap-2 mb-2">
                                    <h4 class="text-lg font-bold text-white">Casque Anti-bruit</h4>
                                    <span class="px-2 py-1 bg-amber-500 text-white text-xs font-bold rounded">
                                        <i class="fas fa-crown mr-1"></i>Premium
                                    </span>
                                </div>
                                <p class="text-sm text-gray-400 mb-2">Bluetooth, réduction active du bruit</p>
                                <div class="flex items-center gap-4 text-sm">
                                    <span class="font-medium text-gray-300"><i class="fas fa-box mr-1"></i>Quantité: 1</span>
                                    <span class="font-bold text-white"><i class="fas fa-coins text-yellow-500 mr-1"></i>850 Tokens</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Justification -->
                    <div class="bg-blue-500/10 border border-blue-500/30 rounded-lg p-4 mb-4">
                        <p class="text-sm font-medium text-blue-400 mb-2">
                            <i class="fas fa-comment-dots mr-2"></i>Justification:
                        </p>
                        <p class="text-sm text-gray-300">"Travail fréquent en open space avec beaucoup de bruit. J'ai besoin d'un casque pour me concentrer sur les tâches analytiques."</p>
                    </div>

                    <!-- Historique employé -->
                    <div class="grid grid-cols-3 gap-4 mb-4">
                        <div class="bg-gray-700/50 rounded-lg p-3 text-center border border-gray-600">
                            <p class="text-2xl font-bold text-white">12</p>
                            <p class="text-xs text-gray-400">Commandes totales</p>
                        </div>
                        <div class="bg-gray-700/50 rounded-lg p-3 text-center border border-gray-600">
                            <p class="text-2xl font-bold text-green-400">2</p>
                            <p class="text-xs text-gray-400">Articles Premium</p>
                        </div>
                        <div class="bg-gray-700/50 rounded-lg p-3 text-center border border-gray-600">
                            <p class="text-2xl font-bold text-white">2,450</p>
                            <p class="text-xs text-gray-400">Solde actuel</p>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex gap-3">
                        <button class="flex-1 bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition">
                            <i class="fas fa-check-circle mr-2"></i>Approuver
                        </button>
                        <button class="flex-1 bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition">
                            <i class="fas fa-times-circle mr-2"></i>Refuser
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Autres demandes -->
        <div class="space-y-4">
            <div class="bg-gray-800 rounded-xl p-6 border border-gray-700 hover:border-indigo-500 transition">
                <div class="flex items-start gap-4">
                    <img src="https://ui-avatars.com/api/?name=Thomas+Bernard&background=10b981&color=fff" alt="Thomas" class="w-12 h-12 rounded-full">
                    <div class="flex-1">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <div class="flex items-center gap-2 mb-1">
                                    <h3 class="font-bold text-white">Thomas Bernard</h3>
                                    <span class="px-2 py-0.5 bg-gray-700 text-gray-300 text-xs rounded">Marketing</span>
                                </div>
                                <p class="text-sm text-gray-400">Demandé il y a 5 heures</p>
                            </div>
                        </div>
                        <div class="bg-gray-700/50 rounded-lg p-4 border border-gray-600 mb-4">
                            <div class="flex items-center gap-4">
                                <img src="https://images.unsplash.com/photo-1625948515291-69613efd103f?w=80&h=80&fit=crop" alt="Souris" class="w-20 h-20 rounded-lg object-cover">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 mb-2">
                                        <h4 class="font-semibold text-white">Souris Ergonomique</h4>
                                        <span class="px-2 py-1 bg-amber-500 text-white text-xs font-bold rounded">
                                            <i class="fas fa-crown mr-1"></i>Premium
                                        </span>
                                    </div>
                                    <span class="text-sm text-gray-400">450 Tokens</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-3">
                            <button class="flex-1 bg-green-600 text-white py-2.5 rounded-lg font-semibold hover:bg-green-700">
                                <i class="fas fa-check mr-1"></i>Approuver
                            </button>
                            <button class="flex-1 bg-red-600 text-white py-2.5 rounded-lg font-semibold hover:bg-red-700">
                                <i class="fas fa-times mr-1"></i>Refuser
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Historique récent -->
        <div class="bg-gray-800 rounded-xl p-6 mt-8 border border-gray-700">
            <h2 class="text-xl font-bold text-white mb-6">Historique récent</h2>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-4 bg-green-500/10 rounded-lg border border-green-500/30">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-white">Demande approuvée</p>
                            <p class="text-sm text-gray-400">Pierre Durand - Écran 24" - 650 Tokens</p>
                        </div>
                    </div>
                    <span class="text-xs text-gray-500">Il y a 3h</span>
                </div>
                <div class="flex items-center justify-between p-4 bg-red-500/10 rounded-lg border border-red-500/30">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 bg-red-500 rounded-full flex items-center justify-center text-white">
                            <i class="fas fa-times"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-white">Demande refusée</p>
                            <p class="text-sm text-gray-400">Luc Moreau - Clavier mécanique - 380 Tokens</p>
                        </div>
                    </div>
                    <span class="text-xs text-gray-500">Il y a 1 jour</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
