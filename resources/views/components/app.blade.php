
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Manajemen Buku' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">
                Sistem Manajemen Buku
            </a>
        </div>
    </nav>

    <main class="container mt-4">
        {{ $slot }}
    </main>

    <footer class="text-center mt-5 mb-3">
        <p>&copy; 2026 Sistem Manajemen Buku</p>
    </footer>

</body>
</html>
