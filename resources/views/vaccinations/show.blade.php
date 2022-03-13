<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between">
            <h2 class="font-semibold text-xl text-white leading-tight">
                Vaccination Details
            </h2>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto mt-10 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto">
                <div>
                    <h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Vaccination</h2>
                    <div class="grid grid-cols-3 gap-1 mx-2 p-2">
                        <div>
                            <h4 class="text-gray-800 font-semibold text-xs">Brand</h4>
                            <span class="text-gray-600"><a href="{{ route('vaccines.show', $vaccination->vaccine->id) }}">{{ $vaccination->vaccine->brand }}</a></span>
                        </div>
                        <div>
                            <h4 class="text-gray-800 font-semibold text-xs">Vaccinated By</h4>
                            <span class="text-gray-600"><a href="{{ route('staff.show', $vaccination->staff->id) }}">{{ $vaccination->staff->name }}</a></span>
                        </div>
                        <div>
                            <h4 class="text-gray-800 font-semibold text-xs">Date of Vaccination</h4>
                            <span class="text-gray-600">{{ $vaccination->date_for_vaccination }}</a></span>
                        </div>
                        <div class="pt-6">
                            <h4 class="text-gray-800 font-semibold text-xs">Dose</h4>
                            <span class="text-gray-600">{{ $vaccination->dose }}</a></span>
                        </div>
                        <div class="col-span-2 pt-6">
                            <h4 class="text-gray-800 font-semibold text-xs">Remarks</h4>
                            <span class="text-gray-600">{{ $vaccination->remarks }}</a></span>
                        </div>
                    </div>
                </div>
            <div class="pt-8">
                <h2 class="text-white px-4 py-2 bg-teal-600 my-4 rounded-md">Patient</h2>
                <div class="grid grid-cols-3 gap-1 mx-2  p-2"">
                    <div>
                        <h4 class="text-gray-800 font-semibold text-xs">Name</h4>
                        <span class="text-gray-600"><a href="{{ route('patients.show', $vaccination->patient->id) }}">{{ $vaccination->patient->name }}</a></span>
                    </div>
                    <div>
                        <h4 class="text-gray-800 font-semibold text-xs">Government ID</h4>
                        <span class="text-gray-600">{{ $vaccination->patient->government_id }}</span>
                    </div>
                    <div>
                        <h4 class="text-gray-800 font-semibold text-xs">Case ID</h4>
                        <span class="text-gray-600">{{ $vaccination->patient->case_id }}</a></span>
                    </div>
                    <div class="pt-6">
                        <h4 class="text-gray-800 font-semibold text-xs">Current Address</h4>
                        <span class="text-gray-600">{{ $vaccination->patient->current_address }}</a></span>
                    </div>
                    <div class="pt-6">
                        <h4 class="text-gray-800 font-semibold text-xs">Contact</h4>
                        <span class="text-gray-600">{{ $vaccination->patient->contact }}</a></span>
                    </div>
                    <div class="pt-6">
                        <h4 class="text-gray-800 font-semibold text-xs">Gender</h4>
                        <span class="text-gray-600">{{ ucfirst($vaccination->patient->sex) }}</a></span>
                    </div>
                </div>
            </div>
            </div>
        </div>
</x-app-layout>
