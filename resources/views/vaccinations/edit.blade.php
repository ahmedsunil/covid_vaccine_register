<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Edit Patient') }}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto mt-16 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto">
            <form action="{{ route('patients.update', $patient->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('name') border-red-500 @enderror" placeholder="eg: Ahmed Shaan" value="{{  $patient->name  }}">
                        @error('name')
                            <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="government_id" class="block text-sm font-medium text-gray-700">Government ID</label>
                        <input type="text" name="government_id" id="government_id" autocomplete="given-government_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('government_id') border-red-500 @enderror" placeholder="eg: A000000 / Passport / WorkVisa" value="{{ $patient->government_id }}">
                        @error('government_id')
                        <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror

                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="case_id" class="block text-sm font-medium text-gray-700">Case ID</label>
                        <input type="text" name="case_id" id="case_id" autocomplete="given-case_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('case_id') border-red-500 @enderror" placeholder="eg: 00091111" value="{{ $patient->case_id }}">
                        @error('case_id')
                        <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                        <input type="date" name="date_of_birth" id="date_of_birth" autocomplete="given-date_of_birth" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('date_of_birth') border-red-500 @enderror" value="{{ $patient->date_of_birth }}">
                        @error('date_of_birth')
                        <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>
                        <input type="number" name="contact" id="contact" autocomplete="given-contact" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('contact') border-red-500 @enderror" placeholder="eg: 7626626" value="{{$patient->contact }}">
                        @error('contact')
                        <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="nationality" class="block text-sm font-medium text-gray-700">Nationality</label>
                        <input type="text" name="nationality" id="nationality" autocomplete="given-nationality" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('nationality') border-red-500 @enderror" placeholder="Maldivian" value="{{ $patient->nationality }}">
                        @error('nationality')
                        <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="permanent_address" class="block text-sm font-medium text-gray-700">Permanent Address</label>
                        <input type="text" name="permanent_address" id="permanent_address" autocomplete="given-permanent_address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('permanent_address') border-red-500 @enderror" placeholder="Laravel / R.Hulhudhuffaaru" value="{{ $patient->permanent_address }}">
                        @error('permanent_address')
                        <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="current_address" class="block text-sm font-medium text-gray-700">Current Address</label>
                        <input type="text" name="current_address" id="current_address" autocomplete="given-current_address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md @error('current_address') border-red-500 @enderror" placeholder="Marine Villa / R.Hulhudhuffaaru" value="{{ $patient->current_address }}">
                        @error('current_address')
                        <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                        <div class="py-2">
                            <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="same_as_permanent_address" onchange="copyTextValue(this);">
                            <label class="form-check-label inline-block text-gray-800 text-sm" for="flexCheckDefault">
                                Same as Permanent Address
                            </label>
                        </div>
                    </div>

                </div>
                <x-button type="submit" class="my-8 bg-teal-700 hover:bg-teal-500">Update</x-button>
            </form>
        </div>
    </div>
</x-app-layout>
