<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>HotelFlow - Gestion Hôtelière</title>
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body class="bg-slate-950 text-white">

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


    
    <!-- HERO SECTION -->
<section class="relative">

    <div class="relative h-[600px] flex items-center">

        <!-- Background Image -->
        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945"
             class="absolute inset-0 w-full h-full object-cover">

        <!-- Dark Blue Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-900/90 to-transparent"></div>

        <!-- Content -->
        <div class="relative z-10 max-w-6xl mx-auto px-6 md:px-10 w-full">

            <div class="max-w-2xl">

                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6">
                    Simplifiez la gestion de votre hôtel.
                </h1>

                <h2 class="text-3xl md:text-4xl font-bold text-yellow-400 mb-6">
                    Automatisez. Optimisez. Développez.
                </h2>

                <div class="w-20 h-1 bg-yellow-400 mb-6"></div>

                <p class="text-gray-300 mb-8">
                    HotelFlow est une solution complète de gestion hôtelière
                    pour hôtels et résidences.
                </p>

                <!-- Buttons -->
                <div class="flex flex-wrap gap-4">

                    <a href="#"
                       class="bg-yellow-400 text-black px-6 py-3 rounded-lg font-semibold hover:bg-yellow-500 transition">
                        Essai gratuit 14 jours
                    </a>

                    <a href="#"
                       class="flex items-center gap-2 border border-gray-400 px-6 py-3 rounded-lg hover:bg-slate-800 transition">
                        ▶ Voir la démo
                    </a>

                    <a href="#"
                       class="border border-gray-400 px-6 py-3 rounded-lg hover:bg-slate-800 transition">
                        Demander une présentation
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>




    <!-- FEATURES SECTION -->
<section class="bg-slate-950 py-20 px-6 md:px-20">

    <!-- Title -->
    <div class="text-center mb-16">
        <h2 class="text-4xl font-bold mb-4">
            Une solution complète pour votre hôtel
        </h2>
        <p class="text-gray-400 max-w-2xl mx-auto">
            Gérez vos réservations, vos chambres, vos paiements et votre personnel
            depuis une seule plateforme intelligente.
        </p>
    </div>

    <!-- Cards -->
    <div class="grid gap-10 md:grid-cols-3">

        <!-- Card 1 -->
        <div class="bg-slate-900 p-8 rounded-2xl shadow-lg hover:shadow-yellow-500/20 transition duration-300">
            <div class="text-yellow-400 text-4xl mb-4">🏨</div>
            <h3 class="text-xl font-semibold mb-3">Gestion des chambres</h3>
            <p class="text-gray-400">
                Suivi en temps réel du statut des chambres :
                Libre, Occupée ou Nettoyage.
            </p>
        </div>

        <!-- Card 2 -->
        <div class="bg-slate-900 p-8 rounded-2xl shadow-lg hover:shadow-yellow-500/20 transition duration-300">
            <div class="text-yellow-400 text-4xl mb-4">📅</div>
            <h3 class="text-xl font-semibold mb-3">Réservations simplifiées</h3>
            <p class="text-gray-400">
                Check-in et Check-out rapides avec
                calendrier interactif.
            </p>
        </div>

        <!-- Card 3 -->
        <div class="bg-slate-900 p-8 rounded-2xl shadow-lg hover:shadow-yellow-500/20 transition duration-300">
            <div class="text-yellow-400 text-4xl mb-4">💳</div>
            <h3 class="text-xl font-semibold mb-3">Facturation & Paiements</h3>
            <p class="text-gray-400">
                Génération automatique des factures
                et gestion des paiements sécurisés.
            </p>
        </div>

        <!-- Card 4 -->
        <div class="bg-slate-900 p-8 rounded-2xl shadow-lg hover:shadow-yellow-500/20 transition duration-300">
            <div class="text-yellow-400 text-4xl mb-4">📊</div>
            <h3 class="text-xl font-semibold mb-3">Statistiques avancées</h3>
            <p class="text-gray-400">
                Analysez vos revenus, taux d’occupation
                et performances en un clic.
            </p>
        </div>

        <!-- Card 5 -->
        <div class="bg-slate-900 p-8 rounded-2xl shadow-lg hover:shadow-yellow-500/20 transition duration-300">
            <div class="text-yellow-400 text-4xl mb-4">👥</div>
            <h3 class="text-xl font-semibold mb-3">Gestion du personnel</h3>
            <p class="text-gray-400">
                Attribuez des rôles et permissions
                pour une meilleure organisation.
            </p>
        </div>

        <!-- Card 6 -->
        <div class="bg-slate-900 p-8 rounded-2xl shadow-lg hover:shadow-yellow-500/20 transition duration-300">
            <div class="text-yellow-400 text-4xl mb-4">☁️</div>
            <h3 class="text-xl font-semibold mb-3">Cloud sécurisé</h3>
            <p class="text-gray-400">
                Accédez à votre système partout,
                à tout moment.
            </p>
        </div>

    </div>

