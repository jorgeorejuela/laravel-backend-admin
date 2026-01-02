<section class="space-y-6">
    <header>
        <h2 class="text-lg font-bold text-gray-800">
            {{ __('Eliminar Cuenta') }}
        </h2>

        <p class="mt-1 text-sm text-gray-500">
            {{ __('Una vez que se elimine tu cuenta, todos sus recursos y datos se eliminarán permanentemente. Antes de eliminar tu cuenta, por favor descarga cualquier dato o información que desees conservar.') }}
        </p>
    </header>

    <button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="btn-danger-custom"
    >
        {{ __('Eliminar Cuenta') }}
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-bold text-gray-800">
                {{ __('¿Estás seguro de que quieres eliminar tu cuenta?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                {{ __('Una vez que se elimine tu cuenta, todos sus recursos y datos se eliminarán permanentemente. Por favor ingresa tu contraseña para confirmar que deseas eliminar tu cuenta de forma permanente.') }}
            </p>

            <div class="mt-6">
                <label for="password" class="sr-only">{{ __('Contraseña') }}</label>

                <input
                    id="password"
                    name="password"
                    type="password"
                    class="form-control-custom w-3/4"
                    placeholder="{{ __('Contraseña') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end gap-3">
                <button type="button" class="btn-secondary-custom" x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </button>

                <button type="submit" class="btn-danger-custom">
                    {{ __('Eliminar Cuenta') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>
