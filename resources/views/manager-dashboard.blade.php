<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechCorp - Gestion des Approbations</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-[#0f172a] text-gray-100 font-sans"> <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-4xl font-black mb-6 text-white uppercase tracking-tight">Gestion des Approbations</h1>

        {{-- Flash messages --}}
        @if(session('success'))
        <div class="mb-6 p-4 bg-emerald-500/20 border border-emerald-500 text-emerald-400 rounded-xl shadow-lg">
            {{ session('success') }}
        </div>
        @endif
        @if(session('error'))
        <div class="mb-6 p-4 bg-orange-500/20 border border-orange-500 text-orange-400 rounded-xl shadow-lg">
            {{ session('error') }}
        </div>
        @endif

        {{-- Orders List --}}
        @forelse($orders as $order)
        <div class="bg-[#1e293b] rounded-2xl p-8 mb-8 border border-gray-700/50 shadow-2xl">

            {{-- Header: Order & User --}}
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-4">
                    <img src="https://ui-avatars.com/api/?name={{ $order->user->name ?? 'User' }}&background=6366f1&color=fff"
                        alt="{{ $order->user->name }}"
                        class="w-14 h-14 rounded-full border-2 border-indigo-500 shadow-md">
                    <div>
                        <h3 class="font-bold text-xl text-white">{{ $order->user->name ?? 'Utilisateur inconnu' }}</h3>
                        <p class="text-sm text-gray-400">
                            Département: <span class="text-indigo-400">{{ $order->user->departement->title }}</span>
                        </p>
                    </div>
                </div>
                <span class="px-4 py-1.5 text-xs rounded-full bg-orange-500/10 text-orange-500 border border-orange-500/30 font-black uppercase tracking-widest">
                    {{ ucfirst($order->status) }}
                </span>
            </div>

            {{-- Products List --}}
            <div class="space-y-3 mb-8">
                @foreach($order->products as $product)
                <div class="flex items-center gap-4 bg-[#0f172a]/40 p-4 rounded-xl border border-gray-700/50 hover:border-indigo-500/50 transition">
                    <div class="w-16 h-16 bg-indigo-600 rounded-lg flex items-center justify-center text-white font-bold text-xl shadow-inner uppercase">
                        {{ substr($product->name, 0, 2) }}
                    </div>
                    
                    <div class="flex-1">
                        <div class="flex justify-between items-start">
                            <div>
                                <h4 class="font-bold text-white text-lg">{{ $product->name }}</h4>
                                <p class="text-xs text-gray-500 uppercase">{{ $product->price }} Tokens / unité</p>
                            </div>
                            <div class="text-right">
                                <p class="text-xl font-black text-white">{{ $product->pivot->quantity * $product->price }}</p>
                            </div>
                        </div>
                        <p class="text-sm mt-1 text-gray-400 italic">{{ $product->description ?? '' }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Total Price --}}
            <div class="border-t border-gray-700/50 pt-6 flex flex-col items-end gap-1 mb-8">
                <p class="text-gray-500 text-xs font-bold uppercase tracking-widest text-right">Total de la commande</p>
                <div class="flex items-center gap-2">
                    <span class="text-4xl font-black text-orange-500">{{ $order->total_price }}</span>
                    <span class="text-gray-400 font-bold">Tokens</span>
                </div>
            </div>

            {{-- Action Buttons --}}
            <div class="flex gap-4">
                <form action="{{ route('manager.orders.approve', $order->id) }}" method="POST" class="flex-[2]">
                    @csrf
                    <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-500 text-white py-4 rounded-xl font-black uppercase tracking-widest transition shadow-lg shadow-indigo-500/20 active:scale-[0.98]">
                        <i class="fas fa-check-circle mr-2"></i> Approuver
                    </button>
                </form>

                <form action="{{ route('manager.orders.reject', $order->id) }}" method="POST" class="flex-1">
                    @csrf
                    <button type="submit" class="w-full bg-gray-700/50 hover:bg-red-600 text-gray-300 hover:text-white py-4 rounded-xl font-bold uppercase tracking-widest transition border border-gray-600 hover:border-red-500">
                        <i class="fas fa-times-circle mr-2"></i> Refuser
                    </button>
                </form>
            </div>

        </div>
        @empty
        <div class="text-center py-20 bg-[#1e293b] rounded-2xl border border-dashed border-gray-700">
            <i class="fas fa-inbox text-5xl text-gray-600 mb-4"></i>
            <p class="text-gray-500 text-xl font-medium">Aucune commande en attente pour le moment.</p>
        </div>
        @endforelse
    </div>

</body>
</html>