</section>

    <!-- DASHBOARD PREVIEW SECTION -->
<section class="bg-slate-900 py-24 px-6 md:px-20">

    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">

        <!-- Left Content -->
        <div>

            <h2 class="text-4xl font-bold mb-6">
                Visualisez votre hôtel en un coup d'œil
            </h2>

            <p class="text-gray-400 mb-8">
                Grâce à notre tableau de bord intelligent, suivez vos
                performances en temps réel : taux d’occupation, revenus,
                réservations actives et bien plus.
            </p>

            <ul class="space-y-4 text-gray-300">
                <li class="flex items-center gap-3">
                    <span class="text-yellow-400">✔</span>
                    Statistiques en temps réel
                </li>
                <li class="flex items-center gap-3">
                    <span class="text-yellow-400">✔</span>
                    Graphiques dynamiques
                </li>
                <li class="flex items-center gap-3">
                    <span class="text-yellow-400">✔</span>
                    Rapports exportables
                </li>
                <li class="flex items-center gap-3">
                    <span class="text-yellow-400">✔</span>
                    Interface simple et moderne
                </li>
            </ul>

            <div class="mt-10">
                <a href="#"
                   class="bg-yellow-400 text-black px-6 py-3 rounded-lg font-semibold hover:bg-yellow-500 transition">
                    Découvrir le tableau de bord
                </a>
            </div>

        </div>

        <!-- Right Image -->
        <div class="relative">

            <!-- Glow Effect -->
            <div class="absolute -inset-4 bg-yellow-500/10 blur-2xl rounded-3xl"></div>

            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71"
                 class="relative rounded-2xl shadow-2xl border border-slate-700">

        </div>

    </div>

