<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechCorp - Admin Dashboard</title>
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
                    <span class="ml-2 px-2 py-1 bg-purple-500/20 text-purple-400 text-xs font-bold rounded">ADMIN</span>
                    <div class="hidden md:block ml-10">
                        <div class="flex space-x-4">
                            <a href="#" class="text-indigo-400 border-b-2 border-indigo-500 px-3 py-2 text-sm font-medium">Dashboard</a>
                            <a href="#" class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">Produits</a>
                            <a href="#" class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">Stocks</a>
                            <a href="{{ route('users.index') }}" class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">Users</a>

                        </div>
                    </div>
                </div>
                <img src="https://ui-avatars.com/api/?name=Admin+Systeme&background=9333ea&color=fff" alt="Avatar" class="w-10 h-10 rounded-full">
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-3xl font-bold text-white mb-6">Gestion de l'Inventaire</h1>

        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-gradient-to-br from-blue-600 to-blue-700 rounded-xl p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-blue-200 text-sm font-medium">Total Produits</p>
                        <p class="text-4xl font-bold mt-2">124</p>
                        <p class="text-blue-200 text-sm mt-2">+12 ce mois</p>
                    </div>
                    <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-box text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-gradient-to-br from-green-600 to-green-700 rounded-xl p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-green-200 text-sm font-medium">Valeur Stock</p>
                        <p class="text-4xl font-bold mt-2">485K</p>
                        <p class="text-green-200 text-sm mt-2">Tokens</p>
                    </div>
                    <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-coins text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-gradient-to-br from-orange-600 to-orange-700 rounded-xl p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-orange-200 text-sm font-medium">Ruptures</p>
                        <p class="text-4xl font-bold mt-2">8</p>
                        <p class="text-orange-200 text-sm mt-2">À réapprovisionner</p>
                    </div>
                    <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-exclamation-triangle text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-gradient-to-br from-purple-600 to-purple-700 rounded-xl p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-purple-200 text-sm font-medium">Premium</p>
                        <p class="text-4xl font-bold mt-2">23</p>
                        <p class="text-purple-200 text-sm mt-2">18% du catalogue</p>
                    </div>
                    <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-crown text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Barre d'actions -->
        <div class="bg-gray-800 rounded-xl p-6 mb-6 border border-gray-700">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-1">
                    <input type="text" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-indigo-500 placeholder-gray-400" placeholder="Rechercher un produit...">
                </div>
                <select class="px-4 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg">
                    <option>Toutes catégories</option>
                    <option>Bureautique</option>
                    <option>Informatique</option>
                </select>
                <button class="px-6 py-2 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700">
                    <i class="fas fa-plus mr-2"></i>Nouveau Produit
                </button>
            </div>
        </div>

        <!-- Tableau des produits -->
        <div class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700">
            <div class="p-6 border-b border-gray-700">
                <h2 class="text-xl font-bold text-white">Liste des Produits</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-700/50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Produit</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Catégorie</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Prix</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Stock</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Type</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        <!-- Ligne 1 -->
                        <tr class="hover:bg-gray-700/50">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <img src="https://images.unsplash.com/photo-1586075010923-2dd4570fb338?w=50&h=50&fit=crop" alt="Produit" class="w-10 h-10 rounded-lg object-cover">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-white">Lot de 10 Stylos BIC</div>
                                        <div class="text-sm text-gray-400">SKU: STY-001</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium bg-blue-500/20 text-blue-400 rounded">Bureautique</span></td>
                            <td class="px-6 py-4"><span class="text-sm font-semibold text-white">50 <i class="fas fa-coins text-yellow-500 text-xs"></i></span></td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="w-16 bg-gray-700 rounded-full h-2 mr-2">
                                        <div class="bg-green-500 h-2 rounded-full" style="width: 80%"></div>
                                    </div>
                                    <span class="text-sm text-white">245</span>
                                </div>
                            </td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium bg-gray-700 text-gray-300 rounded">Standard</span></td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-400 hover:text-blue-300"><i class="fas fa-edit"></i></button>
                                    <button class="text-green-400 hover:text-green-300"><i class="fas fa-box"></i></button>
                                    <button class="text-red-400 hover:text-red-300"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <!-- Ligne 2 - Premium -->
                        <tr class="hover:bg-gray-700/50 bg-amber-500/5">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <img src="https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=50&h=50&fit=crop" alt="Produit" class="w-10 h-10 rounded-lg object-cover">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-white flex items-center gap-2">
                                            Casque Anti-bruit
                                            <i class="fas fa-crown text-amber-500 text-xs"></i>
                                        </div>
                                        <div class="text-sm text-gray-400">SKU: AUD-005</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium bg-purple-500/20 text-purple-400 rounded">Informatique</span></td>
                            <td class="px-6 py-4"><span class="text-sm font-semibold text-white">850 <i class="fas fa-coins text-yellow-500 text-xs"></i></span></td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="w-16 bg-gray-700 rounded-full h-2 mr-2">
                                        <div class="bg-orange-500 h-2 rounded-full" style="width: 15%"></div>
                                    </div>
                                    <span class="text-sm text-orange-400">3</span>
                                </div>
                            </td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-bold bg-amber-500/20 text-amber-400 rounded">Premium</span></td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-400 hover:text-blue-300"><i class="fas fa-edit"></i></button>
                                    <button class="text-green-400 hover:text-green-300"><i class="fas fa-box"></i></button>
                                    <button class="text-red-400 hover:text-red-300"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        <!-- Ligne 3 - Rupture -->
                        <tr class="hover:bg-gray-700/50 bg-red-500/5">
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <img src="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?w=50&h=50&fit=crop" alt="Produit" class="w-10 h-10 rounded-lg object-cover opacity-50">
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-400">Lampe LED Bureau</div>
                                        <div class="text-sm text-gray-500">SKU: LMP-012</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium bg-blue-500/20 text-blue-400 rounded">Bureautique</span></td>
                            <td class="px-6 py-4"><span class="text-sm font-semibold text-gray-400">320 <i class="fas fa-coins text-gray-500 text-xs"></i></span></td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="w-16 bg-gray-700 rounded-full h-2 mr-2">
                                        <div class="bg-red-500 h-2 rounded-full" style="width: 0%"></div>
                                    </div>
                                    <span class="text-sm text-red-400">0</span>
                                </div>
                            </td>
                            <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium bg-red-500/20 text-red-400 rounded">Rupture</span></td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <button class="text-blue-400 hover:text-blue-300"><i class="fas fa-edit"></i></button>
                                    <button class="text-green-400 hover:text-green-300"><i class="fas fa-box"></i></button>
                                    <button class="text-red-400 hover:text-red-300"><i class="fas fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
