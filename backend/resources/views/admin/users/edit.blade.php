<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Usuario') }}
        </h2>
    </x-slot>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <style>
        /* Custom Input Styles to match Login */
        .form-control-custom {
            border: 1px solid #e0e0e0;
            padding: 0.75rem 1rem;
            border-radius: 0.375rem;
            transition: all 0.3s ease;
            width: 100%;
        }
        .form-control-custom:focus {
            border-color: #3f51b5;
            box-shadow: 0 0 0 3px rgba(63, 81, 181, 0.1);
            outline: none;
        }
        
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
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="card-custom overflow-hidden">
                <div class="p-8 text-gray-900">
                    
                    <div class="mb-6 flex items-center gap-3 border-b pb-4 border-gray-100">
                        <div class="p-3 bg-indigo-50 rounded-full text-indigo-600">
                            <i class="fas fa-user-edit text-xl"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800">Editar Información de Usuario</h3>
                            <p class="text-sm text-gray-500">Actualice los datos del usuario seleccionado.</p>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('admin.users.update', $user) }}">
                        @csrf
                        @method('PUT')

                        <!-- Name -->
                        <div class="mb-5">
                            <label class="block text-gray-600 text-sm font-medium mb-2" for="name">
                                Nombre
                            </label>
                            <input id="name" class="form-control-custom" type="text" name="name" :value="old('name', $user->name)" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mb-5">
                            <label class="block text-gray-600 text-sm font-medium mb-2" for="email">
                                Correo Electrónico
                            </label>
                            <input id="email" class="form-control-custom" type="email" name="email" :value="old('email', $user->email)" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Role -->
                        <div class="mb-5">
                            <label class="block text-gray-600 text-sm font-medium mb-2" for="role">
                                Rol
                            </label>
                            <select id="role" name="role" class="form-control-custom">
                                <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>Usuario (User)</option>
                                <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Administrador (Admin)</option>
                            </select>
                            <x-input-error :messages="$errors->get('role')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mb-5">
                            <label class="block text-gray-600 text-sm font-medium mb-2" for="password">
                                Contraseña (Opcional)
                            </label>
                            <input id="password" class="form-control-custom" type="password" name="password" autocomplete="new-password" placeholder="Dejar en blanco para mantener la actual" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-8">
                            <label class="block text-gray-600 text-sm font-medium mb-2" for="password_confirmation">
                                Confirmar Contraseña
                            </label>
                            <input id="password_confirmation" class="form-control-custom" type="password" name="password_confirmation" placeholder="••••••••" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end gap-4">
                            <a href="{{ route('admin.users.index') }}" class="text-sm font-medium text-gray-600 hover:text-gray-900 transition-colors">
                                Cancelar
                            </a>
                            <button type="submit" class="btn-primary-custom">
                                <i class="fas fa-sync-alt mr-2"></i> Actualizar Usuario
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