</section>
<!-- PRICING SECTION -->
<section class="bg-slate-950 py-24 px-6 md:px-20">

    <!-- Title -->
    <div class="text-center mb-16">
        <h2 class="text-4xl font-bold mb-4">
            Des tarifs adaptés à votre établissement
        </h2>
        <p class="text-gray-400">
            Choisissez le plan qui correspond à la taille de votre hôtel.
        </p>
    </div>

    <!-- Pricing Cards -->
    <div class="max-w-7xl mx-auto grid gap-10 md:grid-cols-3">

        <!-- BASIC -->
        <div class="bg-slate-900 rounded-2xl p-10 border border-slate-800 shadow-lg">

            <h3 class="text-2xl font-semibold mb-4">Basic</h3>
            <p class="text-gray-400 mb-6">1 – 20 chambres</p>

            <div class="text-4xl font-bold mb-6">
                49€ <span class="text-lg text-gray-400 font-normal">/mois</span>
            </div>

            <ul class="space-y-3 text-gray-300 mb-8">
                <li>✔ Gestion des réservations</li>
                <li>✔ Gestion des chambres</li>
                <li>✔ Facturation simple</li>
                <li>✔ Support standard</li>
            </ul>

            <a href="#"
               class="block text-center border border-gray-600 py-3 rounded-lg hover:bg-slate-800 transition">
                Choisir Basic
            </a>
        </div>


        <!-- PRO (Highlighted) -->
        <div class="relative bg-slate-900 rounded-2xl p-10 border-2 border-yellow-400 shadow-2xl scale-105">

            <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-yellow-400 text-black px-4 py-1 rounded-full text-sm font-semibold">
                Le plus populaire
            </div>

            <h3 class="text-2xl font-semibold mb-4">Pro</h3>
            <p class="text-gray-400 mb-6">20 – 100 chambres</p>

            <div class="text-4xl font-bold mb-6">
                99€ <span class="text-lg text-gray-400 font-normal">/mois</span>
            </div>

            <ul class="space-y-3 text-gray-300 mb-8">
                <li>✔ Toutes les fonctionnalités Basic</li>
                <li>✔ Statistiques avancées</li>
                <li>✔ Gestion du personnel</li>
                <li>✔ Rapports exportables</li>
                <li>✔ Support prioritaire</li>
            </ul>

            <a href="#"
               class="block text-center bg-yellow-400 text-black py-3 rounded-lg font-semibold hover:bg-yellow-500 transition">
                Choisir Pro
            </a>
        </div>


        <!-- ENTERPRISE -->
        <div class="bg-slate-900 rounded-2xl p-10 border border-slate-800 shadow-lg">

            <h3 class="text-2xl font-semibold mb-4">Enterprise</h3>
            <p class="text-gray-400 mb-6">100+ chambres</p>

            <div class="text-4xl font-bold mb-6">
                Sur devis
            </div>

            <ul class="space-y-3 text-gray-300 mb-8">
                <li>✔ Toutes les fonctionnalités Pro</li>
                <li>✔ Multi-établissements</li>
                <li>✔ Intégrations personnalisées</li>
                <li>✔ Support dédié 24/7</li>
            </ul>

            <a href="#"
               class="block text-center border border-gray-600 py-3 rounded-lg hover:bg-slate-800 transition">
                Nous contacter
            </a>
        </div>

    </div>

