<x-admin-layout>
    <div class="mt-12 max-w-6xl mx-auto">
        <div class="flex justify-end m-2 p-2">
            <a href=""
               class="px-4 py-2 bg-indigo-400 hover:bg-indigo-600 rounded">
                New Permission</a>
        </div>
        <div class="relative overflow-x-auto shadow-md bg-gray-200 sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($permissions as $permission)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $permission->id }}
                        </th>
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $permission->name }}
                        </th>
                        <td class="px-6 py-4 text-right">
                            <div class="flex space-x-2">
                                <a href=""
                                   class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>
</x-admin-layout>
