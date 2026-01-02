<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de Administración') }}
        </h2>
    </x-slot>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
        .btn-primary-custom {
            background-color: #396afc;
            background-image: linear-gradient(to right, #2948ff, #396afc);
            border: none;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 0.875rem;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            cursor: pointer;
            transition: all 0.2s ease;
            display: inline-block;
            text-align: center;
            text-decoration: none;
        }
        .btn-primary-custom:hover {
            background-color: #2948ff;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(41, 72, 255, 0.3);
        }
        .card-custom {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 0.75rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="card-custom overflow-hidden">
                <div class="p-8 text-gray-900">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="p-3 bg-indigo-50 rounded-full text-indigo-600">
                            <i class="fas fa-tachometer-alt text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">¡Bienvenido, Administrador!</h3>
                            <p class="text-gray-500">Tienes acceso completo para gestionar usuarios y recursos del sistema.</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                        <!-- Card 1: Users -->
                        <div class="bg-gradient-to-br from-indigo-50 to-white p-6 rounded-xl border border-indigo-100 hover:shadow-lg transition-shadow">
                            <div class="flex justify-between items-start mb-4">
                                <div class="p-3 bg-blue-100 text-blue-600 rounded-lg">
                                    <i class="fas fa-users text-xl"></i>
                                </div>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Usuarios</h4>
                            <p class="text-sm text-gray-500 mb-4">Gestiona, crea, edita y elimina usuarios del sistema.</p>
                            <a href="{{ route('admin.users.index') }}" class="text-indigo-600 font-semibold hover:text-indigo-800 flex items-center gap-2">
                                Ir a Usuarios <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                        <!-- Card 2: Security -->
                        <div class="bg-gradient-to-br from-purple-50 to-white p-6 rounded-xl border border-purple-100 hover:shadow-lg transition-shadow">
                            <div class="flex justify-between items-start mb-4">
                                <div class="p-3 bg-purple-100 text-purple-600 rounded-lg">
                                    <i class="fas fa-shield-alt text-xl"></i>
                                </div>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Seguridad</h4>
                            <p class="text-sm text-gray-500 mb-4">Revisa registros de actividad y configuraciones.</p>
                            <span class="text-gray-400 text-sm italic">Próximamente</span>
                        </div>

                        <!-- Card 3: Reports -->
                        <div class="bg-gradient-to-br from-green-50 to-white p-6 rounded-xl border border-green-100 hover:shadow-lg transition-shadow">
                            <div class="flex justify-between items-start mb-4">
                                <div class="p-3 bg-green-100 text-green-600 rounded-lg">
                                    <i class="fas fa-chart-line text-xl"></i>
                                </div>
                            </div>
                            <h4 class="text-lg font-semibold text-gray-800 mb-2">Reportes</h4>
                            <p class="text-sm text-gray-500 mb-4">Visualiza estadísticas y métricas del sistema.</p>
                            <span class="text-gray-400 text-sm italic">Próximamente</span>
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-100">
                        <a href="{{ route('admin.users.index') }}" class="btn-primary-custom">
                            <i class="fas fa-users-cog mr-2"></i> Gestionar Usuarios
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
