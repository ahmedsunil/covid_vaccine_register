<x-app-layout>
    <x-slot name="header">
        <div class="grid grid-cols-2 gap-2">
            <div>
                <form action="{{ route('staff.index') }}" method="GET">
                    @include('staff._filter')
                </form>
            </div>
            <div class="flex flex-row-reverse">
                @if(auth()->user()->role == 'admin')
                    <x-link-button link="{{ route('staff.create') }}" class="px-5 py-2 text-sm bg-teal-800 text-white rounded-md hover:bg-teal-700">Add</x-link-button>
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
                        <x-th>Record Card Number</x-th>
                        <x-th>Designation</x-th>
                        <x-th></x-th>
                    </x-slot>
                    @foreach($staffs as $staff)
                        <tr class="odd:bg-white even:bg-slate-200">
                            <x-td>{{ $staff->name }}</x-td>
                            <x-td>{{ $staff->government_id }}</x-td>
                            <x-td>{{ $staff->record_card_number }}</x-td>
                            <x-td>{{ ucwords(str_replace('_', ' ' , $staff->designation)) }}</x-td>
                            <x-td>
                                <div class="flex flex-row justify-center">
                                    <a href="{{ route('staff.show', $staff->id) }}" class="px-4 bg-blue-300 rounded-md px-4 py-2 font-bold text-blue-700 hover:text-blue-800 hover:bg-blue-400">View</a>
                                    @if(auth()->user()->role == 'admin')
                                        <a href="{{ route('staff.edit', $staff->id) }}" class="mx-2 px-4 bg-teal-300 rounded-md px-4 py-2 font-bold text-teal-700 hover:text-teal-800 hover:bg-teal-400">Edit</a>
                                        <form action="{{ route('staff.destroy', $staff->id) }}" method="post" id="delete-staff">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="staff-delete bg-red-300 rounded-md px-4 py-2 font-bold text-red-700 hover:text-red-800 hover:bg-red-400">Delete</button>
                                        </form>
                                    @endif
                                </div>
                            </x-td>
                        </tr>
                    @endforeach
                </x-table>
                <div class="py-4">
                    {{ $staffs->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
