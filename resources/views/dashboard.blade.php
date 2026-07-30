<x-app-layout>

    <div class="min-h-screen bg-slate-50 py-10">

        <div class="container">


            <!-- Header -->

            <div class="bg-white rounded-3xl shadow-sm border border-slate-200 p-8 mb-8">

                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-5">

                    <div>

                        <h1 class="text-3xl font-bold text-slate-900">
                            Bonjour {{ Auth::user()->name }} 👋
                        </h1>

                        <p class="text-slate-500 mt-2">
                            Bienvenue dans votre espace étudiant SpectreTECH Academy.
                        </p>

                    </div>


                    <div class="bg-blue-600 text-white rounded-2xl px-6 py-4">

                        <p class="text-sm opacity-90">
                            Votre niveau
                        </p>

                        <p class="text-xl font-bold">
                            Débutant
                        </p>

                    </div>


                </div>

            </div>




            <!-- Cards -->

            <div class="grid md:grid-cols-3 gap-6">


                <div class="bg-white rounded-3xl border border-slate-200 p-6">

                    <h3 class="font-bold text-slate-900 text-lg">
                        📚 Mes formations
                    </h3>

                    <p class="text-slate-500 mt-3">
                        Découvrez vos cours et commencez votre apprentissage.
                    </p>

                    <a href="#"
                       class="inline-block mt-5 text-blue-600 font-semibold">
                        Voir les formations →
                    </a>

                </div>




                <div class="bg-white rounded-3xl border border-slate-200 p-6">

                    <h3 class="font-bold text-slate-900 text-lg">
                        🚀 Progression
                    </h3>

                    <p class="text-slate-500 mt-3">
                        Suivez votre évolution dans vos apprentissages.
                    </p>

                    <div class="mt-5 bg-slate-100 rounded-full h-3">

                        <div class="bg-blue-600 h-3 rounded-full w-1/4"></div>

                    </div>

                </div>





                <div class="bg-white rounded-3xl border border-slate-200 p-6">

                    <h3 class="font-bold text-slate-900 text-lg">
                        🏆 Certificats
                    </h3>

                    <p class="text-slate-500 mt-3">
                        Vos récompenses apparaîtront ici.
                    </p>

                </div>



            </div>




            <!-- Future section -->

            <div class="mt-8 bg-blue-600 rounded-3xl p-8 text-white">

                <h2 class="text-2xl font-bold">
                    Continuez votre apprentissage 🚀
                </h2>

                <p class="mt-3 text-blue-100">
                    De nouveaux cours en cybersécurité, développement et technologies arrivent bientôt.
                </p>

            </div>



        </div>

    </div>


</x-app-layout>
