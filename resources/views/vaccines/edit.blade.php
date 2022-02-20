<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Edit Vaccine') }}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto mt-16 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto">
            <form action="{{ route('vaccines.update', $vaccine->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="brand" class="block text-sm font-medium text-gray-700">Brand</label>
                        <input type="text" name="brand" id="brand" autocomplete="given-brand" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('brand') border-red-500 @enderror" value="{{ $vaccine->brand }}"/>
                        @error('brand')
                        <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="expiry_date" class="block text-sm font-medium text-gray-700">Expiry Date</label>
                        <input type="date" name="expiry_date" id="expiry_date" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('expiry_date') border-red-500 @enderror"  value="{{ $vaccine->expiry_date }}">
                        @error('expiry_date')
                        <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="manufacturer" class="block text-sm font-medium text-gray-700">Manufacturer</label>
                        <input type="text" name="manufacturer" id="manufacturer" autocomplete="given-manufacturer" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('manufacturer') border-red-500 @enderror"  value="{{ $vaccine->manufacturer }}">
                        @error('manufacturer')
                        <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                        <input type="text" name="type" id="type" autocomplete="given-type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('type') border-red-500 @enderror"  value="{{ $vaccine->type }}">
                        @error('type')
                        <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-4 sm:col-span-3">
                        <label for="number_of_doses" class="block text-sm font-medium text-gray-700">Number of Doses</label>
                        <select id="number_of_doses" name="number_of_doses" autocomplete="number_of_doses-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="1" @selected($vaccine->number_of_doses == 1)>1</option>
                            <option value="2" @selected($vaccine->number_of_doses == 2)>2</option>
                            <option value="booster" @selected($vaccine->number_of_doses == 'booster')>Booster</option>
                        </select>
                        @error('number_of_doses')
                        <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="approved_for" class="block text-sm font-medium text-gray-700">Approved for</label>
                        <input type="text" name="approved_for" id="approved_for" autocomplete="given-approved_for" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('approved_for') border-red-500 @enderror"  value="{{ $vaccine->approved_for }}">
                        @error('approved_for')
                        <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <x-button type="submit" class="my-8 bg-teal-700 hover:bg-teal-500">Update</x-button>
            </form>
        </div>
    </div>
</x-app-layout>
