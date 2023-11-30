<x-guest-layout>
    <div class="mb-4 text-sm text-black-600 dark:text-black-400">
        {{ __('Ben je je wachtwoord vergeten? Geen probleem. Laat ons gewoon weten welk e-mailadres je hebt gebruikt, en we sturen je een link voor het opnieuw instellen van het wachtwoord. Hiermee kun je een nieuw wachtwoord kiezen.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Verstuur') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
