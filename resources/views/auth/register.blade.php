<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-slate-50 px-4 py-10">

        <div class="w-full max-w-md">


            <!-- Logo -->

            <div class="text-center mb-8">

                <a href="{{ route('home') }}" class="inline-flex items-center gap-3">

                    <div class="w-12 h-12 rounded-xl bg-blue-600 flex items-center justify-center text-white font-bold text-xl shadow">
                        S
                    </div>


                    <div class="text-left">

                        <h1 class="text-xl font-bold text-slate-900">
                            SpectreTECH
                        </h1>


                        <p class="text-xs text-slate-500">
                            Academy
                        </p>

                    </div>


                </a>

            </div>




            <!-- Card -->

            <div class="bg-white rounded-3xl shadow-lg border border-slate-200 p-8">


                <h2 class="text-2xl font-bold text-slate-900 text-center mb-2">

                    Créer un compte

                </h2>


                <p class="text-slate-500 text-center mb-8">

                    Rejoignez SpectreTECH Academy

                </p>




                <form method="POST" action="{{ route('register') }}">

                    @csrf




                    <!-- Name -->

                    <div>

                        <x-input-label for="name" value="Nom complet" />


                        <x-text-input
                            id="name"
                            class="block mt-2 w-full rounded-xl"
                            type="text"
                            name="name"
                            :value="old('name')"
                            required
                            autofocus
                            autocomplete="name"
                        />


                        <x-input-error :messages="$errors->get('name')" class="mt-2" />


                    </div>





                    <!-- Email -->

                    <div class="mt-5">


                        <x-input-label for="email" value="Adresse email" />


                        <x-text-input
                            id="email"
                            class="block mt-2 w-full rounded-xl"
                            type="email"
                            name="email"
                            :value="old('email')"
                            required
                            autocomplete="username"
                        />


                        <x-input-error :messages="$errors->get('email')" class="mt-2" />


                    </div>






                    <!-- Password -->

                    <div class="mt-5">


                        <x-input-label for="password" value="Mot de passe" />


                        <x-text-input
                            id="password"
                            class="block mt-2 w-full rounded-xl"
                            type="password"
                            name="password"
                            required
                            autocomplete="new-password"
                        />


                        <x-input-error :messages="$errors->get('password')" class="mt-2" />


                    </div>






                    <!-- Confirm -->

                    <div class="mt-5">


                        <x-input-label for="password_confirmation" value="Confirmer le mot de passe" />


                        <x-text-input
                            id="password_confirmation"
                            class="block mt-2 w-full rounded-xl"
                            type="password"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                        />


                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />


                    </div>







                    <button
                        type="submit"
                        class="w-full mt-8 py-3 rounded-xl bg-blue-600 text-white font-semibold hover:bg-blue-700 transition shadow"
                    >

                        Créer mon compte

                    </button>





                </form>





                <p class="text-center text-sm text-slate-500 mt-8">


                    Vous avez déjà un compte ?


                    <a
                        href="{{ route('login') }}"
                        class="text-blue-600 font-semibold hover:text-blue-700"
                    >

                        Se connecter

                    </a>


                </p>



            </div>


        </div>


    </div>


</x-guest-layout>
