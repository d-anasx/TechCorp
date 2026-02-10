<div class="max-w-md w-full animate-pulse">
    <div class="bg-gray-800 rounded-2xl shadow-2xl p-8 text-center border border-red-900/50">
        <div class="mb-6 flex justify-center">
            <div class="bg-red-500/10 rounded-full p-4 inline-block">
                <i class="fas fa-user-slash text-5xl text-red-500"></i>
            </div>
        </div>

        <h1 class="text-3xl font-bold text-white mb-3 tracking-tight">Compte Suspendu</h1>
        <p class="text-gray-400 mb-6 leading-relaxed">
            Votre accès à la plateforme TechCorp a été révoqué par un administrateur. 
            Cela peut être dû à une violation des conditions d'utilisation ou à une clôture de compte.
        </p>

        <div class="bg-red-500/10 border border-red-500/20 rounded-lg p-4 mb-6">
            <span class="text-red-400 font-semibold uppercase text-xs tracking-widest">Action requise</span>
            <p class="text-gray-300 text-sm mt-1">Veuillez contacter le support {{auth()->user()->departement->title}} pour plus de détails.</p>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-6 rounded-xl transition">
                Se déconnecter
            </button>
        </form>
    </div>
</div>