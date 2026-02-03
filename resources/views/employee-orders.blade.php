<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechCorp - Mes Commandes</title>
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
                            <a href="#" class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">Boutique</a>
                            <a href="#" class="text-indigo-400 border-b-2 border-indigo-500 px-3 py-2 text-sm font-medium">Mes Commandes</a>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <p class="text-sm font-medium text-white hidden sm:block">Marie Dupont</p>
                    <img src="https://ui-avatars.com/api/?name=Marie+Dupont&background=6366f1&color=fff" alt="Avatar" class="w-10 h-10 rounded-full">
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-3xl font-bold text-white mb-6">Mes Commandes</h1>

        <!-- Filtres -->
        <div class="bg-gray-800 rounded-xl p-6 mb-6 border border-gray-700">
            <div class="flex gap-4 flex-wrap">
                <button class="px-6 py-2 bg-indigo-600 text-white rounded-lg font-medium">Toutes (12)</button>
                <button class="px-6 py-2 bg-gray-700 text-gray-300 rounded-lg font-medium hover:bg-gray-600">En attente (2)</button>
                <button class="px-6 py-2 bg-gray-700 text-gray-300 rounded-lg font-medium hover:bg-gray-600">Validées (6)</button>
                <button class="px-6 py-2 bg-gray-700 text-gray-300 rounded-lg font-medium hover:bg-gray-600">Livrées (4)</button>
            </div>
        </div>

        <!-- Commande en attente -->
        <div class="bg-gray-800 rounded-xl overflow-hidden border-l-4 border-yellow-500 mb-6 border border-gray-700">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <div class="flex items-center gap-3 mb-2">
                            <h3 class="text-lg font-bold text-white">Commande #CMD-2026-0234</h3>
                            <span class="px-3 py-1 bg-yellow-500/20 text-yellow-400 text-sm font-medium rounded-full">
                                <i class="fas fa-clock mr-1"></i>En attente d'approbation
                            </span>
                        </div>
                        <p class="text-sm text-gray-400">Commandé le 2 Février 2026 à 14:23</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm text-gray-400 mb-1">Total</p>
                        <p class="text-2xl font-bold text-white">850 <span class="text-sm">Tokens</span></p>
                    </div>
                </div>
                <div class="bg-amber-500/10 border border-amber-500/30 rounded-lg p-4 mb-4">
                    <div class="flex items-center gap-4">
                        <img src="https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=80&h=80&fit=crop" alt="Casque" class="w-20 h-20 rounded-lg object-cover">
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-1">
                                <h4 class="font-semibold text-white">Casque Anti-bruit</h4>
                                <span class="px-2 py-0.5 bg-amber-500 text-white text-xs font-bold rounded"><i class="fas fa-crown mr-1"></i>Premium</span>
                            </div>
                            <p class="text-sm text-gray-400">Quantité: 1 • 850 Tokens</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between pt-4 border-t border-gray-700">
                    <p class="text-sm text-gray-400"><i class="fas fa-info-circle text-amber-500 mr-2"></i>En attente de validation de votre manager</p>
                    <button class="px-4 py-2 bg-red-500/20 text-red-400 rounded-lg text-sm font-medium hover:bg-red-500/30">Annuler</button>
                </div>
            </div>
        </div>

        <!-- Commande validée -->
        <div class="bg-gray-800 rounded-xl overflow-hidden border-l-4 border-blue-500 mb-6 border border-gray-700">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <div class="flex items-center gap-3 mb-2">
                            <h3 class="text-lg font-bold text-white">Commande #CMD-2026-0231</h3>
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-sm font-medium rounded-full">
                                <i class="fas fa-box mr-1"></i>En préparation
                            </span>
                        </div>
                        <p class="text-sm text-gray-400">Commandé le 30 Janvier 2026</p>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold text-white">245 <span class="text-sm">Tokens</span></p>
                    </div>
                </div>
                <!-- Progress bar -->
                <div class="mt-4">
                    <div class="flex justify-between mb-2">
                        <div class="flex flex-col items-center flex-1">
                            <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white mb-1">
                                <i class="fas fa-check text-sm"></i>
                            </div>
                            <span class="text-xs text-gray-400">Validée</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white mb-1">
                                <i class="fas fa-box text-sm"></i>
                            </div>
                            <span class="text-xs text-gray-400">Préparation</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center text-gray-400 mb-1">
                                <i class="fas fa-truck text-sm"></i>
                            </div>
                            <span class="text-xs text-gray-400">Livraison</span>
                        </div>
                        <div class="flex flex-col items-center flex-1">
                            <div class="w-8 h-8 bg-gray-600 rounded-full flex items-center justify-center text-gray-400 mb-1">
                                <i class="fas fa-check-double text-sm"></i>
                            </div>
                            <span class="text-xs text-gray-400">Reçue</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Commande livrée -->
        <div class="bg-gray-800 rounded-xl overflow-hidden border-l-4 border-green-500 mb-6 border border-gray-700">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <div class="flex items-center gap-3 mb-2">
                            <h3 class="text-lg font-bold text-white">Commande #CMD-2026-0225</h3>
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 text-sm font-medium rounded-full">
                                <i class="fas fa-check-circle mr-1"></i>Livrée
                            </span>
                        </div>
                        <p class="text-sm text-gray-400">Livrée le 28 Janvier 2026</p>
                    </div>
                    <div class="text-right">
                        <p class="text-2xl font-bold text-white">120 <span class="text-sm">Tokens</span></p>
                    </div>
                </div>
                <div class="flex items-center justify-between pt-4 border-t border-gray-700">
                    <p class="text-sm text-green-400"><i class="fas fa-check-circle mr-2"></i>Commande livrée avec succès</p>
                    <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg text-sm font-medium hover:bg-indigo-700">
                        <i class="fas fa-redo mr-1"></i>Commander à nouveau
                    </button>
                </div>
            </div>
        </div>

        <!-- Commande refusée -->
        <div class="bg-gray-800 rounded-xl overflow-hidden border-l-4 border-red-500 border border-gray-700">
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <div class="flex items-center gap-3 mb-2">
                            <h3 class="text-lg font-bold text-white">Commande #CMD-2026-0220</h3>
                            <span class="px-3 py-1 bg-red-500/20 text-red-400 text-sm font-medium rounded-full">
                                <i class="fas fa-times-circle mr-1"></i>Refusée
                            </span>
                        </div>
                        <p class="text-sm text-gray-400">Refusée le 21 Janvier 2026</p>
                    </div>
                    <div class="text-right">
                        <p class="text-sm text-gray-400 mb-1">Remboursé</p>
                        <p class="text-2xl font-bold text-green-400">450 <span class="text-sm">Tokens</span></p>
                    </div>
                </div>
                <div class="bg-red-500/10 border border-red-500/30 rounded-lg p-4">
                    <p class="font-medium text-red-400 mb-1">Raison du refus:</p>
                    <p class="text-sm text-gray-300">"Le département a déjà été équipé en souris ergonomiques le mois dernier."</p>
                    <p class="text-xs text-gray-500 mt-2">- J. Martin, Manager Marketing</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
