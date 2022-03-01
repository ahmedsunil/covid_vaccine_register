<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-2 gap-2">
            <div>
                <form action="{{ route('patients.index') }}" method="GET">
                    @include('patients._filter')
                </form>
            </div>
            <div class="flex flex-row-reverse">
                @if(auth()->user()->role == 'admin')
                    <x-link-button link="{{ route('patients.create') }}" class="px-5 py-2 text-sm bg-teal-800 text-white rounded-md hover:bg-teal-700">Add</x-link-button>
                @endif
            </div>
        </div>
    </x-slot>

    <div class="py-8 md:pb-12 mx-4 md:mx-10">
        <div class="mx-auto py-5 sm:px-6 lg:px-8">
            <div class="container mx-auto">
                <x-table>
                    <x-slot name="thead">
                        <x-th>Name</x-th>
                        <x-th>Government ID</x-th>
                        <x-th>Contact</x-th>
                        <x-th>Current Address</x-th>
                        <x-th></x-th>
                    </x-slot>
                    @foreach($patients as $patient)
                        <tr class="odd:bg-white even:bg-slate-200">
                            <x-td>{{ $patient->name }}</x-td>
                            <x-td>{{ $patient->government_id }}</x-td>
                            <x-td>{{ $patient->contact }}</x-td>
                            <x-td>{{ $patient->current_address }}</x-td>
                            <x-td>
                                <div class="text-center">
                                    <div class="flex flex-row justify-center">
                                        <a href="{{ route('patients.show', $patient->id) }}" class="px-4 bg-blue-300 rounded-md px-4 py-2 font-bold text-blue-700 hover:text-blue-800 hover:bg-blue-400">View</a>
                                        @if(auth()->user()->role == 'admin')
                                            <a href="{{ route('patients.edit', $patient->id) }}" class="mx-2 px-4 bg-teal-300 rounded-md px-4 py-2 font-bold text-teal-700 hover:text-teal-800 hover:bg-teal-400">Edit</a>
                                            <form action="{{ route('patients.destroy', $patient->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-300 rounded-md px-4 py-2 font-bold text-red-700 hover:text-red-800 hover:bg-red-400">Delete</button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </x-td>
                        </tr>
                    @endforeach
                </x-table>
                <div class="py-4">
                    {{ $patients->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
