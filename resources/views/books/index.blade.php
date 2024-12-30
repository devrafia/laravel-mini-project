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
    <x-slot name="scripts">
        <script>
            document.querySelectorAll('.delete-book').forEach(button => {
                button.addEventListener('click', function() {
                    const bookId = this.getAttribute('data-id');
                    const confirmation = confirm('Apakah Anda yakin ingin menghapus buku ini?');
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
                                // Hapus baris buku dari tabel
                                this.closest('tr').remove();
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('Terjadi kesalahan saat menghapus buku.');
                            });
                    }
                });
            });
        </script>
    </x-slot>
</x-layouts.app>
