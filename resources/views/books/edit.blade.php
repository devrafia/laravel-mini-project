<x-layouts.app>
    <x-slot name="title">Edit Buku</x-slot>
    <div class="mt-4">
        <div class="relative overflow-x-auto sm:rounded-lg">
            <div class="w-1/3">
                <button
                    class="block p-2 mt-2 ml-auto text-sm text-center text-white bg-red-500 rounded-md delete-book hover:bg-red-600 active:bg-red-800"
                    data-id="{{ $book->id }}">Hapus Buku</button>
            </div>
            <form class="max-w-sm" action="{{ route('books.update', $book) }}" method="POST" enctype="multipart/form-data"
                novalidate>
                @csrf
                @method('PUT')
                <div class="mb-5">
                    <label for="title"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                    <input type="tex" id="title" name="title" value="{{ $book->title }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Judul" required />
                    @error('title')
                        <span class="text-sm font-semibold text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <label for="category_id"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                <select id="category_id" name="category_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if ($category->id == old('category_id', $book->category_id)) selected @endif>

                            {{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="text-sm font-semibold text-red-500">{{ $message }}</span>
                @enderror

                <label for="author_id"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulis</label>
                <select id="author_id" name="author_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}" @if ($author->id == old('category_id', $book->author_id)) selected @endif>
                            {{ $author->name }}</option>
                    @endforeach
                </select>
                @error('author_id')
                    <span class="text-sm font-semibold text-red-500">{{ $message }}</span>
                @enderror

                <label for="publisher_id"
                    class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Penerbit</label>
                <select id="publisher_id" name="publisher_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($publishers as $publisher)
                        <option value="{{ $publisher->id }}"@if ($publisher->id == old('category_id', $book->publisher_id)) selected @endif>
                            {{ $publisher->name }}</option>
                    @endforeach
                </select>
                @error('publisher_id')
                    <span class="text-sm font-semibold text-red-500">{{ $message }}</span>
                @enderror

                <label class="block my-2 text-sm font-medium text-gray-900 dark:text-white" for="cover_image">Cover
                    Image</label>
                <input name="cover_image"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    aria-describedby="cover_image" id="cover_image" type="file">
                @error('cover_image')
                    <span class="text-sm font-semibold text-red-500">{{ $message }}</span>
                @enderror
                <div class="mt-4 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">

                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </div>
            </form>

        </div>

    </div>
    <script>
        document.querySelector('.delete-book').addEventListener('click', function() {
            const bookId = this.getAttribute('data-id');
            const confirmation = confirm('Apakah Anda yakin ingin menghapus buku ini?');
            console.log(bookId);
            if (confirmation) {
                fetch(`/books/${bookId}`, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        alert(data.message);
                        window.location.href = '/books';
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan saat menghapus buku.');
                    });
            }
        });
    </script>
</x-layouts.app>
