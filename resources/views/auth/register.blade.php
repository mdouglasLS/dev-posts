<x-app-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <x-section>
        <x-auth-card class="w-75 mx-auto">
            <x-slot name="title">
                <p class="text-center">Junte-se à nossa comunidade Dev!</p>
            </x-slot>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- First Name -->
                <div class="form-floating">
                    <x-input id="firstName" placeholder="Nome" type="text" name="firstName" :value="old('firstName')" required autofocus />
                    <x-label for="firstName" :value="__('Nome')" />
                </div>

                <!-- Last Name -->
                <div class="form-floating mt-4">
                    <x-input id="lastName" placeholder="Sobrenome" type="text" name="lastName" :value="old('lastName')" required />
                    <x-label for="lastName" :value="__('Sobrenome')" />
                </div>

                <!-- Username -->
                <div class="form-floating mt-4">
                    <x-input id="username" placeholder="@username" type="text" name="username" :value="old('username')" required />
                    <x-label for="username" :value="__('@username')" />
                </div>

                <!-- Email Address -->
                <div class="form-floating mt-4">
                    <x-input id="email" placeholder="E-mail" type="email" name="email" :value="old('email')" required />
                    <x-label for="email" :value="__('Email')" />
                </div>

                <!-- Password -->
                <div class="form-floating mt-4">
                    <x-input id="password" placeholder="Senha"
                             type="password"
                             name="password"
                             required autocomplete="new-password" />
                    <x-label for="password" :value="__('Password')" />
                </div>

                <!-- Confirm Password -->
                <div class="form-floating mt-4">
                    <x-input id="password_confirmation" placeholder="Confirmar senha"
                             type="password"
                             name="password_confirmation" required />
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />
                </div>

                <x-button class="mt-4 py-2 w-100">
                    {{ __('Cadastrar') }}
                </x-button>

            </form>
        </x-auth-card>
    </x-section>

</x-app-layout>
