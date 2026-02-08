<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechCorp – Validation</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-900 text-white">

    <!-- Optional Navbar -->
    {{-- @include('partials.navbar') --}}

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <!-- Page Header -->
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-3xl font-bold">Demandes à valider</h1>

            <span class="bg-amber-500/20 text-amber-400 px-4 py-2 rounded-lg text-sm font-semibold">
                <i class="fas fa-clock mr-2"></i>3 en attente
            </span>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-gray-800 border border-gray-700 rounded-xl p-6">
                <p class="text-gray-400 text-sm">En attente</p>
                <p class="text-3xl font-bold mt-2">3</p>
            </div>

            <div class="bg-gray-800 border border-gray-700 rounded-xl p-6">
                <p class="text-gray-400 text-sm">Tokens demandés</p>
                <p class="text-3xl font-bold mt-2">1 240</p>
            </div>

            <div class="bg-gray-800 border border-gray-700 rounded-xl p-6">
                <p class="text-gray-400 text-sm">Commandes Premium</p>
                <p class="text-3xl font-bold text-amber-400 mt-2">2</p>
            </div>
        </div>

        <!-- Orders List -->
        <div class="space-y-6">

            <!-- Premium Order -->
            <div class="space-y-6">

                @foreach($orderProduct as $op)
                <div class="bg-gray-800 border border-amber-500 rounded-xl p-6 shadow-lg">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <h3 class="text-xl font-semibold">
                                Commande
                                <span class="ml-2 text-xs bg-amber-500 px-2 py-1 rounded">
                                    Premium
                                </span>
                            </h3>

                            <p class="text-gray-400 text-sm mt-1">
                                <i class="fas fa-user mr-1"></i>
                                {{$op->order->user->name}}
                                · {{$op->order->user->department->title ?? 'No Department'}}
                            </p>
                        </div>

                        <span class="text-sm text-gray-400">
                            <i class="fas fa-calendar-alt mr-1"></i>
                            {{$op->created_at->format('d/m/Y')}}
                        </span>
                    </div>
                    <div class="bg-gray-900 rounded-lg p-4 mb-4">
                        <ul class="space-y-2 text-sm text-gray-300">

                            <li class="flex justify-between">
                                <span>{{$op->product->name}}</span>
                                <span class="text-amber-400 font-semibold">
                                    {{$op->product->price}} MAD
                                </span>
                            </li>

                        </ul>
                    </div>
                </div>
                @endforeach

            </div>


        </div>
    </div>

</body>

</html>