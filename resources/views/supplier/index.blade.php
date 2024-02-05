<x-app-layout>
    <section class="min-h-full p-4 space-y-4">
        <div class="flex justify-between">
            <x-button :route="route('supplier.create')" color="blue" text="Create" icon="fa-plus"/>
        </div>

        @if (count($datas) > 0)
            <div class="overflow-x-auto flex flex-col justify-between h-full bg-neutral-50 dark:bg-gray-800 rounded-xl p-2 border-2 border-gray-200 drop-shadow-lg dark:border-gray-700">
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="text-neutral-900 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-50 py-1 px-4 text-start text-sm">ID</th>
                            <th class="text-neutral-900 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-50 py-1 px-4 text-start text-sm">Name</th>
                            <th class="text-neutral-900 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-50 py-1 px-4 text-start text-sm">Address</th>
                            <th class="text-neutral-900 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-50 py-1 px-4 text-start text-sm">Email</th>
                            <th class="text-neutral-900 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-50 py-1 px-4 text-start text-sm">Phone</th>
                            <th class="text-neutral-900 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-50 py-1 px-4 text-start text-sm">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                            <tr>
                                <td class="text-neutral-500 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-300 py-1 px-4 text-sm">{{ $data->id }}</td>
                                <td class="text-neutral-500 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-300 py-1 px-4 text-sm">{{ $data->name }}</td>
                                <td class="text-neutral-500 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-300 py-1 px-4 text-sm">{{ $data->address }}</td>
                                <td class="text-neutral-500 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-300 py-1 px-4 text-sm">{{ $data->email }}</td>
                                <td class="text-neutral-500 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-300 py-1 px-4 text-sm">{{ $data->phone }}</td>
                                <td class="text-neutral-50 bg-neutral-50 dark:bg-gray-800 dark:text-neutral-50 py-1 px-4 flex space-x-4">
                                    <x-button :route="route('supplier.edit', $data->id)" color="green" text="Edit" icon="fa-pen-to-square"/>
                                    <form action="{{ route('supplier.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <x-button color="red" text="Delete" icon="fa-trash"/>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if ($datas->count() >= 9 )
                    <div class="py-2 px-4">
                        {{ $datas->links() }}
                    </div>
                @endif
            </div>
        @else
        <x-data-not-found/>
        @endif
    </section>
</x-app-layout>