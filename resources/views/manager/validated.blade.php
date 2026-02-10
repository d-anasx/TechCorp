<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Manager Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#0f172a] text-white">
 {{-- @include('partials.navbar') --}}
<div class="p-10">

    <h1 class="text-4xl font-bold italic mb-2">TABLEAU DE BORD</h1>
    <p class="text-gray-400 mb-10">Bienvenue dans votre espace personnel TechCorp.</p>

    <!-- Cards -->
    <div class="grid grid-cols-3 gap-8 mb-10">

        <!-- Pending Orders -->
        <div class="bg-[#111827] p-6 rounded-xl border border-gray-700">
            <p class="text-gray-400">DEMANDES EN ATTENTE</p>
            <h2 class="text-5xl font-bold text-orange-400">
                {{ $pendingOrders }}
            </h2>
        </div>

        <!-- Last Activity -->
        <div class="bg-[#111827] p-6 rounded-xl border border-gray-700">
            <p class="text-gray-400">DERNIÈRE ACTIVITÉ</p>
            <h2 class="text-lg font-semibold">Achat de matériel</h2>
            <p class="text-gray-500 text-sm">Il y a 45 minutes</p>
        </div>

        <!-- Status -->
        <div class="bg-[#111827] p-6 rounded-xl border border-gray-700">
            <p class="text-gray-400">STATUT DU COMPTE</p>
            <h2 class="text-green-400 font-bold flex items-center gap-2">
                <span class="w-3 h-3 bg-green-400 rounded-full"></span>
                Actif & Vérifié
            </h2>
        </div>

    </div>

    <!-- Approval Flow -->
    <div class="bg-[#111827] p-10 rounded-xl border border-gray-700 text-center">
        <h3 class="text-2xl font-semibold mb-3">Flux d'approbation</h3>
        <p class="text-gray-500">Aucune nouvelle demande à traiter pour le moment.</p>
    </div>

</div>

</body>
</html>
