<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('New Staff') }}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto mt-16 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto">
            <form action="{{ route('staff.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('name') border-red-500 @enderror" placeholder="eg: Ahmed Shaan" value="{{ old('name') }}">
                        @error('name')
                            <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="government_id" class="block text-sm font-medium text-gray-700">Government ID</label>
                        <input type="text" name="government_id" id="government_id" autocomplete="given-government_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('expiry_date') border-red-500 @enderror" placeholder="eg: A000000" value="{{ old('government_id') }}">
                        @error('government_id')
                            <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="record_card_number" class="block text-sm font-medium text-gray-700">Record Card Number</label>
                        <input type="text" name="record_card_number" id="record_card_number" autocomplete="given-record_card_number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('record_card_number') border-red-500 @enderror" placeholder="eg: 00091111" value="{{ old('record_card_number') }}">
                        @error('record_card_number')
                            <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-4 sm:col-span-3">
                        <label for="designation" class="block text-sm font-medium text-gray-700">Designation</label>
                        <select id="designation" name="designation" autocomplete="designation-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="registered_nurse" {{ old('designation') == 'registered_nurse' ? 'selected' : '' }}>Registered Nurse</option>
                            <option value="doctor" {{ old('designation') == 'doctor' ? 'selected' : '' }}>Doctor</option>
                        </select>
                        @error('designation')
                            <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <x-button type="submit" class="my-8 bg-teal-700 hover:bg-teal-500">Save</x-button>
            </form>
        </div>
    </div>
</x-app-layout>
