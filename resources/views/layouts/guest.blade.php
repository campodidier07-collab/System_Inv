<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'AgroGestión') }} - Autenticación</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|outfit:500,600,700,800" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Fallback/Additional Tailwind Config -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['Inter', 'sans-serif'],
                            heading: ['Outfit', 'sans-serif'],
                        },
                        colors: {
                            agro: {
                                50: '#f2fbf5',
                                100: '#e1f6e8',
                                200: '#c4ebd4',
                                300: '#96d8b6',
                                400: '#60bc90',
                                500: '#3ba376',
                                600: '#2b825d',
                                700: '#25684d',
                                800: '#20533f',
                                900: '#1b4435',
                                950: '#0e261d',
                            }
                        }
                    }
                }
            }
        </script>
        <style type="text/tailwindcss">
            @layer utilities {
                .hero-pattern {
                    background-color: #1b4435;
                    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%232b825d' fill-opacity='0.2'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
                }
            }
            body { font-family: 'Inter', sans-serif; }
            h1, h2, h3, h4, h5, h6 { font-family: 'Outfit', sans-serif; }
        </style>
    </head>
    <body class="font-sans antialiased text-slate-800 bg-white selection:bg-agro-500 selection:text-white">
        <div class="flex min-h-screen">
            <!-- Left Side - Image & Brand (Hidden on mobile) -->
            <div class="hidden lg:flex lg:w-1/2 relative bg-agro-900 hero-pattern items-center justify-center overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-b from-agro-950/80 via-agro-900/60 to-agro-900/90 z-10"></div>
                <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Agricultura" class="absolute inset-0 w-full h-full object-cover opacity-40 mix-blend-overlay">
                
                <!-- Floating Elements -->
                <div class="absolute -top-40 -right-40 w-96 h-96 bg-agro-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob z-0"></div>
                <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-agro-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000 z-0"></div>

                <div class="relative z-20 flex flex-col items-start justify-center p-16 max-w-2xl h-full">
                    <a href="/" class="flex items-center gap-3 group mb-12">
                        <svg class="w-10 h-10 text-agro-400 group-hover:text-agro-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                        <span class="font-heading font-bold text-3xl text-white tracking-tight">Agro<span class="text-agro-400">Gestión</span></span>
                    </a>

                    <h1 class="text-4xl lg:text-5xl font-extrabold text-white leading-tight font-heading mb-6">
                        El control total de tus <span class="text-transparent bg-clip-text bg-gradient-to-r from-agro-300 to-agro-500">insumos y ventas</span>
                    </h1>
                    <p class="text-lg text-slate-300 leading-relaxed mb-12">
                        Optimiza tu inventario de agroquímicos, semillas y fertilizantes. Gestiona tus ventas y analiza el rendimiento de tu negocio con la plataforma más intuitiva.
                    </p>

                    <!-- Trust indicators -->
                    <div class="flex items-center gap-4 p-4 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md">
                        <div class="flex -space-x-3">
                            <img class="w-10 h-10 rounded-full border-2 border-agro-900 object-cover" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?fit=crop&w=100&h=100" alt="User">
                            <img class="w-10 h-10 rounded-full border-2 border-agro-900 object-cover" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?fit=crop&w=100&h=100" alt="User">
                            <img class="w-10 h-10 rounded-full border-2 border-agro-900 object-cover" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?fit=crop&w=100&h=100" alt="User">
                            <div class="w-10 h-10 rounded-full border-2 border-agro-900 bg-agro-800 flex items-center justify-center text-xs font-bold text-white">+5k</div>
                        </div>
                        <div class="text-sm text-slate-300">
                            <span class="text-white font-semibold block">Profesionales agrícolas</span>
                            confían en AgroGestión
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Auth Form -->
            <div class="w-full lg:w-1/2 flex flex-col justify-center items-center bg-white relative">
                <!-- Mobile Logo -->
                <div class="lg:hidden absolute top-8 left-8 flex items-center gap-2 group">
                    <svg class="w-8 h-8 text-agro-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    <span class="font-heading font-bold text-2xl text-slate-900 tracking-tight">Agro<span class="text-agro-600">Gestión</span></span>
                </div>

                <div class="w-full max-w-md px-8 py-20 lg:px-12 w-full mx-auto">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
