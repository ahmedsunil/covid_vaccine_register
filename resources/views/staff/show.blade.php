<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between">
            <h2 class="font-semibold text-xl text-white leading-tight">
                Profile
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto mt-8 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto">
            <div class="grid grid-cols-2 gap-4 text-center p-6">
                <div><h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Name</h2> <span class="text-gray-600">{{ $staff->name }}</span> </div>
                <div><h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Government ID</h2> <span class="text-gray-600">{{ $staff->government_id }}</span> </div>
                <div><h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Record Card Number</h2> <span class="text-gray-600"> {{ $staff->record_card_number }}</span> </div>
                <div><h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Designation</h2><span class="text-gray-600"> {{ ucwords(str_replace('_', ' ' , $staff->designation)) }}</span> </div>
            </div>
        </div>
    </div>
</x-app-layout>
