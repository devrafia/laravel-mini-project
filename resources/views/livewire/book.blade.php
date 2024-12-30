<div>
    <div class="flex flex-wrap items-center justify-between pb-4 space-y-4 flex-column sm:flex-row sm:space-y-0">
        <div>
            <select wire:model.live="paginate" name="" id="" class="rounded-sm">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>

            <select wire:model.live="category" name="" id="" class="rounded-sm">
                <option value="">Pilih Kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none rtl:inset-r-0 rtl:right-0 ps-3">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input wire:model.live='search' type="text" id="table-search"
                class="block p-2 text-sm text-gray-900 border border-gray-300 rounded-lg ps-10 w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Search for items">
        </div>
    </div>
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
                    Judul
                </th>
                <th scope="col" class="px-6 py-3">
                    Kategori
                </th>
                <th scope="col" class="px-6 py-3">
                    Pengarang
                </th>
                <th scope="col" class="px-6 py-3">
                    Penerbit
                </th>
                <th scope="col" class="px-6 py-3">
                    Cover
                </th>
                <th scope="col" class="px-6 py-3">

                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $book->title }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $book->category->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $book->author->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $book->publisher->name }}
                    </td>
                    <td class="px-6 py-4">
                        <img src="{{ asset('storage/' . $book->cover_image) }}" alt="{{ $book->title }}"
                            class="object-cover w-20 h-20">
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('books.edit', $book) }}"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <button class="delete-book" data-id="{{ $book->id }}">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-2">
        {{ $books->links() }}
    </div>


</div>
