<x-app>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Buku Perpustakaan</h1>
        <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">
            + Tambah Buku
        </a>

        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>ISBN</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($books as $book)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $book->judul }}</td>
                        <td>{{ $book->penulis }}</td>
                        <td>{{ $book->penerbit }}</td>
                        <td>{{ $book->tahun_terbit }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->kategori }}</td>
                    </tr>

                    <td>
                        <div style="display: flex; gap: 8px; align-items: center;">
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="margin: 0;">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus buku ini?')">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>


                    </a>
                    </td>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">
                            Belum ada data buku.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app>
