<x-layouts.app>
    <x-slot name="title">Kelola Buku</x-slot>
    <div class="mt-4">

        <div>
            <a href="{{ route('books.create') }}"
                class="block p-2 mb-3 ml-auto text-white rounded-md w-max bg-slate-600 hover:bg-slate-700 active:bg-slate-800">Tambah
                Buku</a>
        </div>
        <div class="relative overflow-x-auto sm:rounded-lg">
            <livewire:book />
        </div>
    </div>

</x-layouts.app>
