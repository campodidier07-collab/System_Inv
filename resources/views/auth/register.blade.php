<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="w-full">
        @csrf

        <div class="mb-10">
            <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 font-heading tracking-tight mb-3">Comienza ahora</h2>
            <p class="text-slate-500 text-lg">Crea tu cuenta y transforma tu negocio agrícola.</p>
        </div>

        <div class="space-y-5">
            <!-- Name -->
            <div>
                <x-input-label for="name" value="Nombre Completo" class="text-sm font-semibold text-slate-700 mb-2 block" />
                <x-text-input id="name" class="block w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:ring-2 focus:ring-agro-500/20 focus:border-agro-500 focus:bg-white transition-all duration-200 shadow-sm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Ej. Juan Pérez" />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
            </div>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" value="Correo Electrónico" class="text-sm font-semibold text-slate-700 mb-2 block" />
                <x-text-input id="email" class="block w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:ring-2 focus:ring-agro-500/20 focus:border-agro-500 focus:bg-white transition-all duration-200 shadow-sm" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="tu@correo.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" value="Contraseña" class="text-sm font-semibold text-slate-700 mb-2 block" />
                <x-text-input id="password" class="block w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:ring-2 focus:ring-agro-500/20 focus:border-agro-500 focus:bg-white transition-all duration-200 shadow-sm"
                                type="password"
                                name="password"
                                required autocomplete="new-password" placeholder="Mínimo 8 caracteres" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" value="Confirmar Contraseña" class="text-sm font-semibold text-slate-700 mb-2 block" />
                <x-text-input id="password_confirmation" class="block w-full px-4 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:ring-2 focus:ring-agro-500/20 focus:border-agro-500 focus:bg-white transition-all duration-200 shadow-sm"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" placeholder="Repite tu contraseña" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full flex justify-center items-center gap-2 py-4 px-4 border border-transparent rounded-xl text-lg font-bold text-white bg-agro-600 hover:bg-agro-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-agro-500 transition-all shadow-[0_8px_20px_rgba(43,130,93,0.25)] hover:shadow-[0_8px_25px_rgba(43,130,93,0.4)] hover:-translate-y-0.5 mt-6">
                Crear Cuenta
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </button>
        </div>

        <p class="mt-10 text-center text-sm font-medium text-slate-600">
            ¿Ya tienes una cuenta?
            <a href="{{ route('login') }}" class="font-bold text-agro-600 hover:text-agro-500 transition-colors ml-1">Inicia sesión aquí</a>
        </p>
    </form>
</x-guest-layout>