<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ian's Library</title>

    @vite('resources/css/app.css')
</head>
<body>
    <div class="body-format">
        <h1>Welcome to my Library</h1>
        <p>Click the button to see what's within</p>

        <a href="/library" class="btn">
            Read Stuff
        </a>
    </div>
    
</body>
</html>