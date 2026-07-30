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

                    Connexion

                </h2>


                <p class="text-slate-500 text-center mb-8">

                    Connectez-vous à votre espace étudiant

                </p>



                <!-- Session Status -->

                <x-auth-session-status class="mb-4" :status="session('status')" />



                <form method="POST" action="{{ route('login') }}">

                    @csrf



                    <!-- Email -->

                    <div>

                        <x-input-label for="email" value="Adresse email" />

                        <x-text-input
                            id="email"
                            class="block mt-2 w-full rounded-xl"
                            type="email"
                            name="email"
                            :value="old('email')"
                            required
                            autofocus
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
                            autocomplete="current-password"
                        />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    </div>




                    <!-- Remember -->

                    <div class="flex items-center justify-between mt-5">


                        <label class="inline-flex items-center">

                            <input
                                id="remember_me"
                                type="checkbox"
                                class="rounded border-slate-300 text-blue-600 shadow-sm"
                                name="remember"
                            >

                            <span class="ms-2 text-sm text-slate-600">
                                Se souvenir de moi
                            </span>

                        </label>



                        @if (Route::has('password.request'))

                            <a
                                class="text-sm text-blue-600 hover:text-blue-700"
                                href="{{ route('password.request') }}"
                            >

                                Mot de passe oublié ?

                            </a>

                        @endif


                    </div>




                    <!-- Button -->

                    <button
                        type="submit"
                        class="w-full mt-8 py-3 rounded-xl bg-blue-600 text-white font-semibold hover:bg-blue-700 transition shadow"
                    >

                        Se connecter

                    </button>



                </form>




                <p class="text-center text-sm text-slate-500 mt-8">

                    Pas encore inscrit ?

                    <a
                        href="{{ route('register') }}"
                        class="text-blue-600 font-semibold hover:text-blue-700"
                    >

                        Créer un compte

                    </a>

                </p>


            </div>


        </div>


    </div>


</x-guest-layout>
