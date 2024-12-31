<x-layouts.app>
    <x-slot name="title">Rekap Buku Penerbit</x-slot>
    <div class="mt-4">


        <div class="relative overflow-x-auto sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 border-2 shadow-md rtl:text-right dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Publisher
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $count = 0;
                        $publishersTotal = 0;
                    @endphp
                    @foreach ($publishers as $publisher)
                        @php
                            $publishersTotal += $publisher->books_count;
                        @endphp
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ ++$count }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $publisher->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $publisher->books_count }}
                            </td>

                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td class="px-6 py-4 text-lg font-bold text-black" colspan="2">
                            Total Buku
                        </td>
                        <td class="px-6 py-4 text-lg font-bold text-black">
                            {{ $publishersTotal }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</x-layouts.app>
