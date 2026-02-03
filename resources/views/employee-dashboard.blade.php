<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechCorp - Tableau de bord Employé</title>
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
                    </div>
                    <div class="hidden md:block ml-10">
                        <div class="flex space-x-4">
                            <a href="#" class="text-indigo-400 border-b-2 border-indigo-500 px-3 py-2 text-sm font-medium">
                                Boutique
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">
                                Mes Commandes
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">
                                Historique
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <!-- Panier -->
                    <button class="relative p-2 text-gray-400 hover:text-white">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span class="absolute top-0 right-0 inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-red-500 rounded-full">
                            3
                        </span>
                    </button>
                    <!-- Notifications -->
                    <button class="relative p-2 text-gray-400 hover:text-white">
                        <i class="fas fa-bell text-xl"></i>
                        <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>
                    </button>
                    <!-- Profil -->
                    <div class="flex items-center space-x-3">
                        <div class="text-right hidden sm:block">
                            <p class="text-sm font-medium text-white">Marie Dupont</p>
                            <p class="text-xs text-gray-400">Employée - Marketing</p>
                        </div>
                        <img src="https://ui-avatars.com/api/?name=Marie+Dupont&background=6366f1&color=fff" 
                             alt="Avatar" class="w-10 h-10 rounded-full">
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Cards de statistiques -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Solde de Tokens -->
            <div class="bg-gradient-to-br from-indigo-600 to-indigo-700 rounded-xl shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-indigo-200 text-sm font-medium">Solde Actuel</p>
                        <p class="text-4xl font-bold mt-2">2,450 <span class="text-2xl">Tokens</span></p>
                        <p class="text-indigo-200 text-sm mt-2">
                            <i class="fas fa-calendar-alt mr-1"></i>
                            Prochain crédit: 1er Mars 2026
                        </p>
                    </div>
                    <div class="w-16 h-16 bg-white/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-coins text-3xl"></i>
                    </div>
                </div>
            </div>

            <!-- Commandes en cours -->
            <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm font-medium">Commandes en cours</p>
                        <p class="text-3xl font-bold text-white mt-2">4</p>
                        <p class="text-green-400 text-sm mt-2">
                            <i class="fas fa-check-circle mr-1"></i>
                            2 validées
                        </p>
                    </div>
                    <div class="w-16 h-16 bg-blue-500/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-box text-blue-400 text-2xl"></i>
                    </div>
                </div>
            </div>

            <!-- Dépenses ce mois -->
            <div class="bg-gray-800 rounded-xl shadow-lg p-6 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm font-medium">Dépensé ce mois</p>
                        <p class="text-3xl font-bold text-white mt-2">550 <span class="text-lg">Tokens</span></p>
                        <p class="text-gray-400 text-sm mt-2">
                            <i class="fas fa-chart-line mr-1"></i>
                            18% du budget mensuel
                        </p>
                    </div>
                    <div class="w-16 h-16 bg-green-500/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-chart-pie text-green-400 text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filtre et recherche -->
        <div class="bg-gray-800 rounded-xl shadow-lg p-6 mb-6 border border-gray-700">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div class="flex-1">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-500"></i>
                        </div>
                        <input type="text" 
                               class="block w-full pl-10 pr-3 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent placeholder-gray-400"
                               placeholder="Rechercher un produit...">
                    </div>
                </div>
                <div class="flex gap-3">
                    <select class="px-4 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-indigo-500">
                        <option>Toutes catégories</option>
                        <option>Bureautique</option>
                        <option>Informatique</option>
                        <option>Mobilier</option>
                        <option>Divers</option>
                    </select>
                    <select class="px-4 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-indigo-500">
                        <option>Prix: Tous</option>
                        <option>Prix: Croissant</option>
                        <option>Prix: Décroissant</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Catalogue de produits -->
        <h2 class="text-2xl font-bold text-white mb-6">Catalogue de Fournitures</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Produit 1 - Standard -->
            <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 border border-gray-700">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1586075010923-2dd4570fb338?w=400&h=300&fit=crop" 
                         alt="Stylos" class="w-full h-48 object-cover">
                    <span class="absolute top-3 right-3 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        En stock
                    </span>
                </div>
                <div class="p-4">
                    <div class="flex items-start justify-between mb-2">
                        <h3 class="text-lg font-semibold text-white">Lot de 10 Stylos BIC</h3>
                        <span class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded">Standard</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-3">Stylos à bille bleus, pointe moyenne</p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-1">
                            <i class="fas fa-coins text-yellow-500"></i>
                            <span class="text-2xl font-bold text-white">50</span>
                            <span class="text-sm text-gray-400">Tokens</span>
                        </div>
                        <span class="text-sm text-gray-400">Stock: 245</span>
                    </div>
                    <button class="w-full bg-indigo-600 text-white py-2 rounded-lg font-medium hover:bg-indigo-700 transition">
                        <i class="fas fa-cart-plus mr-2"></i>Ajouter au panier
                    </button>
                </div>
            </div>

            <!-- Produit 2 - Standard -->
            <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 border border-gray-700">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1544816155-12df9643f363?w=400&h=300&fit=crop" 
                         alt="Cahiers" class="w-full h-48 object-cover">
                    <span class="absolute top-3 right-3 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        En stock
                    </span>
                </div>
                <div class="p-4">
                    <div class="flex items-start justify-between mb-2">
                        <h3 class="text-lg font-semibold text-white">Cahier A4 Spirale</h3>
                        <span class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded">Standard</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-3">200 pages, quadrillé 5x5</p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-1">
                            <i class="fas fa-coins text-yellow-500"></i>
                            <span class="text-2xl font-bold text-white">75</span>
                            <span class="text-sm text-gray-400">Tokens</span>
                        </div>
                        <span class="text-sm text-gray-400">Stock: 128</span>
                    </div>
                    <button class="w-full bg-indigo-600 text-white py-2 rounded-lg font-medium hover:bg-indigo-700 transition">
                        <i class="fas fa-cart-plus mr-2"></i>Ajouter au panier
                    </button>
                </div>
            </div>

            <!-- Produit 3 - Premium -->
            <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 border-2 border-amber-500">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1625948515291-69613efd103f?w=400&h=300&fit=crop" 
                         alt="Souris" class="w-full h-48 object-cover">
                    <span class="absolute top-3 right-3 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        En stock
                    </span>
                    <span class="absolute top-3 left-3 bg-amber-500 text-white text-xs font-bold px-3 py-1 rounded-full flex items-center">
                        <i class="fas fa-crown mr-1"></i>Premium
                    </span>
                </div>
                <div class="p-4">
                    <div class="flex items-start justify-between mb-2">
                        <h3 class="text-lg font-semibold text-white">Souris Ergonomique</h3>
                        <span class="text-xs bg-amber-500/20 text-amber-400 px-2 py-1 rounded">Premium</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-3">Sans fil, rechargeable USB-C</p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-1">
                            <i class="fas fa-coins text-yellow-500"></i>
                            <span class="text-2xl font-bold text-white">450</span>
                            <span class="text-sm text-gray-400">Tokens</span>
                        </div>
                        <span class="text-sm text-gray-400">Stock: 18</span>
                    </div>
                    <button class="w-full bg-amber-500 text-white py-2 rounded-lg font-medium hover:bg-amber-600 transition">
                        <i class="fas fa-shield-alt mr-2"></i>Demande approbation
                    </button>
                    <p class="text-xs text-gray-500 text-center mt-2">
                        <i class="fas fa-info-circle mr-1"></i>Nécessite validation manager
                    </p>
                </div>
            </div>

            <!-- Produit 4 - Premium -->
            <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 border-2 border-amber-500">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=400&h=300&fit=crop" 
                         alt="Casque" class="w-full h-48 object-cover">
                    <span class="absolute top-3 right-3 bg-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        Stock faible
                    </span>
                    <span class="absolute top-3 left-3 bg-amber-500 text-white text-xs font-bold px-3 py-1 rounded-full flex items-center">
                        <i class="fas fa-crown mr-1"></i>Premium
                    </span>
                </div>
                <div class="p-4">
                    <div class="flex items-start justify-between mb-2">
                        <h3 class="text-lg font-semibold text-white">Casque Anti-bruit</h3>
                        <span class="text-xs bg-amber-500/20 text-amber-400 px-2 py-1 rounded">Premium</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-3">Bluetooth, réduction active du bruit</p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-1">
                            <i class="fas fa-coins text-yellow-500"></i>
                            <span class="text-2xl font-bold text-white">850</span>
                            <span class="text-sm text-gray-400">Tokens</span>
                        </div>
                        <span class="text-sm text-orange-400">Stock: 3</span>
                    </div>
                    <button class="w-full bg-amber-500 text-white py-2 rounded-lg font-medium hover:bg-amber-600 transition">
                        <i class="fas fa-shield-alt mr-2"></i>Demande approbation
                    </button>
                    <p class="text-xs text-gray-500 text-center mt-2">
                        <i class="fas fa-info-circle mr-1"></i>Nécessite validation manager
                    </p>
                </div>
            </div>

            <!-- Produit 5 -->
            <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 border border-gray-700">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1599894380144-e5c6f28abbc6?w=400&h=300&fit=crop" 
                         alt="Classeurs" class="w-full h-48 object-cover">
                    <span class="absolute top-3 right-3 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        En stock
                    </span>
                </div>
                <div class="p-4">
                    <div class="flex items-start justify-between mb-2">
                        <h3 class="text-lg font-semibold text-white">Lot de 5 Classeurs</h3>
                        <span class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded">Standard</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-3">Format A4, dos 8cm, couleurs assorties</p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-1">
                            <i class="fas fa-coins text-yellow-500"></i>
                            <span class="text-2xl font-bold text-white">120</span>
                            <span class="text-sm text-gray-400">Tokens</span>
                        </div>
                        <span class="text-sm text-gray-400">Stock: 89</span>
                    </div>
                    <button class="w-full bg-indigo-600 text-white py-2 rounded-lg font-medium hover:bg-indigo-700 transition">
                        <i class="fas fa-cart-plus mr-2"></i>Ajouter au panier
                    </button>
                </div>
            </div>

            <!-- Produit 6 -->
            <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 border border-gray-700">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1611532736570-8e93e8a5344f?w=400&h=300&fit=crop" 
                         alt="Post-it" class="w-full h-48 object-cover">
                    <span class="absolute top-3 right-3 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        En stock
                    </span>
                </div>
                <div class="p-4">
                    <div class="flex items-start justify-between mb-2">
                        <h3 class="text-lg font-semibold text-white">Pack Post-it</h3>
                        <span class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded">Standard</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-3">12 blocs, couleurs variées, 100 feuilles</p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-1">
                            <i class="fas fa-coins text-yellow-500"></i>
                            <span class="text-2xl font-bold text-white">95</span>
                            <span class="text-sm text-gray-400">Tokens</span>
                        </div>
                        <span class="text-sm text-gray-400">Stock: 156</span>
                    </div>
                    <button class="w-full bg-indigo-600 text-white py-2 rounded-lg font-medium hover:bg-indigo-700 transition">
                        <i class="fas fa-cart-plus mr-2"></i>Ajouter au panier
                    </button>
                </div>
            </div>

            <!-- Produit 7 -->
            <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 border border-gray-700">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=400&h=300&fit=crop" 
                         alt="Agrafeuse" class="w-full h-48 object-cover">
                    <span class="absolute top-3 right-3 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        En stock
                    </span>
                </div>
                <div class="p-4">
                    <div class="flex items-start justify-between mb-2">
                        <h3 class="text-lg font-semibold text-white">Agrafeuse Professionnelle</h3>
                        <span class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded">Standard</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-3">Capacité 40 feuilles + 1000 agrafes</p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-1">
                            <i class="fas fa-coins text-yellow-500"></i>
                            <span class="text-2xl font-bold text-white">180</span>
                            <span class="text-sm text-gray-400">Tokens</span>
                        </div>
                        <span class="text-sm text-gray-400">Stock: 67</span>
                    </div>
                    <button class="w-full bg-indigo-600 text-white py-2 rounded-lg font-medium hover:bg-indigo-700 transition">
                        <i class="fas fa-cart-plus mr-2"></i>Ajouter au panier
                    </button>
                </div>
            </div>

            <!-- Produit 8 - Rupture de stock -->
            <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden opacity-60 border border-gray-700">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?w=400&h=300&fit=crop" 
                         alt="Lampe" class="w-full h-48 object-cover grayscale">
                    <span class="absolute top-3 right-3 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                        Rupture
                    </span>
                </div>
                <div class="p-4">
                    <div class="flex items-start justify-between mb-2">
                        <h3 class="text-lg font-semibold text-gray-400">Lampe LED Bureau</h3>
                        <span class="text-xs bg-gray-700 text-gray-400 px-2 py-1 rounded">Standard</span>
                    </div>
                    <p class="text-gray-500 text-sm mb-3">Intensité réglable, bras articulé</p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-1">
                            <i class="fas fa-coins text-gray-500"></i>
                            <span class="text-2xl font-bold text-gray-400">320</span>
                            <span class="text-sm text-gray-500">Tokens</span>
                        </div>
                        <span class="text-sm text-red-400">Stock: 0</span>
                    </div>
                    <button class="w-full bg-gray-700 text-gray-400 py-2 rounded-lg font-medium cursor-not-allowed" disabled>
                        <i class="fas fa-times-circle mr-2"></i>Indisponible
                    </button>
                    <p class="text-xs text-gray-500 text-center mt-2">
                        <i class="fas fa-clock mr-1"></i>Retour prévu: 15 Mars 2026
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
