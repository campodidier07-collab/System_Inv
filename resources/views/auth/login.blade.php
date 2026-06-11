<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="w-full">
        @csrf

        <div class="mb-10">
            <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 font-heading tracking-tight mb-3">Bienvenido de nuevo</h2>
            <p class="text-slate-500 text-lg">Ingresa tus datos para continuar.</p>
        </div>

        <div class="space-y-6">
            <!-- Email Address -->
            <div>
                <x-input-label for="email" value="Correo Electrónico" class="text-sm font-semibold text-slate-700 mb-2 block" />
                <x-text-input id="email" class="block w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:ring-2 focus:ring-agro-500/20 focus:border-agro-500 focus:bg-white transition-all duration-200 shadow-sm" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="tu@correo.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div>
                <div class="flex items-center justify-between mb-2">
                    <x-input-label for="password" value="Contraseña" class="text-sm font-semibold text-slate-700 block" />
                    @if (Route::has('password.request'))
                        <a class="text-sm font-medium text-agro-600 hover:text-agro-500 transition-colors" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif
                </div>
                <div class="relative">
                    <x-text-input id="password" class="block w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:ring-2 focus:ring-agro-500/20 focus:border-agro-500 focus:bg-white transition-all duration-200 shadow-sm"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" placeholder="••••••••" />
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center">
                <label for="remember_me" class="flex items-center cursor-pointer group">
                    <div class="relative flex items-center justify-center">
                        <input id="remember_me" type="checkbox" class="peer h-5 w-5 cursor-pointer appearance-none rounded-md border border-slate-300 bg-white transition-all checked:border-agro-500 checked:bg-agro-500 hover:border-agro-400 focus:ring-2 focus:ring-agro-500/20 focus:ring-offset-0" name="remember">
                        <span class="pointer-events-none absolute text-white opacity-0 transition-opacity peer-checked:opacity-100">
                            <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                    </div>
                    <span class="ms-3 text-sm font-medium text-slate-600 group-hover:text-slate-800 transition-colors">Mantener sesión iniciada</span>
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full flex justify-center items-center gap-2 py-4 px-4 border border-transparent rounded-xl text-lg font-bold text-white bg-agro-600 hover:bg-agro-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-agro-500 transition-all shadow-[0_8px_20px_rgba(43,130,93,0.25)] hover:shadow-[0_8px_25px_rgba(43,130,93,0.4)] hover:-translate-y-0.5 mt-4">
                Ingresar al Sistema
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </button>
        </div>

        @if (Route::has('register'))
            <p class="mt-10 text-center text-sm font-medium text-slate-600">
                ¿Aún no tienes una cuenta?
                <a href="{{ route('register') }}" class="font-bold text-agro-600 hover:text-agro-500 transition-colors ml-1">Regístrate ahora</a>
            </p>
        @endif
    </form>
</x-guest-layout>