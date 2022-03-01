<x-app-layout>
    <x-slot name="header">
            <div class="flex flex-row-reverse">
                <x-link-button link="{{ route('patients.create') }}" class="px-5 py-2 text-sm bg-teal-800 text-white rounded-md hover:bg-teal-700">Add</x-link-button>
            </div>
    </x-slot>
        <!-- Validation Errors -->
    <div class="py-8 md:pb-12 mx-4 md:mx-10">
        <div class="mx-auto py-5 sm:px-6 lg:px-8">
            <div class="container mx-auto px-40">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-label for="role" :value="__('Role')" />
                <x-select name="role">
                    <option value="admin">Administrator</option>
                    <option value="viewer">Viewer</option>
                </x-select>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4 bg-green-700 focus:bg-teal-700">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
            </div></div></div>
</x-app-layout>
