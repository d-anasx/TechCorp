<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechCorp - Récapitulatif Commande</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-900 text-white min-h-screen">

    <nav class="bg-gray-800 border-b border-gray-700 p-4 mb-8">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-indigo-600 rounded flex items-center justify-center">
                    <i class="fas fa-shopping-cart text-xs"></i>
                </div>
                <span class="font-bold text-xl">TechCorp Store</span>
            </div>
            <a href="/store" class="text-gray-400 hover:text-white transition">
                <i class="fas fa-arrow-left mr-2"></i>Retour à la boutique
            </a>
        </div>
    </nav>

    <div class="max-w-3xl mx-auto px-4 pb-12">
        <h1 class="text-3xl font-extrabold mb-8 flex justify-between items-end">
            Votre Panier
            <span class="text-sm font-medium text-gray-400">Solde actuel: <span
                    class="text-indigo-400">{{ auth()->user()->tokens }} Tokens</span></span>
        </h1>

        <div class="bg-gray-800 rounded-2xl border border-gray-700 shadow-xl overflow-hidden">
            <div id="cart-items-container" class="divide-y divide-gray-700"></div>

            <div class="p-6 bg-gray-800/50">

                <div id="limit-alert"
                    class="hidden mb-4 p-4 rounded-xl flex items-center gap-3 font-bold text-sm border">
                </div>

                <div class="flex justify-between items-end mb-6">
                    <div>
                        <p class="text-gray-400 text-sm mb-1 uppercase tracking-wider">Total de la commande</p>
                        <div class="flex items-center gap-2">
                            <i class="fas fa-coins text-yellow-500 text-2xl"></i>
                            <span id="total-price" class="text-4xl font-black text-white">0</span>
                            <span class="text-gray-400 font-medium">Tokens</span>
                        </div>
                    </div>
                    <div id="status-badge-container"></div>
                </div>

                <div id="action-container"></div>

                <button onclick="clearCart()"
                    class="w-full mt-4 text-gray-500 hover:text-red-400 text-sm transition font-medium">
                    <i class="fas fa-trash-alt mr-2"></i>Vider le panier
                </button>
            </div>
        </div>
    </div>

    <script>
        const TOKEN_LIMIT = 2000;
        const USER_TOKENS = {{ auth()->user()->tokens }};

        function getCart() {
            return JSON.parse(localStorage.getItem('cart')) || {};
        }

        function updateQuantity(id, delta) {
            const cart = getCart();
            if (!cart[id]) return;

            cart[id].quantity += delta;
            if (cart[id].quantity <= 0) delete cart[id];

            localStorage.setItem('cart', JSON.stringify(cart));
            renderCartPage();
        }

        function renderCartPage() {
            const cart = getCart();
            // Le panier est en attente si la propriété waiting est à true
            const isWaiting = cart.waiting === true;

            // On filtre pour ne garder que les objets produits (on ignore la clé "waiting")
            const items = Object.values(cart).filter(i => typeof i === 'object' && i !== null);

            const container = document.getElementById('cart-items-container');
            const actionContainer = document.getElementById('action-container');
            const badgeContainer = document.getElementById('status-badge-container');
            const totalPriceEl = document.getElementById('total-price');
            const limitAlert = document.getElementById('limit-alert');

            if (items.length === 0) {
                container.innerHTML = `<div class="p-12 text-center text-gray-500 italic">Le panier est vide...</div>`;
                totalPriceEl.innerText = "0";
                actionContainer.innerHTML = '';
                limitAlert.classList.add('hidden');
                return;
            }

            let total = 0;
            let hasPremium = false;
            items.forEach(item => {
                total += (item.price * item.quantity);
                if (item.isPremium) hasPremium = true;
            });

            // Conditions de blocage (on ajoute isWaiting pour bloquer aussi l'ajout via les boutons +)
            const isOverGlobalLimit = total > TOKEN_LIMIT;
            const isOverBalance = total > USER_TOKENS;
            const isDisabled = isOverGlobalLimit || isOverBalance || isWaiting;

            let html = '';
            items.forEach(item => {
                const subtotal = item.price * item.quantity;
                html += `
        <div class="p-6 flex items-center justify-between ${isWaiting ? 'opacity-50' : ''} transition-opacity">
            <div class="flex items-center gap-4">
                <div class="w-16 h-16 bg-gray-900 rounded-lg flex-shrink-0 border border-gray-700 overflow-hidden relative">
                     <img src="${item.photo_path ? '/storage/'+item.photo_path : 'https://ui-avatars.com/api/?name='+encodeURIComponent(item.name)+'&background=4f46e5&color=fff'}" class="w-full h-full object-cover">
                </div>
                <div>
                    <h3 class="font-bold text-white flex items-center gap-2">
                        ${item.name}
                        ${item.isPremium ? '<i class="fas fa-crown text-amber-500 text-xs" title="Premium"></i>' : ''}
                    </h3>
                    <p class="text-gray-400 text-sm">${item.price} Tokens / unité</p>
                </div>
            </div>

            <div class="flex items-center gap-6">
                <div class="flex items-center bg-gray-900 rounded-lg p-1 border border-gray-700">
                    <button onclick="updateQuantity(${item.id}, -1)" ${isWaiting ? 'disabled' : ''} 
                            class="w-8 h-8 flex items-center justify-center hover:bg-gray-800 rounded text-indigo-400 transition disabled:opacity-20 disabled:cursor-not-allowed">
                        <i class="fas fa-minus"></i>
                    </button>
                    <span class="w-10 text-center font-bold">${item.quantity}</span>
                    <button onclick="updateQuantity(${item.id}, 1)" 
                            ${isDisabled ? 'disabled' : ''} 
                            class="w-8 h-8 flex items-center justify-center hover:bg-gray-800 rounded text-indigo-400 transition disabled:opacity-20 disabled:cursor-not-allowed">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
                <div class="w-24 text-right font-black text-xl">${subtotal}</div>
            </div>
        </div>`;
            });

            container.innerHTML = html;
            totalPriceEl.innerText = total.toLocaleString();

            // Gestion des alertes (On cache les alertes de limite si on est déjà en attente)
            if (isWaiting) {
                limitAlert.innerHTML =
                    `<i class="fas fa-clock"></i> Commande transmise. En attente de validation par le manager.`;
                limitAlert.className =
                    "mb-4 p-4 bg-blue-500/10 border-blue-500/50 text-blue-400 rounded-xl flex items-center gap-3 font-bold text-sm border";
                limitAlert.classList.remove('hidden');
            } else if (isOverGlobalLimit) {
                limitAlert.innerHTML =
                    `<i class="fas fa-exclamation-triangle"></i> Limite dépassée (Max ${TOKEN_LIMIT} Tokens)`;
                limitAlert.className =
                    "mb-4 p-4 bg-red-500/10 border-red-500/50 text-red-400 rounded-xl flex items-center gap-3 font-bold text-sm border";
                limitAlert.classList.remove('hidden');
                totalPriceEl.classList.add('text-red-500');
            } else if (isOverBalance) {
                limitAlert.innerHTML =
                    `<i class="fas fa-wallet"></i> Solde insuffisant (Votre solde : ${USER_TOKENS} Tokens)`;
                limitAlert.className =
                    "mb-4 p-4 bg-orange-500/10 border-orange-500/50 text-orange-400 rounded-xl flex items-center gap-3 font-bold text-sm border";
                limitAlert.classList.remove('hidden');
                totalPriceEl.classList.add('text-orange-500');
            } else {
                limitAlert.classList.add('hidden');
                totalPriceEl.classList.remove('text-red-500', 'text-orange-500');
            }

            // Gestion dynamique du bouton et du badge
            const badgeHtml = hasPremium ?
                `<span class="bg-amber-500/10 text-amber-500 border border-amber-500/30 px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider">Approbation Manager</span>` :
                `<span class="bg-green-500/10 text-green-500 border border-green-500/30 px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-wider">Achat Direct</span>`;
            badgeContainer.innerHTML = badgeHtml;

            if (isWaiting) {
                actionContainer.innerHTML = `
            <button disabled class="w-full bg-gray-700 p-4 rounded-xl font-black text-gray-500 uppercase tracking-widest cursor-not-allowed flex items-center justify-center gap-3">
                <i class="fas fa-spinner fa-spin"></i> En attente de validation
            </button>`;
            } else {
                const btnClass = hasPremium ? "from-amber-500 to-orange-600" : "from-indigo-600 to-blue-700";
                const btnText = hasPremium ? "Demander la validation" : "Confirmer la commande";
                actionContainer.innerHTML = `
            <button onclick="submitOrder()" ${isDisabled ? 'disabled' : ''} 
                class="w-full bg-gradient-to-r ${btnClass} p-4 rounded-xl font-black text-white uppercase tracking-widest transition-all shadow-lg disabled:grayscale disabled:opacity-50 disabled:cursor-not-allowed active:scale-95">
                ${btnText}
            </button>`;
            }
        }

        async function submitOrder() {
            const btn = document.querySelector('#action-container button');
            btn.disabled = true;
            btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Traitement...';

            const cart = getCart();
            try {
                const response = await fetch("{{ route('store.checkout') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({
                        cart: cart
                    })
                });
                const data = await response.json();
                if (response.ok) {
                    if (!data.keep_cart) {
                        localStorage.removeItem('cart');
                        window.location.href = data.redirect;
                    }
                } else {
                    alert(data.message);
                    renderCartPage();
                }
            } catch (e) {
                alert("Erreur réseau");
                renderCartPage();
            }
        }

        function clearCart() {
            if (confirm("Vider entièrement le panier ?")) {
                localStorage.removeItem('cart');
                renderCartPage();
            }
        }

        document.addEventListener('DOMContentLoaded', renderCartPage);
    </script>
</body>

</html>
