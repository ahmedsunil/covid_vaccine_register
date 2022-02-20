<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between">
            <h2 class="font-semibold text-xl text-white leading-tight">
                Vaccination Details
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto mt-8 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto">
           {{ $vaccination->patient->name }} , {{ $vaccination->vaccine->brand }} , {{ $vaccination->staff->name }}
        </div>
    </div>
</x-app-layout>
