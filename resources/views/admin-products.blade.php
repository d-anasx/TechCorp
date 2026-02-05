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
                            <a href="#"
                                class="text-indigo-400 border-b-2 border-indigo-500 px-3 py-2 text-sm font-medium">Dashboard</a>
                            <a href="{{ route('adminproducts') }}"
                                class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">Produits</a>
                            <a href="#" class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">Stocks</a>
                            <a href="{{ route('admindashboard.index') }}"
                                class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">users</a>
                        </div>
                    </div>
                </div>
                <img src="https://ui-avatars.com/api/?name=Admin+Systeme&background=9333ea&color=fff" alt="Avatar"
                    class="w-10 h-10 rounded-full">
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
                        <p class="text-4xl font-bold mt-2">{{ $totalProducts  }}</p>
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
                        <p class="text-4xl font-bold mt-2">{{ $total_stock }}</p>
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
                        <p class="text-4xl font-bold mt-2">{{ $standard }}</p>
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
                        <p class="text-4xl font-bold mt-2">{{ $Premium }}</p>
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
                    <input type="text"
                        class="w-full px-4 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-indigo-500 placeholder-gray-400"
                        placeholder="Rechercher un produit...">
                </div>
                <select class="px-4 py-2 bg-gray-700 border border-gray-600 text-white rounded-lg">
                    <option>Toutes catégories</option>
                    <option>Bureautique</option>
                    <option>Informatique</option>
                </select>
                <button id="btn-new-product" type="button" class="px-6 py-2 bg-indigo-600 text-white rounded-lg font-medium hover:bg-indigo-700">
                    <i class="fas fa-plus mr-2"></i>Nouveau Produit
                </button>
            </div>
        </div>

        <!-- Tableau des produits -->
        <div class="bg-gray-800 rounded-xl overflow-hidden border border-gray-700">
            <div class="p-6 border-b border-gray-700">
                <h2 class="text-xl font-bold text-white">Liste des Produits</h2>
            </div>
                <!-- Product Modal -->
                <div id="product-modal" class="fixed inset-0 z-50 hidden items-center justify-center px-4">
                    <div id="modal-backdrop" class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
                    <div class="relative max-w-2xl w-full bg-gray-800 rounded-xl shadow-xl overflow-hidden border border-gray-700">
                        <div class="p-6">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-bold text-white">Nouveau Produit</h3>
                                <button id="modal-close" class="text-gray-300 hover:text-white">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>

                            <form id="product-form" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="mt-4 space-y-4">
                                @csrf
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="text-sm text-gray-300">Titre</label>
                                        <input name="name" type="text" required class="mt-1 w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded text-white focus:ring-2 focus:ring-indigo-500" placeholder="Nom du produit">
                                    </div>
                                    <div>
                                        <label class="text-sm text-gray-300">Prix</label>
                                        <input name="price" type="number" step="1" required class="mt-1 w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded text-white focus:ring-2 focus:ring-indigo-500" placeholder="Prix">
                                    </div>
                                    <div>
                                        <label class="text-sm text-gray-300">Quantité</label>
                                        <input name="quantity" type="number" required class="mt-1 w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded text-white focus:ring-2 focus:ring-indigo-500" placeholder="Quantité">
                                    </div>
                                    <div>
                                        <label class="text-sm text-gray-300">Image</label>
                                        <input name="photo_path" type="file" accept="image/*" class="mt-1 w-full text-sm text-gray-300 file:bg-indigo-600 file:text-white file:py-2 file:px-3 file:rounded file:border-0" />
                                    </div>
                                </div>

                                <div class="flex items-center gap-6 mt-2">
                                    <div class="flex items-center">
                                        <input id="premium" type="radio" value="1" name="isPremium" value="1" class="h-4 w-4 text-yellow-400 focus:ring-yellow-400" />
                                        <label for="premium" class="ml-2 text-sm text-gray-300">Premium</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="standard" type="radio" value="0" name="isPremium" value="0" checked class="h-4 w-4 text-blue-400 focus:ring-blue-400" />
                                        <label for="standard" class="ml-2 text-sm text-gray-300">Standard</label>
                                    </div>
                                </div>

                                <div class="flex items-center justify-end gap-3 mt-4">
                                    <button type="button" id="modal-cancel" class="px-4 py-2 bg-gray-700 text-gray-300 rounded hover:bg-gray-600">Annuler</button>
                                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Enregistrer</button>
                                </div>
                            </form>
                        </div>
                    </div>
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

                        @forelse ($products as $product)

                            <tr class="hover:bg-gray-700/50">
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <img src="{{ asset('storage/' . $product->photo_path) }}" alt="Produit"
                                            class="w-10 h-10 rounded-lg object-cover">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-white">{{ $product->name }}</div>
                                            <div class="text-sm text-gray-400">SKU: STY-001</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4"><span
                                        class="px-2 py-1 text-xs font-medium bg-blue-500/20 text-blue-400 rounded">Bureautique</span>
                                </td>
                                <td class="px-6 py-4"><span class="text-sm font-semibold text-white">{{ $product->price }}
                                        <i class="fas fa-coins text-yellow-500 text-xs"></i></span></td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">

                                        <span class="text-sm text-white">{{ $product->quantity }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4"><span
                                        class="px-2 py-1 text-xs font-medium 
                                        @php
                                            if ($product->isPremium) {
                                                echo "bg-yellow-200 text-white-300";
                                            } else {
                                                echo "bg-gray-700 text-blue-300";
                                            }
                                        @endphp
                                        
                                        
                                          rounded">
                                        @php
                                            if ($product->isPremium) {
                                                echo "Premium";
                                            } else {
                                                echo "Standard";
                                            }
                                        @endphp
                                    </span></td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                       <form action="{{ route('productedit', $product->id) }}", method="GET">
                                           @csrf
                                        
                                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                                                Upadate
                                        </button>
                                       </form>


                                        <button class="text-green-400 hover:text-green-300"><i
                                                class="fas fa-box"></i></button>

                                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">
                                                Delete 
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                        @empty
                            <h3> 0 products </h3>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const openBtn = document.getElementById('btn-new-product');
            const modal = document.getElementById('product-modal');
            const closeBtn = document.getElementById('modal-close');
            const cancelBtn = document.getElementById('modal-cancel');
            const backdrop = document.getElementById('modal-backdrop');

            function openModal() {
                if (!modal) return;
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.classList.add('overflow-hidden');
            }

            function closeModal() {
                if (!modal) return;
                modal.classList.remove('flex');
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
                const form = document.getElementById('product-form');
                if (form) form.reset();
            }

            openBtn?.addEventListener('click', openModal);
            closeBtn?.addEventListener('click', closeModal);
            cancelBtn?.addEventListener('click', closeModal);
            backdrop?.addEventListener('click', closeModal);

            // ESC to close
            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape') closeModal();
            });
        });
    </script>
    </body>

</html>