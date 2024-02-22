<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Laravel Primi Passi</title>
</head>
<body>
    <header>
        <h1 class="text-primary text-center">
            HOME BLADE PHP
        </h1>
        <nav class="my-5">
            <ul class="d-flex justify-content-around list-unstyled w-100">
                <li>
                    <a href="{{ route('classe114') }}" class="text-decoration-none text-dark">
                        Classe 114
                    </a>
                </li>
                <li>
                    <a href="{{ route('batCaverna') }}" class="text-decoration-none text-dark">
                        Bat-Caverna
                    </a>
                </li>
                <li>
                    <a href="{{ route('dysonStore') }}" class="text-decoration-none text-dark">
                        Dyson Store
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h3 class="text-success text-center">
                Hello World!
            </h3>
        </section>
    </main>
</body>
</html>