</section>
<!-- TESTIMONIALS PREMIUM V2 -->
<section class="bg-slate-950 py-28 px-6 md:px-20 relative overflow-hidden">

    <!-- Background subtle glow -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-yellow-500/5 blur-3xl rounded-full"></div>

    <div class="relative max-w-7xl mx-auto">

        <!-- Header -->
        <div class="text-center mb-20">
            <p class="text-yellow-400 font-semibold mb-4">
                NOTÉ 4.9/5 PAR NOS CLIENTS
            </p>

            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Ils ont transformé leur gestion hôtelière
            </h2>

            <p class="text-gray-400 max-w-2xl mx-auto">
                HotelFlow accompagne des centaines d’hôtels dans leur
                digitalisation et leur croissance.
            </p>
        </div>

        <!-- Grid -->
        <div class="grid md:grid-cols-3 gap-10">

            <!-- Card 1 -->
            <div class="relative bg-white/5 backdrop-blur-xl border border-white/10 p-8 rounded-3xl shadow-xl hover:scale-105 transition duration-300">

                <div class="absolute text-8xl text-yellow-400/10 top-4 right-6 font-bold">
                    "
                </div>

                <p class="text-gray-300 mb-8 relative z-10">
                    HotelFlow nous a permis d’augmenter notre taux
                    d’occupation de 25% en seulement 6 mois.
                </p>

                <div class="flex items-center gap-4">
                    <img src="https://randomuser.me/api/portraits/men/22.jpg"
                         class="w-12 h-12 rounded-full border border-slate-700">
                    <div>
                        <p class="font-semibold">David Leroy</p>
                        <p class="text-sm text-gray-400">CEO – Grand Palace</p>
                    </div>
                </div>

            </div>

            <!-- Card 2 -->
            <div class="relative bg-white/5 backdrop-blur-xl border border-white/10 p-8 rounded-3xl shadow-xl hover:scale-105 transition duration-300">

                <div class="absolute text-8xl text-yellow-400/10 top-4 right-6 font-bold">
                    "
                </div>

                <p class="text-gray-300 mb-8 relative z-10">
                    La centralisation des paiements et des réservations
                    nous a fait gagner un temps précieux.
                </p>

                <div class="flex items-center gap-4">
                    <img src="https://randomuser.me/api/portraits/women/31.jpg"
                         class="w-12 h-12 rounded-full border border-slate-700">
                    <div>
                        <p class="font-semibold">Amélie Garnier</p>
                        <p class="text-sm text-gray-400">Manager – Urban Stay</p>
                    </div>
                </div>

            </div>

            <!-- Card 3 -->
            <div class="relative bg-white/5 backdrop-blur-xl border border-white/10 p-8 rounded-3xl shadow-xl hover:scale-105 transition duration-300">

                <div class="absolute text-8xl text-yellow-400/10 top-4 right-6 font-bold">
                    "
                </div>

                <p class="text-gray-300 mb-8 relative z-10">
                    Le dashboard est exceptionnel. Nous avons enfin
                    des données claires pour prendre des décisions.
                </p>

                <div class="flex items-center gap-4">
                    <img src="https://randomuser.me/api/portraits/men/41.jpg"
                         class="w-12 h-12 rounded-full border border-slate-700">
                    <div>
                        <p class="font-semibold">Karim Benali</p>
                        <p class="text-sm text-gray-400">Propriétaire – Royal Suites</p>
                    </div>
                </div>

            </div>

        </div>


        <!-- Stats Section -->
        <div class="grid md:grid-cols-4 gap-10 mt-24 text-center">

            <div>
                <h3 class="text-4xl font-bold text-yellow-400">+500</h3>
                <p class="text-gray-400 mt-2">Hôtels actifs</p>
            </div>

            <div>
                <h3 class="text-4xl font-bold text-yellow-400">+120k</h3>
                <p class="text-gray-400 mt-2">Réservations gérées</p>
            </div>

            <div>
                <h3 class="text-4xl font-bold text-yellow-400">99.9%</h3>
                <p class="text-gray-400 mt-2">Disponibilité serveur</p>
            </div>

            <div>
                <h3 class="text-4xl font-bold text-yellow-400">24/7</h3>
                <p class="text-gray-400 mt-2">Support client</p>
            </div>

        </div>

    </div>

</section>
<!-- FINAL CTA WITH IMAGE -->
<section class="relative bg-slate-900 py-28 px-6 md:px-20 overflow-hidden">

    <!-- Background Glow -->
    <div class="absolute -top-20 -left-20 w-[400px] h-[400px] bg-yellow-500/10 blur-3xl rounded-full"></div>
    <div class="absolute -bottom-20 -right-20 w-[400px] h-[400px] bg-yellow-500/10 blur-3xl rounded-full"></div>

    <div class="relative max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">

        <!-- LEFT CONTENT -->
        <div>

            <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                Prêt à digitaliser votre hôtel ?
            </h2>

            <p class="text-gray-400 text-lg mb-10">
                Simplifiez vos opérations, améliorez votre rentabilité
                et offrez une meilleure expérience à vos clients grâce à HotelFlow.
            </p>

            <div class="flex flex-wrap gap-6">

                <a href="#"
                   class="bg-yellow-400 text-black px-8 py-4 rounded-xl font-semibold text-lg hover:bg-yellow-500 transition shadow-lg shadow-yellow-500/20">
                    Commencer gratuitement
                </a>

                <a href="#"
                   class="border border-gray-600 px-8 py-4 rounded-xl text-lg hover:bg-slate-800 transition">
                    Voir une démo
                </a>

            </div>

            <p class="text-gray-500 text-sm mt-8">
                ✓ Essai gratuit 14 jours &nbsp;&nbsp;
                ✓ Sans engagement &nbsp;&nbsp;
                ✓ Support inclus
            </p>

        </div>

        <!-- RIGHT IMAGE -->
        <div class="relative">

            <!-- Glow -->
            <div class="absolute -inset-6 bg-yellow-500/10 blur-2xl rounded-3xl"></div>

           <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa"
     class="relative rounded-3xl shadow-2xl border border-slate-800">


        </div>

    </div>

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
