<x-app>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Buku Perpustakaan</h1>

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
