<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechCorp - Mes Commandes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-5px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn { animation: fadeIn 0.3s ease-out forwards; }
        
        body { background-color: #111827; } /* gray-900 */
    </style>
</head>
<body class="text-white min-h-screen">

    @include('partials.navbar')

    <div class="max-w-6xl mx-auto px-4 pb-12">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
            <div>
                <h1 class="text-4xl font-black tracking-tight">Mes Commandes</h1>
                <p class="text-gray-400 mt-1">Consultez l'état de vos achats et demandes premium.</p>
            </div>
            <div class="bg-gray-800 border border-gray-700 rounded-2xl px-6 py-3 flex items-center gap-4 shadow-lg">
                <div class="w-10 h-10 bg-indigo-500/10 rounded-full flex items-center justify-center">
                    <i class="fas fa-wallet text-indigo-400"></i>
                </div>
                <div>
                    <p class="text-[10px] text-gray-500 uppercase font-bold tracking-widest leading-none mb-1">Solde Actuel</p>
                    <p class="text-xl font-black text-white leading-none">{{ number_format($employee->tokens) }} <span class="text-xs text-yellow-500">Tokens</span></p>
                </div>
            </div>
        </div>

        @if($orders->isEmpty())
            <div class="bg-gray-800/50 border-2 border-dashed border-gray-700 rounded-3xl p-16 text-center">
                <div class="w-20 h-20 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-6 shadow-inner">
                    <i class="fas fa-box-open text-3xl text-gray-600"></i>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Aucune commande</h3>
                <p class="text-gray-400 max-w-xs mx-auto mb-8">Vous n'avez pas encore passé de commande dans la boutique.</p>
                <a href="{{ route('store.index') }}" class="bg-indigo-600 hover:bg-indigo-500 text-white font-black px-8 py-3 rounded-xl transition-all shadow-lg shadow-indigo-600/20">
                    Commencer mes achats
                </a>
            </div>
        @else
            <div class="space-y-4">
                @foreach($orders as $order)
                    <div class="bg-gray-800 border border-gray-700 rounded-2xl overflow-hidden transition-all hover:border-gray-600 shadow-sm">
                        
                        <div class="p-5 flex flex-wrap items-center justify-between gap-4 cursor-pointer select-none" onclick="toggleOrder({{ $order->id }})">
                            <div class="flex items-center gap-4 md:gap-10">
                                <div>
                                    <p class="text-[10px] text-gray-500 uppercase font-black tracking-widest mb-1">Référence</p>
                                    <p class="font-mono text-indigo-400 font-bold">#ORD-{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}</p>
                                </div>
                                <div>
                                    <p class="text-[10px] text-gray-500 uppercase font-black tracking-widest mb-1">Date</p>
                                    <p class="text-sm font-semibold text-gray-200">{{ $order->created_at->format('d/m/Y H:i') }}</p>
                                </div>
                                <div>
                                    <p class="text-[10px] text-gray-500 uppercase font-black tracking-widest mb-1">Total</p>
                                    <p class="text-sm font-black text-white">{{ $order->products->sum(fn($product) => $product->price * $product->pivot->quantity) }} <span class="text-yellow-500 text-[10px]">TK</span></p>
                                </div>
                            </div>

                            <div class="flex items-center gap-4 ml-auto">
                                @if($order->status == 'approved')
                                    <span class="px-3 py-1 bg-green-500/10 border border-green-500/30 text-green-500 rounded-lg text-[10px] font-black uppercase tracking-wider">
                                        <i class="fas fa-check mr-1"></i> Validée
                                    </span>
                                @elseif($order->status == 'waiting')
                                    <span class="px-3 py-1 bg-amber-500/10 border border-amber-500/30 text-amber-500 rounded-lg text-[10px] font-black uppercase tracking-wider animate-pulse">
                                        <i class="fas fa-clock mr-1"></i> En attente
                                    </span>
                                @else
                                    <span class="px-3 py-1 bg-red-500/10 border border-red-500/30 text-red-500 rounded-lg text-[10px] font-black uppercase tracking-wider">
                                        <i class="fas fa-ban mr-1"></i> Refusée
                                    </span>
                                @endif
                                <i id="icon-{{ $order->id }}" class="fas fa-chevron-down text-gray-600 transition-transform duration-300"></i>
                            </div>
                        </div>

                        <div id="details-{{ $order->id }}" class="hidden border-t border-gray-700/50 bg-gray-900/40 p-6 animate-fadeIn">
                            <div class="overflow-x-auto">
                                <table class="w-full text-left">
                                    <thead>
                                        <tr class="text-[10px] text-gray-500 uppercase font-black border-b border-gray-800">
                                            <th class="pb-3 px-2">Produit</th>
                                            <th class="pb-3 px-2 text-center">Qté</th>
                                            <th class="pb-3 px-2 text-right">Sous-total</th>
                                            <th class="pb-3 px-2 text-right">Statut Produit</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-800/50">
                                        @foreach($order->products as $product)
                                            <tr class="hover:bg-gray-800/20 transition-colors">
                                                <td class="py-4 px-2 flex items-center gap-3">
                                                    <div class="relative w-10 h-10 flex-shrink-0">
                                                        <img src="{{ $product->photo_path ? asset('storage/'.$product->photo_path) : 'https://ui-avatars.com/api/?name='.urlencode($product->name).'&background=4f46e5&color=fff' }}" 
                                                             class="w-full h-full object-cover rounded shadow-sm border border-gray-700">
                                                        @if($product->is_premium)
                                                            <div class="absolute -top-1 -right-1 bg-amber-500 text-white rounded px-1 text-[7px] shadow-sm">
                                                                <i class="fas fa-crown"></i>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div>
                                                        <p class="font-bold text-sm text-gray-100">{{ $product->name }}</p>
                                                        <p class="text-[10px] text-gray-500">{{ $product->price }} tokens / u</p>
                                                    </div>
                                                </td>
                                                <td class="py-4 px-2 text-center text-sm font-medium text-gray-400">x{{ $product->pivot->quantity }}</td>
                                                <td class="py-4 px-2 text-right font-bold text-white">{{ number_format($product->price * $product->pivot->quantity) }}</td>
                                                <td class="py-4 px-2 text-right">
                                                    @php
                                                        $pStatus = $product->pivot->status;
                                                        $color = $pStatus == 'validated' ? 'text-green-500' : ($pStatus == 'refused' ? 'text-red-500' : 'text-amber-500');
                                                    @endphp
                                                    <span class="text-[9px] font-black uppercase px-2 py-0.5 rounded border border-current/20 bg-gray-900 {{ $color }}">
                                                        {{ $pStatus }}
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <script>
        /**
         * Gère l'affichage des détails d'une commande
         * @param {number} id - L'ID de la commande
         */
        function toggleOrder(id) {
            const detailSection = document.getElementById(`details-${id}`);
            const arrowIcon = document.getElementById(`icon-${id}`);
            
            // Ferme les autres détails ouverts pour un effet propre (optionnel)
            // document.querySelectorAll('[id^="details-"]').forEach(el => {
            //     if(el.id !== `details-${id}`) el.classList.add('hidden');
            // });

            if (detailSection.classList.contains('hidden')) {
                detailSection.classList.remove('hidden');
                arrowIcon.classList.add('rotate-180');
            } else {
                detailSection.classList.add('hidden');
                arrowIcon.classList.remove('rotate-180');
            }
        }
    </script>
</body>
</html>