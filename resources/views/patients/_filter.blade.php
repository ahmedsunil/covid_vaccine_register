<div class="flex flex-row justify-around">
    <x-input id="search" class="block w-full text-sm" placeholder="Search" type="text" name="search" :value="old('search')" required autofocus />
    <x-button class="mx-2 bg-teal-800 hover:bg-teal-700 text-sm font-semibold">
        Filter
    </x-button>
    <x-link-button class="bg-teal-800 hover:bg-teal-700 text-sm" type="light" link="{{ route('patients.index') }}">
        Clear
    </x-link-button>
</div>

