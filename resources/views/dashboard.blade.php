<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechCorp - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-900 text-white min-h-screen">

    @include('partials.navbar')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">

        <div class="mb-8">
            <h1 class="text-3xl font-black italic uppercase tracking-tighter">Tableau de bord</h1>
            <p class="text-gray-400">Bienvenue dans votre espace personnel TechCorp.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">

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
                    <span class="font-bold text-green-500">Actif & Vérifié</span>
                </div>
            </div>
        </div>

        <div class="bg-gray-800 border border-gray-700 rounded-3xl p-8 shadow-2xl">
            @if (auth()->user()->role->status === 'employee')
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-bold">Récemment commandé</h2>
                    <a href="#" class="text-indigo-400 text-sm hover:underline">Voir tout</a>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-gray-900 rounded-xl">
                        <span class="text-sm font-medium">Clavier Mécanique</span>
                        <span
                            class="px-3 py-1 bg-amber-500/10 text-amber-500 rounded-lg text-[10px] font-black uppercase">En
                            attente</span>
                    </div>
                </div>
            @endif

            @if (auth()->user()->role->status === 'manager')
                <h2 class="text-xl font-bold mb-6 italic">Flux d'approbation</h2>
                <div class="p-12 text-center text-gray-500 italic">
                    <i class="fas fa-clipboard-check text-4xl mb-4 block"></i>
                    Aucune nouvelle demande à traiter pour le moment.
                </div>
            @endif

            @if (auth()->user()->role->status === 'admin')
                <h2 class="text-xl font-bold mb-6 italic">Panneau de configuration</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <button
                        class="p-4 bg-gray-900 rounded-2xl hover:bg-gray-700 transition border border-gray-700">Logs</button>
                    <button
                        class="p-4 bg-gray-900 rounded-2xl hover:bg-gray-700 transition border border-gray-700">Backups</button>
                    <button
                        class="p-4 bg-gray-900 rounded-2xl hover:bg-gray-700 transition border border-gray-700">Maintenance</button>
                    <button
                        class="p-4 bg-gray-900 rounded-2xl hover:bg-gray-700 transition border border-gray-700">API</button>
                </div>
            @endif
        </div>
    </main>

</body>

</html>
