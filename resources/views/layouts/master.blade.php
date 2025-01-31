<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>MyWebsite | @yield('title')</title>
</head>
<body> 
    @include('partials.navbar')

    <main>
        @yield('main')
    </main>

    @include('partials.footer')
</body>
</html>