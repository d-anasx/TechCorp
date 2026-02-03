<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechCorp - Finance Dashboard</title>
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
                    <span class="ml-2 px-2 py-1 bg-green-500/20 text-green-400 text-xs font-bold rounded">FINANCE</span>
                    <div class="hidden md:block ml-10">
                        <div class="flex space-x-4">
                            <a href="#" class="text-indigo-400 border-b-2 border-indigo-500 px-3 py-2 text-sm font-medium">Rapports</a>
                            <a href="#" class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">Départements</a>
                            <a href="#" class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">Budget</a>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <p class="text-sm font-medium text-white hidden sm:block">Claire Dubois</p>
                    <img src="https://ui-avatars.com/api/?name=Claire+Dubois&background=10b981&color=fff" alt="Avatar" class="w-10 h-10 rounded-full">
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold text-white mb-2">Rapports Financiers</h1>
                <p class="text-gray-400">Analyse des dépenses en Tokens par département</p>
            </div>
            <div class="flex gap-3">
                <select class="px-4 py-2 bg-gray-800 border border-gray-700 text-white rounded-lg">
                    <option>Février 2026</option>
                    <option>Janvier 2026</option>
                </select>
                <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700">
                    <i class="fas fa-download mr-2"></i>Exporter
                </button>
            </div>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-gradient-to-br from-indigo-600 to-indigo-700 rounded-xl p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-indigo-200 text-sm font-medium">Total Dépensé</p>
                        <p class="text-4xl font-bold mt-2">78,450</p>
                        <p class="text-indigo-200 text-sm mt-2">Tokens ce mois</p>
                        <div class="flex items-center gap-1 mt-2 text-sm">
                            <i class="fas fa-arrow-up"></i>
                            <span>+12.5% vs dernier mois</span>
                        </div>
                    </div>
                    <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-coins text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm font-medium">Budget Mensuel</p>
                        <p class="text-3xl font-bold text-white mt-2">150,000</p>
                        <p class="text-gray-400 text-sm mt-1">Tokens alloués</p>
                    </div>
                    <div class="w-14 h-14 bg-blue-500/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-wallet text-blue-400 text-2xl"></i>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="flex justify-between text-sm mb-1">
                        <span class="text-gray-400">Utilisation</span>
                        <span class="font-semibold text-white">52.3%</span>
                    </div>
                    <div class="w-full bg-gray-700 rounded-full h-2">
                        <div class="bg-blue-500 h-2 rounded-full" style="width: 52.3%"></div>
                    </div>
                </div>
            </div>
            <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm font-medium">Économies</p>
                        <p class="text-3xl font-bold text-green-400 mt-2">12,340</p>
                        <p class="text-gray-400 text-sm mt-1">Tokens économisés</p>
                    </div>
                    <div class="w-14 h-14 bg-green-500/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-piggy-bank text-green-400 text-2xl"></i>
                    </div>
                </div>
            </div>
            <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-400 text-sm font-medium">Commandes</p>
                        <p class="text-3xl font-bold text-white mt-2">1,247</p>
                        <p class="text-gray-400 text-sm mt-1">Validées ce mois</p>
                    </div>
                    <div class="w-14 h-14 bg-purple-500/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-shopping-cart text-purple-400 text-2xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Départements et Top dépensiers -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <!-- Tableau départements -->
            <div class="lg:col-span-2 bg-gray-800 rounded-xl overflow-hidden border border-gray-700">
                <div class="p-6 border-b border-gray-700">
                    <h2 class="text-xl font-bold text-white">Dépenses par Département</h2>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-700/50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Département</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Dépensé</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Budget</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase">Usage</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                            <tr class="hover:bg-gray-700/50">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-pink-500/20 rounded-lg flex items-center justify-center mr-3">
                                            <i class="fas fa-bullhorn text-pink-400"></i>
                                        </div>
                                        <div>
                                            <div class="font-semibold text-white">Marketing</div>
                                            <div class="text-sm text-gray-400">24 employés</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4"><span class="font-semibold text-white">32,450</span></td>
                                <td class="px-6 py-4 text-gray-400">50,000</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <div class="flex-1 bg-gray-700 rounded-full h-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 64.9%"></div>
                                        </div>
                                        <span class="text-sm text-white">64.9%</span>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-700/50">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center mr-3">
                                            <i class="fas fa-laptop-code text-blue-400"></i>
                                        </div>
                                        <div>
                                            <div class="font-semibold text-white">IT</div>
                                            <div class="text-sm text-gray-400">18 employés</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4"><span class="font-semibold text-white">28,720</span></td>
                                <td class="px-6 py-4 text-gray-400">40,000</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <div class="flex-1 bg-gray-700 rounded-full h-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 71.8%"></div>
                                        </div>
                                        <span class="text-sm text-white">71.8%</span>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-700/50">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-purple-500/20 rounded-lg flex items-center justify-center mr-3">
                                            <i class="fas fa-users text-purple-400"></i>
                                        </div>
                                        <div>
                                            <div class="font-semibold text-white">RH</div>
                                            <div class="text-sm text-gray-400">12 employés</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4"><span class="font-semibold text-white">9,180</span></td>
                                <td class="px-6 py-4 text-gray-400">20,000</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <div class="flex-1 bg-gray-700 rounded-full h-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 45.9%"></div>
                                        </div>
                                        <span class="text-sm text-white">45.9%</span>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Top dépensiers -->
            <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
                <h2 class="text-xl font-bold text-white mb-6">Top Dépensiers</h2>
                <div class="space-y-4">
                    <div class="flex items-center gap-3 p-3 bg-gradient-to-r from-yellow-500/10 to-transparent rounded-lg border border-yellow-500/30">
                        <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold">1</div>
                        <img src="https://ui-avatars.com/api/?name=Pierre+Durand&background=3b82f6&color=fff" alt="Pierre" class="w-10 h-10 rounded-full">
                        <div class="flex-1">
                            <p class="font-semibold text-white text-sm">Pierre Durand</p>
                            <p class="text-xs text-gray-400">IT</p>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-white">4,850</p>
                            <p class="text-xs text-gray-400">Tokens</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-gradient-to-r from-gray-500/10 to-transparent rounded-lg border border-gray-600">
                        <div class="w-8 h-8 bg-gray-500 rounded-full flex items-center justify-center text-white font-bold">2</div>
                        <img src="https://ui-avatars.com/api/?name=Marie+Dupont&background=6366f1&color=fff" alt="Marie" class="w-10 h-10 rounded-full">
                        <div class="flex-1">
                            <p class="font-semibold text-white text-sm">Marie Dupont</p>
                            <p class="text-xs text-gray-400">Marketing</p>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-white">4,320</p>
                            <p class="text-xs text-gray-400">Tokens</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-gradient-to-r from-orange-500/10 to-transparent rounded-lg border border-orange-600">
                        <div class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold">3</div>
                        <img src="https://ui-avatars.com/api/?name=Thomas+Bernard&background=10b981&color=fff" alt="Thomas" class="w-10 h-10 rounded-full">
                        <div class="flex-1">
                            <p class="font-semibold text-white text-sm">Thomas Bernard</p>
                            <p class="text-xs text-gray-400">Marketing</p>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-white">3,980</p>
                            <p class="text-xs text-gray-400">Tokens</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Graphiques -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Évolution -->
            <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
                <h2 class="text-xl font-bold text-white mb-6">Évolution des Dépenses</h2>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="text-sm text-gray-400">Janvier 2026</span>
                            <span class="text-sm font-semibold text-white">69,780</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-3">
                            <div class="bg-indigo-500 h-3 rounded-full" style="width: 93%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-2">
                            <span class="text-sm text-gray-400 font-semibold">Février 2026</span>
                            <span class="text-sm font-bold text-indigo-400">78,450</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-3">
                            <div class="bg-gradient-to-r from-indigo-500 to-indigo-600 h-3 rounded-full shadow-lg" style="width: 105%"></div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 p-4 bg-blue-500/10 rounded-lg border border-blue-500/30">
                    <p class="text-sm text-blue-400">
                        <i class="fas fa-info-circle mr-2"></i>
                        <span class="font-semibold">+12.5%</span> d'augmentation vs le mois dernier
                    </p>
                </div>
            </div>

            <!-- Répartition -->
            <div class="bg-gray-800 rounded-xl p-6 border border-gray-700">
                <h2 class="text-xl font-bold text-white mb-6">Répartition par Catégorie</h2>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between mb-2">
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-blue-500 rounded"></div>
                                <span class="text-sm text-gray-300">Bureautique</span>
                            </div>
                            <span class="text-sm font-semibold text-white">28,340 (36%)</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-2">
                            <div class="bg-blue-500 h-2 rounded-full" style="width: 36%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-2">
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-purple-500 rounded"></div>
                                <span class="text-sm text-gray-300">Informatique</span>
                            </div>
                            <span class="text-sm font-semibold text-white">31,560 (40%)</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-2">
                            <div class="bg-purple-500 h-2 rounded-full" style="width: 40%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-2">
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4 bg-green-500 rounded"></div>
                                <span class="text-sm text-gray-300">Mobilier</span>
                            </div>
                            <span class="text-sm font-semibold text-white">11,780 (15%)</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-2">
                            <div class="bg-green-500 h-2 rounded-full" style="width: 15%"></div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 grid grid-cols-2 gap-4">
                    <div class="p-4 bg-purple-500/10 rounded-lg border border-purple-500/30">
                        <p class="text-xs text-purple-400 font-medium mb-1">Premium</p>
                        <p class="text-2xl font-bold text-purple-400">24,890</p>
                        <p class="text-xs text-purple-400 mt-1">31.7%</p>
                    </div>
                    <div class="p-4 bg-gray-700/50 rounded-lg border border-gray-600">
                        <p class="text-xs text-gray-400 font-medium mb-1">Standard</p>
                        <p class="text-2xl font-bold text-gray-300">53,560</p>
                        <p class="text-xs text-gray-400 mt-1">68.3%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
