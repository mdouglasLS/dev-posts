<x-app-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <x-section>
        <x-auth-card class="w-75 mx-auto">
            <x-slot name="title">
                <p class="text-center">Bem vindo à comunidade Dev!</p>
            </x-slot>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-floating">
                    <x-input id="email" class="" type="email" name="email" placeholder="E-mail" :value="old('email')" required autofocus />
                    <x-label for="email" :value="__('E-mail')" />
                </div>

                <!-- Password -->
                <div class="form-floating mt-4">
                    <x-input id="password" class=""
                             type="password"
                             name="password"
                    required autocomplete="current-password" placeholder="Senha" />
                    <x-label for="password" :value="__('Senha')" />
                </div>

                <!-- Remember Me -->
                <div class="block my-3">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar-me') }}</span>
                    </label>
                </div>

                <x-button class="w-100">
                    {{ __('Entrar') }}
                </x-button>

                <div class="text-center mt-3">
                    @if (Route::has('password.request'))
                        <a class="text-light fw-light" href="{{ route('password.request') }}">
                            {{ __('Esqueceu sua senha?') }}
                        </a>
                    @endif

                </div>
            </form>
        </x-auth-card>
    </x-section>

</x-app-layout>
