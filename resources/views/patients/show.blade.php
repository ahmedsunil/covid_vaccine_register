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
            <div class="grid grid-cols-3 gap-6 text-center p-6">
                <div><h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Name</h2> <span class="text-gray-600">{{ $patient->name }}</span> </div>
                <div><h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Government ID</h2> <span class="text-gray-600">{{ $patient->government_id }}</span> </div>
                <div><h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Case ID</h2> <span class="text-gray-600">{{ $patient->case_id }}</span> </div>
                <div><h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Date of Birth</h2> <span class="text-gray-600">{{ $patient->date_of_birth }}</span> </div>
                <div><h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Current Address</h2> <span class="text-gray-600">{{ $patient->current_address }}</span> </div>
                <div><h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Permanent Address</h2> <span class="text-gray-600">{{ $patient->permanent_address }}</span> </div>
                <div><h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Contact</h2> <span class="text-gray-600">{{ $patient->contact }}</span> </div>
                <div><h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Nationality</h2> <span class="text-gray-600">{{ $patient->nationality }}</span> </div>

            </div>
        </div>
    </div>
</x-app-layout>
