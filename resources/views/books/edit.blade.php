<x-app>
    <div class="container mt-5">
        <h1 class="mb-4">Ubah Data Buku</h1>

        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Judul Buku</label>
                <input type="text" name="judul" class="form-control" value="{{ $book->judul }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" name="penulis" class="form-control" value="{{ $book->penulis }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Penerbit</label>
                <input type="text" name="penerbit" class="form-control" value="{{ $book->penerbit }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" class="form-control" value="{{ $book->tahun_terbit }}"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">ISBN</label>
                <input type="text" name="isbn" class="form-control" value="{{ $book->isbn }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" name="kategori" class="form-control" value="{{ $book->kategori }}" required>
            </div>

            <button type="submit" class="btn btn-primary">
                Update Buku
            </button>

            <a href="{{ route('books.index') }}" class="btn btn-secondary">
                Kembali
            </a>
        </form>
    </div>
</x-app>
