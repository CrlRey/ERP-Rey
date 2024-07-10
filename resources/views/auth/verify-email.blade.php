<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('¡Gracias por registrarte! Antes de comenzar, Debes verificar tu dirección de correo electrónico haciendo clic en el enlace que le acabamos de enviar por correo electrónico. Si no recibió el correo electrónico, se enviará otro. ') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Hemos enviado un email de verificación a la cuenta que colocaste  en el registro') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Enviar email de confirmación') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Cerrar sesión') }}
            </button>
        </form>
    </div>
</x-guest-layout>
