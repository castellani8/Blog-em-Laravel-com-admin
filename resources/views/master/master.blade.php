<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark navcolor p-1'>
        <div class='container-fluid justify-content-center'>
            <button class='mr-auto navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <a class='navbar-brand mr-auto text-light' href='#'><img class=' p-0 mr-auto'style='width:30%'>O novo mundo de cristo</a>
            <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav ml-auto mb-2 mb-lg-0 text-center'>
                <li class='nav-item'>
                <a class='nav-link text-light active' aria-current='page' href='index'>Home</a>
                </li>
                <div class='divider-vertical d-lg-block d-none my-auto'></div>
                <li class='nav-item'>
                <a class='nav-link text-light' href='QuemSomos.php'>Quem Somos</a>
                </li>
                <div class='divider-vertical d-lg-block d-none my-auto'></div>
                <li class='nav-item'>
                <a class='nav-link text-light' href='Projetos.php'>Projetos</a>
                </li>
                <div class='divider-vertical d-lg-block d-none my-auto'></div>
                <li class='nav-item'>
                <a class='nav-link text-light' href='Paineis.php'>Painéis</a>
                </li>
                <div class='divider-vertical d-lg-block d-none my-auto'></div>
                <li class='nav-item'>
                <a class='nav-link text-light' href='FaleConosco.php'>Fale Conosco</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    <div>
        @yield('content')
    </div>    
    <script src="{{ asset('js/app.js') }}"></script>    
    <style>
        .text-light{
            color:black;
        }
    </style>
</body>
</html>