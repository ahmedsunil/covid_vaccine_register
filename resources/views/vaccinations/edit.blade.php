<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between">
            <h2 class="font-semibold text-xl text-white leading-tight">
                {{ __('Edit Vaccination') }}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto mt-16 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto">
            <form action="{{ route('vaccinations.update', $vaccination->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-3 sm:col-span-3">
                        <label for="patient_id" class="block text-sm font-medium text-gray-700">Patient</label>
                        <select id="patient_id" name="patient_id" autocomplete="patient_id-name" class="mt-1 block w-full h-10 py-2 px-3 border border-gray-200 bg-white rounded-md shadow-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach($viewModel->patients() as $patient)
                                <option value="{{ $patient->id }}" @selected($patient->id == $vaccination->patient_id)> {{ $patient->government_id }} - {{ $patient->name }} </option>
                            @endforeach
                        </select>
                        @error('patient_id')
                            <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-4 sm:col-span-3">
                        <label for="vaccine_id" class="block text-sm font-medium text-gray-700">Vaccine</label>
                        <select id="vaccine_id" name="vaccine_id" autocomplete="vaccine_id-name" class="mt-1 block w-full h-10 py-2 px-3 border border-gray-200 bg-white rounded-md shadow-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach($viewModel->vaccines() as $vaccine)
                                <option value="{{ $vaccine->id }}" @selected($vaccine->id == $vaccination->vaccine_id) > {{ $vaccine->brand }}</option>
                            @endforeach
                        </select>
                        @error('vaccine_id')
                        <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-4 sm:col-span-3">
                        <label for="staff_id" class="block text-sm font-medium text-gray-700">Vaccinated By</label>
                        <select id="staff_id" name="staff_id" autocomplete="staff_id-name" class="mt-1 block w-full h-10 py-2 px-3 border border-gray-200 bg-white rounded-md shadow-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach($viewModel->staffs() as $staff)
                                <option value="{{ $staff->id }}" @selected($staff->id == $vaccination->staff_id)>{{ $staff->name }}</option>
                            @endforeach
                        </select>
                        @error('staff_id')
                            <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="date_for_vaccination" class="block text-sm font-medium text-gray-700">Date of Vaccination</label>
                        <input type="date" name="date_for_vaccination" id="date_for_vaccination" autocomplete="given-date_for_vaccination" class="mt-1 block w-full h-10 py-2 px-3 border border-gray-200 bg-white rounded-md shadow-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('date_for_vaccination') border-red-500 @enderror" value="{{ $vaccination->formatted_date_for_vaccination }}">
                        @error('date_for_vaccination')
                            <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-4 sm:col-span-3">
                        <label for="dose" class="block text-sm font-medium text-gray-700">Dose</label>
                        <select id="dose" name="dose" autocomplete="dose-name" class="mt-1 block w-full h-10 py-2 px-3 border border-gray-200 bg-white rounded-md shadow-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach($viewModel->doses() as $dose)
                                <option value="{{ $dose }}" @selected($vaccination->dose == $dose)> {{ ucfirst($dose) }} </option>
                            @endforeach
{{--                                    <option value="first"  @selected($vaccination->dose == 'first')> First </option>--}}
{{--                                    <option value="second"  @selected($vaccination->dose == 'second')> Second </option>--}}
{{--                                    <option value="booster"  @selected($vaccination->dose == 'booster')> Booster </option>--}}
                            </select>
                        @error('dose')
                            <div class="alert alert-dangser text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="remarks" class="block text-sm font-medium text-gray-700">Remarks</label>
                        <input type="text" name="remarks" id="remarks" autocomplete="given-remarks" class="mt-1 block w-full h-10 py-2 px-3 border border-gray-200 bg-white rounded-md shadow-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('remarks') border-red-500 @enderror" placeholder="eg: Allergies etc" value="{{ $vaccination->remarks }}">
                        @error('remarks')
                            <div class="alert alert-danger text-sm text-red-800 p-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <x-button type="submit" class="my-8 bg-teal-700 hover:bg-teal-500">Save</x-button>
            </form>
        </div>
    </div>
</x-app-layout>
