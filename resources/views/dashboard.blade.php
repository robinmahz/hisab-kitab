<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Hishab Kitab
            </h2>
            <a href="/hisabkitab/create" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Add
                new
                Entry</a>
        </div>
    </x-slot>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Particulars
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Type
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Amount
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hisabKitabs as $hisabKitab)
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                            {{ $hisabKitab->particular }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $hisabKitab->created_at }}
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            {{ $hisabKitab->type }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $hisabKitab->amount }}
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800 flex gap-4">
                            <a href="/hisabkitab/{{ $hisabKitab->id }}/edit">Edit</a>
                            <form action="/hisabkitab/{{ $hisabKitab->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
S.N
Date
Type
Amount
Particulars
