<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <header class="container-fluid bg-warning py-3">
        <p class="text-center text-light fs-3">Giant Book Supplier</p>
    </header>

    @include('partial.navbar')

    <div class="container mt-5">
        @yield('container')
    </div>

    <footer class="container-fluid bg-primary mt-auto">
        <p class="text-center text-light mb-0">&copy; Happy Book Store 2022 </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
