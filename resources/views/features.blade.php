<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fonctionnalites</title>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
   
   <!-- NAVBAR -->
<nav x-data="{ open: false }" class="bg-slate-900 shadow-lg">

    <div class="flex items-center justify-between px-6 md:px-10 py-6">

        <!-- Logo -->
        <h1 class="text-2xl font-bold text-yellow-400">HotelFlow</h1>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-8">

            <ul class="flex space-x-8 text-gray-300">
                <li><a href="/" class="hover:text-yellow-400">Accueil</a></li>
              <li>  <a href="{{ route('features') }}" 
   class="hover:text-yellow-400 transition">
    Fonctionnalités </a></li>
               <li><a href="{{ route('pricing') }}" 
   class="hover:text-yellow-400 transition">Tarifs</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-yellow-400">Contact</a></li>
            </ul>

            @if (Route::has('login'))
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ url('/home') }}"
                           class="bg-yellow-400 text-black px-4 py-2 rounded-lg font-semibold hover:bg-yellow-500 transition">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                           class="text-gray-300 hover:text-yellow-400 transition">
                            Login
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="bg-yellow-400 text-black px-4 py-2 rounded-lg font-semibold hover:bg-yellow-500 transition">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <!-- Mobile Button -->
        <button @click="open = !open" class="md:hidden text-gray-300 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
                <path x-show="!open" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                <path x-show="open" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open"
         x-transition
         class="md:hidden px-6 pb-6 space-y-4 text-gray-300">

        <a href="#" class="block hover:text-yellow-400">Accueil</a>
        <a href="#" class="block hover:text-yellow-400">Fonctionnalités</a>
        <a href="#" class="block hover:text-yellow-400">Tarifs</a>
        <a href="#" class="block hover:text-yellow-400">Contact</a>

        <hr class="border-gray-700">

        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}"
                   class="block bg-yellow-400 text-black px-4 py-2 rounded-lg font-semibold text-center">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                   class="block hover:text-yellow-400">
                    Login
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="block bg-yellow-400 text-black px-4 py-2 rounded-lg font-semibold text-center">
                        Register
                    </a>
                @endif
            @endauth
        @endif

    </div>

</nav>


<!-- HERO -->
<section class="relative bg-slate-950 py-28 px-6 md:px-20 overflow-hidden">

    <!-- Background Image -->
    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945"
         class="absolute inset-0 w-full h-full object-cover opacity-100">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900/90 to-slate-950"></div>

    <div class="relative max-w-6xl mx-auto text-center text-white">

        <span class="bg-yellow-400 text-black px-4 py-1 rounded-full text-sm font-semibold">
            Solution complète
        </span>

        <h1 class="text-4xl md:text-5xl font-bold mt-6 mb-6">
            Tout ce dont votre hôtel a besoin,
            <span class="text-yellow-400">dans une seule plateforme</span>
        </h1>

        <p class="text-gray-300 max-w-3xl mx-auto text-lg">
            Centralisez vos opérations, améliorez votre productivité
            et prenez de meilleures décisions grâce à des données en temps réel.
        </p>

    </div>

</section>



<!-- BENEFITS SECTION -->
<section class="bg-slate-900 py-24 px-6 md:px-20">

    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10 text-center">

        <div>
            <h3 class="text-2xl font-bold mb-4 text-yellow-400">+25%</h3>
            <p class="text-gray-300">Augmentation moyenne du taux d’occupation</p>
        </div>

        <div>
            <h3 class="text-2xl font-bold mb-4 text-yellow-400">-40%</h3>
            <p class="text-gray-300">Réduction du temps administratif</p>
        </div>

        <div>
            <h3 class="text-2xl font-bold mb-4 text-yellow-400">100%</h3>
            <p class="text-gray-300">Centralisation des opérations</p>
        </div>

    </div>

</section>


<!-- MODULES SECTION -->
<section class="bg-slate-950 py-24 px-6 md:px-20">

    <div class="max-w-6xl mx-auto space-y-24">

        <!-- Module 1 -->
        <div class="grid md:grid-cols-2 gap-16 items-center">

            <div>
                <h2 class="text-3xl font-bold text-gray-300 mb-6">
                    Gestion intelligente des réservations
                </h2>

                <ul class="space-y-3 text-gray-300">
                    <li>✔ Centralisation multi-canal</li>
                    <li>✔ Check-in / Check-out simplifié</li>
                    <li>✔ Historique client détaillé</li>
                    <li>✔ Notifications automatiques</li>
                </ul>
            </div>

            <div class="bg-slate-800 p-6 rounded-3xl shadow-xl border border-slate-700">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f"
                     class="rounded-2xl">
            </div>

        </div>


        <!-- Module 2 -->
        <div class="grid md:grid-cols-2 gap-16 items-center">

            <div class="order-2 md:order-1 bg-slate-800 p-6 rounded-3xl shadow-2xl border border-slate-700 relative">

    <!-- Glow effect -->
    <div class="absolute -inset-4 bg-yellow-500/10 blur-2xl rounded-3xl"></div>

    <img src="https://i.redd.it/vw3ewdyrrsq61.png"
     class="relative rounded-2xl shadow-xl">

