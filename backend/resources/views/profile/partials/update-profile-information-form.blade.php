<section>
    <header>
        <h2 class="text-lg font-bold text-gray-800">
            {{ __('Información del Perfil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-500">
            {{ __("Actualiza la información de perfil y la dirección de correo electrónico de tu cuenta.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <label class="block text-gray-600 text-sm font-medium mb-2" for="name">
                {{ __('Nombre') }}
            </label>
            <input id="name" name="name" type="text" class="form-control-custom" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <label class="block text-gray-600 text-sm font-medium mb-2" for="email">
                {{ __('Correo Electrónico') }}
            </label>
            <input id="email" name="email" type="email" class="form-control-custom" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Tu dirección de correo electrónico no está verificada.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Haz clic aquí para re-enviar el correo de verificación.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('Se ha enviado un nuevo enlace de verificación a tu dirección de correo electrónico.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn-primary-custom">
                {{ __('Guardar') }}
            </button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Guardado.') }}</p>
            @endif
        </div>
    </form>
</section>
