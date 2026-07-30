<nav class="bg-white border-b border-slate-200 sticky top-0 z-50">

    <div class="container flex items-center justify-between py-5">


        <!-- Logo -->

        <a href="{{ route('home') }}" class="flex items-center gap-3">

            <div class="w-11 h-11 rounded-xl bg-blue-600 flex items-center justify-center text-white font-bold text-xl shadow">
                S
            </div>


            <div>

                <h1 class="text-xl font-bold text-slate-900">
                    SpectreTECH
                </h1>

                <span class="text-xs text-slate-500">
                    Academy
                </span>

            </div>

        </a>



        <!-- Menu -->

        <div class="hidden md:flex items-center gap-8 text-sm font-medium">

            <a href="{{ route('home') }}"
               class="hover:text-blue-600 transition">

                Accueil

            </a>


            <a href="#formations"
               class="hover:text-blue-600 transition">

                Formations

            </a>


            <a href="#"
               class="hover:text-blue-600 transition">

                Blog

            </a>


            <a href="#"
               class="hover:text-blue-600 transition">

                Support

            </a>


        </div>



        <!-- Actions -->

        <div class="flex items-center gap-3">


            @auth


                <a href="{{ route('dashboard') }}"
   class="px-4 py-2 rounded-xl bg-blue-600 text-white text-sm font-semibold hover:bg-blue-700 transition whitespace-nowrap">

    Dashboard

</a>


            @else


                <a href="{{ route('login') }}"
                   class="hidden sm:inline-flex px-5 py-2 rounded-xl border border-blue-600 text-blue-600 font-semibold hover:bg-blue-600 hover:text-white transition">

                    Connexion

                </a>



                <a href="{{ route('register') }}"
   class="px-4 py-2 rounded-xl bg-blue-600 text-white text-sm font-semibold hover:bg-blue-700 transition shadow whitespace-nowrap">

    S'inscrire

</a>

            @endauth


        </div>


    </div>

</nav>
