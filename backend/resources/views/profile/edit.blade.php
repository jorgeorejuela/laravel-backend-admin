<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perfil') }}
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
        .btn-danger-custom {
            background-color: #ef4444;
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
        .btn-danger-custom:hover {
            background-color: #dc2626;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.3);
        }
        .btn-secondary-custom {
            background-color: #fff;
            border: 1px solid #e5e7eb;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 0.875rem;
            color: #374151;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            cursor: pointer;
            transition: all 0.2s ease;
            display: inline-block;
            text-align: center;
        }
        .btn-secondary-custom:hover {
            background-color: #f9fafb;
            border-color: #d1d5db;
        }
        .card-custom {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 0.75rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="card-custom p-4 sm:p-8">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="card-custom p-4 sm:p-8">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="card-custom p-4 sm:p-8">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
