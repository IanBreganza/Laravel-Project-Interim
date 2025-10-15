<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ian's Bookshelf</title>

    @vite('resources/css/app.css')
</head>
<body>
    <header class="sticky top-0 bg-white shadow-md z-10">
        <nav>
            <h1><a href="/">Ian's Bookshelf</a></h1>
            <a href="/library" class="nav-btn">Books</a>
            <a href="/library/author" class="nav-btn">Authors</a>
            <a href="/library/publisher" class="nav-btn">Publishers</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}

    </main>

</body>
</html>