<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series Catalog</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand"
               href="{{ route('series.index') }}">
                Series Catalog
            </a>

            <div class="navbar-nav">
                <a class="nav-link"
                   href="{{ route('series.index') }}">
                    Series
                </a>

                <a class="nav-link"
                   href="{{ route('episodes.index') }}">
                    Episodes
                </a>
            </div>

        </div>
    </nav>
</header>

<main class="container mt-4">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')

</main>

@if($errors->any())
    <div class="alert alert-danger">

        <ul class="mb-0">

            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>
@endif

</body>
</html>