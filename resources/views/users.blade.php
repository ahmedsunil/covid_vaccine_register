<x-app-layout>
    <x-slot name="header">
            <div class="flex flex-row-reverse">
                    <x-link-button link="{{ route('users.create') }}" class="px-5 py-2 text-sm bg-teal-800 text-white rounded-md hover:bg-teal-700">Add</x-link-button>
            </div>
    </x-slot>

    <div class="py-8 md:pb-12 mx-4 md:mx-10">
        <div class="mx-auto py-5 sm:px-6 lg:px-8">
            <div class="container mx-auto">
                <x-table>
                    <x-slot name="thead">
                        <x-th>Name</x-th>
                        <x-th>Email</x-th>
                        <x-th>Role</x-th>
                        <x-th>Created at</x-th>
                        <x-th></x-th>
                    </x-slot>
                    @foreach($users as $user)
                        <tr class="odd:bg-white even:bg-slate-200">
                            <x-td>{{ $user->name }} </x-td>
                            <x-td>{{ $user->email }} </x-td>
                            <x-td>{{ ucfirst($user->role) }} </x-td>
                            <x-td>{{ $user->created_at }} </x-td>
                            <x-td>
                                <div class="flex flex-row justify-center">
                                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-300 rounded-md px-4 py-2 font-bold text-red-700 hover:text-red-800 hover:bg-red-400">Delete</button>
                                        </form>
                                </div>
                            </x-td>
                        </tr>
                    @endforeach
                </x-table>
                <div class="py-4">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
