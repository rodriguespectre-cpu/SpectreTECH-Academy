@extends('layouts.app')


@section('title', 'SpectreTECH Academy - Formations avancées')


@section('description', 'Apprenez la programmation, la cybersécurité et les technologies modernes avec SpectreTECH Academy.')


@section('content')


<!-- Hero -->

<section class="section">

    <div class="container grid lg:grid-cols-2 gap-12 items-center">


        <div>


            <span class="inline-flex px-4 py-2 rounded-full bg-blue-100 text-blue-600 text-sm font-semibold mb-6">

                🚀 Plateforme de formation professionnelle

            </span>



            <h1 class="text-5xl lg:text-6xl font-bold leading-tight mb-6">

                Développez vos compétences
                <span class="text-blue-600">
                    numériques
                </span>

            </h1>



            <p class="text-lg text-slate-500 mb-8 max-w-xl">

                Apprenez la programmation avancée, la cybersécurité,
                le développement web et les nouvelles technologies
                avec des formations conçues pour les passionnés.

            </p>



            <div class="flex flex-wrap gap-4">


                <a href="#"
                   class="btn-primary">

                    Voir les formations

                </a>



                <a href="#"
                   class="btn-outline">

                    Découvrir

                </a>


            </div>


        </div>



        <div class="relative">


            <div class="card">


                <div class="bg-slate-900 rounded-2xl p-8 text-white">


                    <div class="flex gap-2 mb-6">

                        <span class="w-3 h-3 bg-red-500 rounded-full"></span>

                        <span class="w-3 h-3 bg-yellow-500 rounded-full"></span>

                        <span class="w-3 h-3 bg-green-500 rounded-full"></span>


                    </div>



                    <p class="font-mono text-sm text-blue-300">

                        &lt;learn&gt;

                    </p>


                    <p class="font-mono text-sm mt-3">

                        Développer → Créer → Innover

                    </p>


                    <p class="font-mono text-sm text-green-400 mt-3">

                        Success : true

                    </p>



                </div>


            </div>


        </div>


    </div>


</section>




<!-- Formations -->

<section class="section bg-white">


    <div class="container text-center">


        <h2 class="section-title">

            Des formations adaptées aux développeurs modernes

        </h2>


        <p class="section-description mb-12">

            Des cours pratiques avec des projets réels pour progresser rapidement.

        </p>



        <div class="grid md:grid-cols-3 gap-8">



            <div class="card text-left">


                <div class="text-4xl mb-5">
                    💻
                </div>


                <h3 class="text-xl mb-3">

                    Programmation avancée

                </h3>


                <p>

                    Python, PHP, JavaScript, architectures modernes et bonnes pratiques.

                </p>


            </div>




            <div class="card text-left">


                <div class="text-4xl mb-5">
                    🔐
                </div>


                <h3 class="text-xl mb-3">

                    Cybersécurité

                </h3>


                <p>

                    Apprenez les bases de la sécurité informatique et de l'analyse.

                </p>


            </div>




            <div class="card text-left">


                <div class="text-4xl mb-5">
                    🚀
                </div>


                <h3 class="text-xl mb-3">

                    Projets professionnels

                </h3>


                <p>

                    Construisez des applications complètes pour votre portfolio.

                </p>


            </div>



        </div>


    </div>


</section>




<!-- CTA -->


<section class="section">


    <div class="container">


        <div class="bg-blue-600 rounded-3xl p-10 lg:p-16 text-center text-white">


            <h2 class="text-3xl lg:text-4xl font-bold mb-5">

                Prêt à commencer votre évolution ?

            </h2>



            <p class="mb-8 text-blue-100">

                Rejoignez une communauté de développeurs ambitieux.

            </p>



            <a href="#"
               class="inline-flex bg-white text-blue-600 px-8 py-3 rounded-xl font-semibold">

                Créer un compte

            </a>


        </div>


    </div>


</section>



@endsection