</div>


            <div class="order-1 md:order-2">
                <h2 class="text-3xl font-bold text-gray-300 mb-6">
                    Tableau de bord stratégique
                </h2>

                <ul class="space-y-3 text-gray-300">
                    <li>✔ Taux d’occupation en temps réel</li>
                    <li>✔ Revenus journaliers / mensuels</li>
                    <li>✔ Graphiques dynamiques</li>
                    <li>✔ Rapports exportables</li>
                </ul>
            </div>

        </div>


        <!-- Module 3 -->
        <div class="grid md:grid-cols-2 gap-16 items-center">

            <div>
                <h2 class="text-3xl font-bold text-gray-300 mb-6">
                    Facturation & Paiements automatisés
                </h2>

                <ul class="space-y-3 text-gray-300">
                    <li>✔ Factures générées automatiquement</li>
                    <li>✔ Paiements en ligne sécurisés</li>
                    <li>✔ Gestion TVA intégrée</li>
                    <li>✔ Export comptable</li>
                </ul>
            </div>

            <div class="bg-slate-800 p-6 rounded-3xl shadow-xl border border-slate-700">
                <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c"
                     class="rounded-2xl">
            </div>

        </div>

    </div>

</section>


<!-- SECURITY SECTION -->
<section class="bg-slate-900 py-24 px-6 md:px-20 text-center">

    <h2 class="text-3xl font-bold text-gray-300 mb-6">
        Sécurité & Fiabilité
    </h2>

    <p class="text-gray-400 max-w-3xl mx-auto mb-10">
        Vos données sont protégées par des standards de sécurité
        professionnels et une infrastructure cloud fiable.
    </p>

    <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">

        <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700">
            🔒 Données chiffrées
        </div>

        <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700">
            ☁ Hébergement cloud sécurisé
        </div>

        <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700">
            ⚡ 99.9% disponibilité
        </div>

    </div>

</section>


<!-- FINAL CTA -->
<section class="bg-slate-950 py-24 px-6 md:px-20 text-center">

    <h2 class="text-3xl font-bold text-gray-300 mb-6">
        Passez au niveau supérieur
    </h2>

    <p class="text-gray-400 max-w-3xl mx-auto mb-10">
        Rejoignez les hôtels qui ont déjà modernisé leur gestion.
    </p>

    <a href="#"
       class="bg-yellow-400 text-black px-8 py-4 rounded-xl font-semibold hover:bg-yellow-500 transition">
        Essai gratuit 14 jours
    </a>

</section>


<!-- FOOTER -->
<footer class="bg-slate-950 border-t border-slate-800 pt-20 pb-10 px-6 md:px-20">

    <div class="max-w-7xl mx-auto grid md:grid-cols-4 gap-12">

        <!-- Logo + Description -->
        <div>
            <h3 class="text-2xl font-bold text-yellow-400 mb-4">
                HotelFlow
            </h3>

            <p class="text-gray-400 mb-6">
                Solution moderne de gestion hôtelière pour automatiser
                vos opérations et améliorer votre rentabilité.
            </p>

            <div class="flex space-x-4 text-gray-400">
                <a href="#" class="hover:text-yellow-400 transition">Facebook</a>
                <a href="#" class="hover:text-yellow-400 transition">LinkedIn</a>
                <a href="#" class="hover:text-yellow-400 transition">Twitter</a>
            </div>
        </div>

        <!-- Produit -->
        <div>
            <h4 class="font-semibold mb-4 text-white">Produit</h4>

            <ul class="space-y-3 text-gray-400">
                <li><a href="#" class="hover:text-yellow-400 transition">Fonctionnalités</a></li>
                <li><a href="#" class="hover:text-yellow-400 transition">Tarifs</a></li>
                <li><a href="#" class="hover:text-yellow-400 transition">Démo</a></li>
                <li><a href="#" class="hover:text-yellow-400 transition">Mises à jour</a></li>
            </ul>
        </div>

        <!-- Entreprise -->
        <div>
            <h4 class="font-semibold mb-4 text-white">Entreprise</h4>

            <ul class="space-y-3 text-gray-400">
                <li><a href="#" class="hover:text-yellow-400 transition">À propos</a></li>
                <li><a href="#" class="hover:text-yellow-400 transition">Carrières</a></li>
                <li><a href="#" class="hover:text-yellow-400 transition">Blog</a></li>
                <li><a href="#" class="hover:text-yellow-400 transition">Contact</a></li>
            </ul>
        </div>

        <!-- Support -->
        <div>
            <h4 class="font-semibold mb-4 text-white">Support</h4>

            <ul class="space-y-3 text-gray-400">
                <li><a href="#" class="hover:text-yellow-400 transition">Centre d’aide</a></li>
                <li><a href="#" class="hover:text-yellow-400 transition">Documentation</a></li>
                <li><a href="#" class="hover:text-yellow-400 transition">Politique de confidentialité</a></li>
                <li><a href="#" class="hover:text-yellow-400 transition">Conditions d’utilisation</a></li>
            </ul>
        </div>

    </div>

    <!-- Bottom -->
    <div class="border-t border-slate-800 mt-16 pt-8 text-center text-gray-500 text-sm">
        © {{ date('Y') }} HotelFlow. Tous droits réservés.
    </div>

</footer>


</body>
</html>