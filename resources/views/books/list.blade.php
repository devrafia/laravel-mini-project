<x-layouts.app>
    <x-slot name="title">Daftar Buku</x-slot>
    <div class="mt-4">
        <div class="grid grid-cols-3 gap-y-4">
            @foreach ($books as $book)
                <div
                    class="flex flex-col h-full max-w-sm bg-white border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        @if ($book->cover_image)
                            <img class="object-cover rounded-t-lg h-96" src="{{ asset('storage/' . $book->cover_image) }}"
                                alt="{{ $book->title }}" />
                        @else
                            <img class="object-cover rounded-t-lg h-96" width="400" height="500"
                                src="https://dummyimage.com/400x500/000/fff&text=Belum+Ada+Cover"
                                alt="{{ $book->title }}" />
                        @endif
                    </a>
                    <div class="flex flex-col p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $book->title }}</h5>
                        </a>
                        <p class="font-bold text-gray-700 dark:text-gray-400">Penulis: {{ $book->author->name }}
                        </p>
                        <p class="text-sm font-normal tracking-wide text-gray-700 dark:text-gray-400">
                            Penerbit: {{ $book->publisher->name }}</p>
                    </div>
                    <div class="px-5 pb-5 mt-auto">
                        <p
                            class="p-2 text-sm font-normal tracking-wide text-white text-gray-700 rounded-md shadow-md dark:text-gray-400 bg-slate-400 w-max">
                            {{ $book->category->name }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="p-2 mt-2">
            {{ $books->links() }}
        </div>
    </div>
</x-layouts.app>
