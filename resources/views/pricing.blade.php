<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tarifs</title>
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

<!-- HERO -->
<section class="bg-slate-950 py-28 px-6 md:px-20 text-center">

    <h1 class="text-4xl md:text-5xl font-bold mb-6">
        Des tarifs simples et transparents
    </h1>

    <p class="text-gray-400 max-w-3xl mx-auto text-lg">
        Choisissez le plan adapté à la taille de votre établissement.
        Sans frais cachés.
    </p>

</section>


<!-- PRICING CARDS -->
<section class="bg-slate-900 py-24 px-6 md:px-20">

    <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-10">

        <!-- BASIC -->
        <div class="bg-slate-950 p-10 rounded-3xl border border-slate-800 shadow-xl">

            <h3 class="text-2xl font-semibold mb-4">Basic</h3>
            <p class="text-gray-400 mb-6">1 – 20 chambres</p>

            <div class="text-4xl font-bold mb-6">
                49€
                <span class="text-lg text-gray-400 font-normal">/mois</span>
            </div>

            <ul class="space-y-3 text-gray-300 mb-8">
                <li>✔ Gestion réservations</li>
                <li>✔ Gestion chambres</li>
                <li>✔ Facturation simple</li>
                <li>✔ Support standard</li>
            </ul>

            <a href="#"
               class="block text-center border border-gray-600 py-3 rounded-xl hover:bg-slate-800 transition">
                Choisir Basic
            </a>

        </div>


        <!-- PRO -->
        <div class="relative bg-slate-950 p-10 rounded-3xl border-2 border-yellow-400 shadow-2xl scale-105">

            <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-yellow-400 text-black px-4 py-1 rounded-full text-sm font-semibold">
                Le plus populaire
            </div>

            <h3 class="text-2xl font-semibold mb-4">Pro</h3>
            <p class="text-gray-400 mb-6">20 – 100 chambres</p>

            <div class="text-4xl font-bold mb-6">
                99€
                <span class="text-lg text-gray-400 font-normal">/mois</span>
            </div>

            <ul class="space-y-3 text-gray-300 mb-8">
                <li>✔ Toutes les fonctionnalités Basic</li>
                <li>✔ Statistiques avancées</li>
                <li>✔ Gestion personnel</li>
                <li>✔ Rapports exportables</li>
                <li>✔ Support prioritaire</li>
            </ul>

            <a href="#"
               class="block text-center bg-yellow-400 text-black py-3 rounded-xl font-semibold hover:bg-yellow-500 transition">
                Choisir Pro
            </a>

        </div>


        <!-- ENTERPRISE -->
        <div class="bg-slate-950 p-10 rounded-3xl border border-slate-800 shadow-xl">

            <h3 class="text-2xl font-semibold mb-4">Enterprise</h3>
            <p class="text-gray-400 mb-6">100+ chambres</p>

            <div class="text-4xl font-bold mb-6">
                Sur devis
            </div>

            <ul class="space-y-3 text-gray-300 mb-8">
                <li>✔ Multi-établissements</li>
                <li>✔ Intégrations personnalisées</li>
                <li>✔ Support dédié 24/7</li>
                <li>✔ Accompagnement stratégique</li>
            </ul>

            <a href="#"
               class="block text-center border border-gray-600 py-3 rounded-xl hover:bg-slate-800 transition">
                Nous contacter
            </a>

        </div>

    </div>

</section>


<!-- FAQ SECTION -->
<section class="bg-slate-950 py-24 px-6 md:px-20">

    <div class="max-w-4xl mx-auto">

        <h2 class="text-3xl font-bold mb-12 text-center">
            Questions fréquentes
        </h2>

        <div class="space-y-8 text-gray-300">

            <div>
                <h4 class="font-semibold mb-2 text-yellow-400">
                    Puis-je annuler à tout moment ?
                </h4>
                <p>
                    Oui, vous pouvez résilier votre abonnement à tout moment,
                    sans frais supplémentaires.
                </p>
            </div>

            <div>
                <h4 class="font-semibold mb-2 text-yellow-400">
                    Y a-t-il une période d’essai ?
                </h4>
                <p>
                    Oui, nous proposons un essai gratuit de 14 jours.
                </p>
            </div>

            <div>
                <h4 class="font-semibold mb-2 text-yellow-400">
                    Mes données sont-elles sécurisées ?
                </h4>
                <p>
                    Toutes les données sont hébergées sur une infrastructure cloud sécurisée.
                </p>
            </div>

        </div>

    </div>

</section>


<!-- FINAL CTA -->
<section class="bg-slate-900 py-24 px-6 md:px-20 text-center">

    <h2 class="text-4xl font-bold mb-6">
        Commencez gratuitement dès aujourd’hui
    </h2>

    <p class="text-gray-400 mb-10">
        Testez HotelFlow sans engagement pendant 14 jours.
    </p>

    <a href="#"
       class="bg-yellow-400 text-black px-8 py-4 rounded-xl font-semibold hover:bg-yellow-500 transition">
        Essai gratuit
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