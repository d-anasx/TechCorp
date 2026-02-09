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
    @include('partials.navbar')

    <!-- Contenu principal -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Cards de statistiques -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Solde de Tokens -->
            <div class="bg-gradient-to-br from-indigo-600 to-indigo-700 rounded-xl shadow-lg p-6 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-indigo-200 text-sm font-medium">Solde Actuel</p>
                        <p class="text-4xl font-bold mt-2">{{ $employee->tokens }} <span class="text-2xl">Tokens</span>
                        </p>
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
                        <p class="text-3xl font-bold text-white mt-2">{{ $orders->count() }}</p>
                        <p class="text-green-400 text-sm mt-2">
                            <i class="fas fa-check-circle mr-1"></i>
                            {{ $validatedOrders->count() }} validées
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
                        <p class="text-3xl font-bold text-white mt-2">{{ 2000 - $employee->tokens }} <span
                                class="text-lg">Tokens</span></p>
                        <p class="text-gray-400 text-sm mt-2">
                            <i class="fas fa-chart-line mr-1"></i>
                            {{ (2000 - $employee->tokens) / 20 }}% du budget mensuel
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
                    <select
                        class="px-4 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-indigo-500">
                        <option>Toutes catégories</option>
                        <option>Bureautique</option>
                        <option>Informatique</option>
                        <option>Mobilier</option>
                        <option>Divers</option>
                    </select>
                    <select
                        class="px-4 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-indigo-500">
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
            @foreach ($products as $product)
                <div
                    class="bg-gray-800 rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition duration-300 border-2 {{ $product->isPremium ? 'border-amber-500' : 'border-gray-700' }}">

                    <div class="relative">
                        <img src="{{ $product->photo_path }}" alt="{{ $product->name }}"
                            class="w-full h-48 object-cover {{ $product->quantity <= 0 ? 'grayscale' : '' }}">

                        @if ($product->quantity > 0)
                            <span
                                class="absolute top-3 right-3 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                                En stock ({{ $product->quantity }})
                            </span>
                        @else
                            <span
                                class="absolute top-3 right-3 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                                Rupture
                            </span>
                        @endif

                        @if ($product->isPremium)
                            <span
                                class="absolute top-3 left-3 bg-amber-500 text-white text-xs font-bold px-3 py-1 rounded-full flex items-center">
                                <i class="fas fa-crown mr-1"></i>Premium
                            </span>
                        @endif
                    </div>

                    <div class="p-4">
                        <div class="flex items-start justify-between mb-2">
                            <h3 class="text-lg font-semibold text-white">{{ $product->name }}</h3>
                            <span
                                class="text-xs {{ $product->isPremium ? 'bg-amber-500/20 text-amber-400' : 'bg-gray-700 text-gray-300' }} px-2 py-1 rounded">
                                {{ $product->isPremium ? 'Premium' : 'Standard' }}
                            </span>
                        </div>

                        <p class="text-gray-500 text-xs mb-3">Ajouté le : {{ $product->created_at->format('d/m/Y') }}
                        </p>

                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center space-x-1">
                                <i
                                    class="fas fa-coins {{ $product->isPremium ? 'text-amber-500' : 'text-yellow-500' }}"></i>
                                <span class="text-2xl font-bold text-white">{{ $product->price }}</span>
                                <span class="text-sm text-gray-400">Tokens</span>
                            </div>
                        </div>

                        @if ($product->quantity > 0)
                            @if ($product->isPremium && $employee->role->status === 'employee')
                                <button
                                    onclick="addToCart({
                                    id: {{ $product->id }},
                                    name: '{{ $product->name }}',
                                    price: {{ $product->price }},
                                    isPremium: {{ $product->isPremium ? 'true' : 'false' }}
                                })"
                                    class="w-full bg-amber-500 text-white py-2 rounded-lg font-medium hover:bg-amber-600 transition">
                                    <i class="fas fa-shield-alt mr-2"></i>Demande approbation
                                </button>
                                <p class="text-[10px] text-gray-500 text-center mt-2">Nécessite validation manager</p>
                            @else
                                <button
                                    onclick="addToCart({
                                    id: {{ $product->id }},
                                    name: '{{ $product->name }}',
                                    price: {{ $product->price }},
                                    isPremium: {{ $product->isPremium ? 'true' : 'false' }}
    }                               )"
                                    class="w-full bg-indigo-600 text-white py-2 rounded-lg font-medium hover:bg-indigo-700 transition">
                                    <i class="fas fa-cart-plus mr-2"></i>Ajouter au panier
                                </button>
                            @endif
                        @else
                            <button
                                class="w-full bg-gray-700 text-gray-400 py-2 rounded-lg font-medium cursor-not-allowed"
                                disabled>
                                Indisponible
                            </button>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        const CART_KEY = 'cart';
        const MAX_TOKENS = 2000;

        function getCart() {
            return JSON.parse(localStorage.getItem(CART_KEY)) || {};
        }

        function saveCart(cart) {
            localStorage.setItem(CART_KEY, JSON.stringify(cart));
        }

        function getTotal(cart) {
            return Object.values(cart)
                .reduce((sum, item) => sum + item.price * item.quantity, 0);
        }

        function updateCartBadge() {
            const cart = getCart();
            const count = Object.values(cart)
                .reduce((sum, item) => sum + item.quantity, 0);

            document.getElementById('cart-count').textContent = count;
        }

        document.addEventListener('DOMContentLoaded', updateCartBadge);

        function addToCart(product) {
            let cart = getCart();

            if (!cart[product.id]) {
                cart[product.id] = {
                    ...product,
                    quantity: 1
                };
            } else {
                cart[product.id].quantity++;
            }

            // 🚨 Token limit
            if (getTotal(cart) > MAX_TOKENS) {
                alert('Limite de 2000 tokens dépassée');
                return;
            }

            saveCart(cart);
            updateCartBadge();
        }
    </script>

</body>

</html>
