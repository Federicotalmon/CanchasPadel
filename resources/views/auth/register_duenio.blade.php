<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('registerduenio') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="nombre" :value="__('Nombre')" />
                <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Telefono -->
            <div class="mt-4">
                <x-label for="telefono" :value="__('Telefono')" />

                <x-input id="telefono" class="block mt-1 w-full" type="number" name="telefono" :value="old('telefono')" required />
            </div>

            <!-- Username -->
            <div class="mt-4">
                <x-label for="username" :value="__('Usuario')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required />
            </div>


            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Contraseña')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirmar contraseña')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            
            <!-- Name -->
            <div>
                <x-label for="nombre_local" :value="__('Nombre del Local')" />
                <x-input id="nombre_local" class="block mt-1 w-full" type="text" name="nombre_local" :value="old('nombre_local')" required  />
            </div>

            <!-- Telefono -->
            <div class="mt-4">
                <x-label for="telefono_local" :value="__('Telefono del local')" />
                <x-input id="telefono_local" class="block mt-1 w-full" type="number" name="telefono_local" :value="old('telefono_local')" required />
            </div>

            <!-- Direccion -->
            <div class="mt-4">
                <x-label for="direccion" :value="__('Direccion')" />

                <x-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" required />
            </div>
                <x-button class="ml-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>