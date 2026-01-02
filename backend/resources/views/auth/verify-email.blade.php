<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verificar Email - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .background-radial-gradient {
            background-color: #1a237e; /* Deep Indigo/Blue base */
            background-image: radial-gradient(650px circle at 0% 0%,
                hsl(218, 41%, 35%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
                hsl(218, 41%, 45%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%);
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#6200ea, #b388ff); /* Vivid Purple */
            overflow: hidden;
            opacity: 0.8;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#6200ea, #b388ff); /* Vivid Purple */
            overflow: hidden;
            opacity: 0.8;
        }

        .bg-glass {
            background-color: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: saturate(200%) blur(25px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        
        .btn-primary-custom {
            background-color: #396afc; /* Royal Blue */
            background-image: linear-gradient(to right, #2948ff, #396afc);
            border: none;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 0.875rem;
        }
        .btn-primary-custom:hover {
            background-color: #2948ff;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(41, 72, 255, 0.3);
        }
    </style>
</head>
<body class="antialiased font-sans text-gray-900">
    <section class="background-radial-gradient overflow-hidden min-h-screen flex items-center relative">
        <div class="container mx-auto px-6 py-12 h-full">
            <div class="flex flex-wrap items-center justify-center lg:justify-between h-full g-6 text-center lg:text-left">
                
                <!-- Left Column: Text & Context -->
                <div class="w-full lg:w-1/2 mb-12 lg:mb-0 relative z-10 text-white">
                    <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight mb-6 drop-shadow-lg leading-tight">
                        Verifica tu <br />
                        <span style="color: #b388ff">Correo</span>
                    </h1>
                    <p class="text-lg opacity-80 mb-8 leading-relaxed max-w-lg mx-auto lg:mx-0 font-light">
                        Gracias por registrarte. Antes de comenzar, verifica tu dirección de correo electrónico haciendo clic en el enlace que te acabamos de enviar.
                    </p>
                    
                    <!-- Feature Icons -->
                    <div class="flex justify-center lg:justify-start gap-6 opacity-70">
                         <div class="flex flex-col items-center">
                            <div class="p-3 bg-white/10 rounded-full mb-2">
                                <i class="fas fa-envelope-open-text text-2xl"></i>
                            </div>
                            <span class="text-xs">Verificación</span>
                         </div>
                         <div class="flex flex-col items-center">
                            <div class="p-3 bg-white/10 rounded-full mb-2">
                                <i class="fas fa-check-circle text-2xl"></i>
                            </div>
                            <span class="text-xs">Validación</span>
                         </div>
                    </div>
                </div>

                <!-- Right Column: Form -->
                <div class="w-full lg:w-5/12 relative">
                    <!-- Decorative Shapes -->
                    <div id="radius-shape-1" class="absolute rounded-full shadow-2xl animate-pulse"></div>
                    <div id="radius-shape-2" class="absolute shadow-2xl"></div>

                    <div class="relative bg-glass rounded-xl shadow-2xl overflow-hidden z-10">
                        <div class="p-8 md:p-10">
                            
                            @if (session('status') == 'verification-link-sent')
                                <div class="mb-4 font-medium text-sm text-green-600 bg-green-50 p-4 rounded-lg border border-green-200">
                                    {{ __('Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionaste durante el registro.') }}
                                </div>
                            @endif

                            <div class="flex flex-col gap-4">
                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf
                                    <button type="submit" class="w-full btn-primary-custom text-white py-3 px-4 rounded shadow-md transition duration-200">
                                        Reenviar Email de Verificación
                                    </button>
                                </form>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-sm text-gray-600 hover:text-gray-900 underline decoration-2 decoration-indigo-500 hover:decoration-indigo-700 transition-colors">
                                        Cerrar Sesión
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
