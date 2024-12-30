<x-layouts.app>
    <x-slot name="title">Tambah Buku</x-slot>
    <div class="mt-4">
        <div class="relative overflow-x-auto sm:rounded-lg">


            <form class="max-w-sm">
                <div class="mb-5">
                    <label for="title"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                    <input type="tex" id="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Judul" required />
                </div>
                <label for="category"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                <select id="category"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($categories as $category)
                        <option>{{ $category->name }}</option>
                    @endforeach
                </select>

                <label for="author"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulis</label>
                <select id="author"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($authors as $author)
                        <option>{{ $author->name }}</option>
                    @endforeach
                </select>

                <label for="publisher"
                    class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Penerbit</label>
                <select id="publisher"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($publishers as $publisher)
                        <option>{{ $publisher->name }}</option>
                    @endforeach
                </select>
                <label class="block my-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Cover
                    Image</label>
                <input
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="user_avatar_help" id="user_avatar" type="file">
                <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">

                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>

        </div>

    </div>
</x-layouts.app>
