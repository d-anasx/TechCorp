<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechCorp - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

{{-- We add flex-col and min-h-screen to the body to help centering --}}

<body class="bg-gray-900 text-white min-h-screen flex flex-col">

    @include('partials.navbar')

    {{-- If not approved, center the message --}}
    @if (auth()->user()->statu !== 'accept')
        <div class="flex-1 flex items-center justify-center px-4">
            @if (auth()->user()->statu === 'waiting' && auth()->user()->role->status !== 'admin')
                @include('partials.waiting')
            @elseif (auth()->user()->statu === 'refuse' && auth()->user()->role->status !== 'admin')
                @include('partials.banned')
            @endif
        </div>
    @else
        {{-- Main Dashboard for approved users --}}
        <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 w-full">
            @if (session('error'))
                <div id="alert-error"
                    class="mb-6 flex items-center p-4 text-red-800 rounded-2xl bg-red-500/10 border border-red-500/20">
                    <i class="fas fa-exclamation-circle text-red-500 mr-3 text-xl"></i>
                    <div class="text-sm font-bold uppercase tracking-tight">
                        {{ session('error') }}
                    </div>
                    <button type="button" onclick="document.getElementById('alert-error').remove()"
                        class="ml-auto text-red-500 hover:text-red-700">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            @endif

            @if (session('success'))
                <div id="alert-success"
                    class="mb-6 flex items-center p-4 text-green-800 rounded-2xl bg-green-500/10 border border-green-500/20">
                    <i class="fas fa-check-circle text-green-500 mr-3 text-xl"></i>
                    <div class="text-sm font-bold uppercase tracking-tight">
                        {{ session('success') }}
                    </div>
                    <button type="button" onclick="document.getElementById('alert-success').remove()"
                        class="ml-auto text-green-500 hover:text-green-700">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            @endif
            <div class="mb-8">
                <h1 class="text-3xl font-black italic uppercase tracking-tighter">Tableau de bord</h1>
                <p class="text-gray-400">Bienvenue dans votre espace personnel TechCorp.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                {{-- Stats Widgets --}}
                <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700">
                    @if (auth()->user()->role->status === 'employee')
                        <p class="text-gray-500 text-xs font-bold uppercase mb-2">Tokens Disponibles</p>
                        <p class="text-4xl font-black text-white">{{ auth()->user()->tokens }} <span
                                class="text-sm text-yellow-500 italic">TK</span></p>
                    @elseif(auth()->user()->role->status === 'manager')
                        <p class="text-gray-500 text-xs font-bold uppercase mb-2">Demandes en attente</p>
                        <p class="text-4xl font-black text-amber-500">14</p>
                    @else
                        <p class="text-gray-500 text-xs font-bold uppercase mb-2">Total Utilisateurs</p>
                        <p class="text-4xl font-black text-white">128</p>
                    @endif
                </div>

                <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700">
                    <p class="text-gray-500 text-xs font-bold uppercase mb-2">Dernière activité</p>
                    <p class="text-lg font-bold">Achat de matériel</p>
                    <p class="text-xs text-gray-500">Il y a 45 minutes</p>
                </div>

                <div class="bg-gray-800 p-6 rounded-2xl border border-gray-700">
                    <p class="text-gray-500 text-xs font-bold uppercase mb-2">Statut du compte</p>
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 bg-green-500 rounded-full"></span>
                        <span class="font-bold text-green-500 uppercase text-xs">Actif & Vérifié</span>
                    </div>
                </div>
            </div>

            {{-- Role Specific Content --}}
            <div class="bg-gray-800 border border-gray-700 rounded-3xl p-8 shadow-2xl">
                @if (auth()->user()->role->status === 'employee')
                    <h2 class="text-xl font-bold mb-6">Récemment commandé</h2>
                    <div class="flex items-center justify-between p-4 bg-gray-900 rounded-xl">
                        <span class="text-sm font-medium">Clavier Mécanique</span>
                        <span
                            class="px-3 py-1 bg-amber-500/10 text-amber-500 rounded-lg text-[10px] font-black uppercase">En
                            attente</span>
                    </div>
                @elseif (auth()->user()->role->status === 'manager')
                    <h2 class="text-xl font-bold mb-6 italic">Flux d'approbation</h2>
                    <div class="p-12 text-center text-gray-500 italic">
                        <i class="fas fa-clipboard-check text-4xl mb-4 block"></i>
                        Aucune nouvelle demande à traiter.
                    </div>
                @else
                    <h2 class="text-xl font-bold mb-6 italic">Panneau de configuration</h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <button
                            class="p-4 bg-gray-900 rounded-2xl hover:bg-gray-700 transition border border-gray-700 font-bold">LOGS</button>
                        <button
                            class="p-4 bg-gray-900 rounded-2xl hover:bg-gray-700 transition border border-gray-700 font-bold">BACKUPS</button>
                        <button
                            class="p-4 bg-gray-900 rounded-2xl hover:bg-gray-700 transition border border-gray-700 font-bold">MAINTENANCE</button>
                        <button
                            class="p-4 bg-gray-900 rounded-2xl hover:bg-gray-700 transition border border-gray-700 font-bold">API</button>
                    </div>
                @endif
            </div>
        </main>
    @endif

</body>

</html>
