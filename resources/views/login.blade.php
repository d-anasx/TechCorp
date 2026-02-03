<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechCorp - Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- Logo et titre -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-indigo-600 rounded-full mb-4 shadow-lg shadow-indigo-500/50">
                <i class="fas fa-shopping-bag text-white text-3xl"></i>
            </div>
            <h1 class="text-3xl font-bold text-white">TechCorp Store</h1>
            <p class="text-gray-400 mt-2">Boutique Interne de Fournitures</p>
        </div>

        <!-- Formulaire de connexion -->
        <div class="bg-gray-800 rounded-2xl shadow-2xl p-8 border border-gray-700">
            <h2 class="text-2xl font-semibold text-white mb-6">Connexion</h2>
            
            <form action="#" method="POST">
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2">
                        Adresse email
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-500"></i>
                        </div>
                        <input type="email" id="email" name="email" 
                               class="block w-full pl-10 pr-3 py-3 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition placeholder-gray-400"
                               placeholder="votre.email@techcorp.com" required>
                    </div>
                </div>

                <!-- Mot de passe -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-2">
                        Mot de passe
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-500"></i>
                        </div>
                        <input type="password" id="password" name="password" 
                               class="block w-full pl-10 pr-3 py-3 bg-gray-700 border border-gray-600 text-white rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition placeholder-gray-400"
                               placeholder="••••••••" required>
                    </div>
                </div>

                <!-- Se souvenir de moi / Mot de passe oublié -->
                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded border-gray-600 bg-gray-700 text-indigo-600 focus:ring-indigo-500">
                        <span class="ml-2 text-sm text-gray-300">Se souvenir de moi</span>
                    </label>
                    <a href="#" class="text-sm text-indigo-400 hover:text-indigo-300">Mot de passe oublié?</a>
                </div>

                <!-- Bouton de connexion -->
                <button type="submit" 
                        class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition duration-200 shadow-lg hover:shadow-indigo-500/50">
                    Se connecter
                </button>
            </form>

            <!-- Démonstration des rôles -->
            <div class="mt-8 pt-6 border-t border-gray-700">
                <p class="text-sm text-gray-400 text-center mb-4">Comptes de démonstration :</p>
                <div class="space-y-2">
                    <div class="flex items-center justify-between text-xs bg-gray-700/50 p-3 rounded-lg border border-gray-600">
                        <span class="font-medium text-gray-300">Employé</span>
                        <span class="text-gray-400">employe@techcorp.com</span>
                    </div>
                    <div class="flex items-center justify-between text-xs bg-gray-700/50 p-3 rounded-lg border border-gray-600">
                        <span class="font-medium text-gray-300">Manager</span>
                        <span class="text-gray-400">manager@techcorp.com</span>
                    </div>
                    <div class="flex items-center justify-between text-xs bg-gray-700/50 p-3 rounded-lg border border-gray-600">
                        <span class="font-medium text-gray-300">Admin</span>
                        <span class="text-gray-400">admin@techcorp.com</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <p class="text-center text-gray-500 text-sm mt-6">
            © 2026 TechCorp. Tous droits réservés.
        </p>
    </div>
</body>
</html>
