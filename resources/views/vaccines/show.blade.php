<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ $vaccine->brand }}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto mt-8 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto">
            <div class="grid grid-cols-2 gap-4 text-center p-6">
                <div><h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Brand</h2> <span class="text-gray-600">{{ $vaccine->brand }}</span> </div>
                <div><h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Manufacturer</h2> <span class="text-gray-600">{{ $vaccine->manufacturer }}</span> </div>
                <div><h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Expiry Date</h2> <span class="text-gray-600"> {{ $vaccine->expiry_date }}</span> </div>
                <div><h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Type</h2><span class="text-gray-600"> {{ $vaccine->type }}</span> </div>
                <div><h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Number of Doses</h2> <span class="text-gray-600"> {{ $vaccine->number_of_doses }}</span> </div>
                <div><h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Approved for</h2> <span class="text-gray-600"> {{ $vaccine->approved_for }} </span></div>
            </div>
        </div>
    </div>
</x-app-layout>
