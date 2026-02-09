<nav class="bg-gray-800 shadow-lg border-b border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <div class="w-10 h-10 bg-indigo-600 rounded-lg flex items-center justify-center">
                        <i class="fas fa-shopping-bag text-white"></i>
                    </div>
                    <span class="ml-3 text-xl font-bold text-white uppercase tracking-tighter">TechCorp</span>
                </div>

                <div class="hidden md:block ml-10">
                    <div class="flex space-x-4">
                        <a href="{{ route('dashboard') }}" class="{{ Request::is('store*') ? 'text-indigo-400 border-b-2 border-indigo-500' : 'text-gray-400 hover:text-white' }} px-3 py-2 text-sm font-medium">Dashboard</a>
                        {{-- Menu ADMIN --}}
                        @if(auth()->user()->role->status === 'admin')
                            <a href="{{ route('adminproducts') }}" class="{{ Request::is('admin/dashboard*') ? 'text-indigo-400 border-b-2 border-indigo-500' : 'text-gray-400 hover:text-white' }} px-3 py-2 text-sm font-medium">products</a>
                            <a href="{{ route('users.index') }}" class="{{ Request::is('users*') ? 'text-indigo-400 border-b-2 border-indigo-500' : 'text-gray-400 hover:text-white' }} px-3 py-2 text-sm font-medium">Users</a>

                        {{-- Menu MANAGER --}}
                        @elseif(auth()->user()->role->status === 'manager')
                            <a href="{{ route('product.validate') }}" class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">Validation</a>
                            <a href="{{ route('manager.store.index') }}" class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">Boutique</a>
                            <a href="{{ route('manager.orders') }}" class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">Mes Commandes</a>
                            <a href="{{ route('manager.history') }}" class="text-gray-400 hover:text-white px-3 py-2 text-sm font-medium">Historique</a>

                        {{-- Menu EMPLOYEE --}}
                        @else
                            <a href="{{ route('store.index') }}" class="{{ Request::is('store*') ? 'text-indigo-400 border-b-2 border-indigo-500' : 'text-gray-400 hover:text-white' }} px-3 py-2 text-sm font-medium">Boutique</a>
                            <a href="{{ route('employee.orders') }}" class="{{ Request::is('orders*') ? 'text-indigo-400 border-b-2 border-indigo-500' : 'text-gray-400 hover:text-white' }} px-3 py-2 text-sm font-medium">Mes Commandes</a>
                            <a href="{{ route('employee.history') }}" class="{{ Request::is('history*') ? 'text-indigo-400 border-b-2 border-indigo-500' : 'text-gray-400 hover:text-white' }} px-3 py-2 text-sm font-medium">Historique</a>
                        @endif
                    </div>
                </div>
            </div>

            <div class="flex items-center space-x-6">

                {{-- Panier : Uniquement pour Employee et Manager --}}
                @if(auth()->user()->role !== 'admin')
                    <button class="relative p-2 text-gray-400 hover:text-white transition">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span id="cart-count" class="absolute top-0 right-0 inline-flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-red-500 rounded-full border-2 border-gray-800">
                            0
                        </span>
                    </button>
                @endif

                <div class="flex items-center space-x-3 border-l border-gray-700 pl-6">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-bold text-white leading-none mb-1">{{ auth()->user()->name }}</p>
                        <p class="text-[10px] text-indigo-400 font-black uppercase tracking-widest italic">
                            {{ auth()->user()->role->status }}
                        </p>
                    </div>
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=6366f1&color=fff"
                         alt="Avatar" class="w-10 h-10 rounded-full ring-2 ring-indigo-500/20">
                </div>

                <form method="POST" action="{{ route('logout') }}" class="m-0">
                    @csrf
                    <button type="submit" class="flex items-center gap-2 px-3 py-2 bg-red-500/10 hover:bg-red-500 text-red-500 hover:text-white rounded-lg transition text-xs font-bold uppercase tracking-tighter">
                        <i class="fas fa-power-off"></i>
                        <span class="hidden lg:inline">Quitter</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
