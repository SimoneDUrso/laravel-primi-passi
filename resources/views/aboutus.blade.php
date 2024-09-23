<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hello World!</title>
</head>

<body>
    {{-- Header --}}
    <header>
        <div class="container-full bg-info">
            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled m-0 d-flex fs-4 justify-content-center fw-bold">
                        <li class="py-4 px-3 mx-2">
                            <a class="text-decoration-none text-light" href="{{ route('home') }}">Homepage</a>
                        </li>
                        <li class="py-4 px-3 mx-2">
                            <a class="text-decoration-none text-light" href="{{ route('aboutus') }}">About Us</a>
                        </li>
                        <li class="py-4 px-3 mx-2">
                            <a class="text-decoration-none text-light" href="{{ route('contacts') }}">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    {{-- Main --}}
    <main>
        <div class="container-full">
            <div class="row">
                <div class="col-12 text-center fw-bold p-5 bg-light">
                    <h1>
                        {{ $message }}
                    </h1>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
