<x-app-layout>
    <x-slot name="header">
       <div class="flex flex-row items-center">
           <h2 class="font-semibold text-xl text-white leading-tight">
               {{ __('Overview') }}
           </h2>
           <form action="{{ route('dashboard') }}" method="GET">
               <div class="flex row-auto">
                   <x-input id="search" class="ml-8 mr-4 block text-sm w-full" placeholder="Search" type="date" name="date_search" value="{{ request()->get('date_search')}}" autofocus />
                   <x-button class="mx-2 bg-teal-800 hover:bg-teal-700 text-sm font-semibold">
                       Filter
                   </x-button>
                   <x-link-button class="bg-teal-800 hover:bg-teal-700 text-sm" type="light" link="{{ route('dashboard') }}">
                       Clear
                   </x-link-button>
               </div>
           </form>
       </div>
    </x-slot>
    <div class="md:pt-4 md:pb-4 mx-4 md:mx-10">
        <h1 class="text-gray-500 font-semibold tracking-wider text-md mb-2">Total Records @if ($vaccinated_date) for <span class="text-teal-800 underline">{{ $vaccinated_date }}</span> @endif</h1>
        <div class="bg-gray-100 rounded-lg w-full h-auto py-4 flex flex-row justify-between divide-x divide-solid divide-gray-400  border border-gray-300">
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Vaccinated</label>
                <label class="text-green-800 text-4xl font-bold">{{ $total_vaccinated }}</label>
            </div>
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">First Dose</label>
                <label class="text-green-800 text-4xl font-bold">{{ $first_dose }}</label>
                <div class="absolute {{ $first_dose_percentage <= 94.5 ? 'bg-red-400' : 'bg-green-400' }} rounded-md font-semibold text-xs text-gray-100 p-2 right-4 bottom-0">
                    {{ round($first_dose_percentage) }}%
                </div>
            </div>
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Second Dose</label>
                <label class="text-green-800 text-4xl font-bold">{{ $second_dose }}</label>
                <div class="absolute {{ $second_dose_percentage <= 94.5 ? 'bg-red-400' : 'bg-green-400' }}  rounded-md font-semibold text-xs text-gray-100 p-2 right-4 bottom-0">
                    {{ round($second_dose_percentage) }}%
                </div>
            </div>
            <div class="relative flex-1 flex flex-col gap-2 px-4">
                <label class="text-gray-800 text-base font-semibold tracking-wider">Booster</label>
                <label class="text-green-800 text-4xl font-bold">{{ $booster_dose }}</label>
                <div class="absolute {{ $booster_dose_percentage <= 94.5 ? 'bg-red-400' : 'bg-green-400' }}  rounded-md font-semibold text-xs text-gray-100 p-2 right-4 bottom-0">
                    {{ round($booster_dose_percentage) }}%
                </div>
            </div>
        </div>
    </div>
    <div class="md:pb-12 mx-4 md:mx-10">
        <h1 class="text-gray-500 font-semibold tracking-wider text-md mb-2">Total Number of doses and brands used to vaccinate @if ($vaccinated_date) on <span class="text-teal-800 underline">{{ $vaccinated_date }}</span>  @endif</h1>
        <div class="bg-gray-100 rounded-lg w-full h-auto py-4 flex flex-row justify-between divide-x divide-solid divide-gray-400  border border-gray-300">
            @foreach ($vaccinations as $vaccine_id => $vaccination_group)
                @php
                    $brand = $vaccination_group->first()->vaccine?->brand;
                    $first_dose = $vaccination_group->where('dose', 'first')->count();
                    $second_dose = $vaccination_group->where('dose', 'second')->count();
                    $total = $vaccination_group->count();
                @endphp
                <div class="relative flex-1 flex flex-col gap-2 px-4">
                        <label class="bg-teal-200 px-1 rounded-sm text-teal-800 text-sm font-semibold tracking-wider">{{ $brand }}</label>
                        <label class="text-gray-800 text-base font-semibold tracking-wider">First Dose</label>
                        <label class="text-green-800 text-2xl font-bold">{{ $first_dose }}</label>
                        <hr>
                        <label class="text-gray-800 text-base font-semibold tracking-wider">Second Dose</label>
                        <label class="text-green-800 text-2xl font-bold">{{ $second_dose }}</label>
                        <hr>
                        <label class="text-gray-800 text-base font-semibold tracking-wider">Total</label>
                        <label class="text-green-800 text-2xl font-bold">{{ $total }}</label>
                    </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
