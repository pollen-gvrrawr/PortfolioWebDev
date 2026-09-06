<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Not Found</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="height: 100vh">
        <p class="jetbrains-mono-bold display-3 title-text">Page Not Found >_<</p>
        <p>Oops, you're trying to access a page that does not exist.</p>
        <a class="home-btn" href="{{ url('/') }}">go back to home</a>
    </div>
</body>
</html>