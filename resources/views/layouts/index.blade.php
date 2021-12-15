<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/index.css')}}">

    <title>Site</title>
</head>
<body>
    
    <nav class="nav_bar">
        <ul class="start">
            <li>Início</li>
            <li>Produtos</li>
        </ul>
     <H2>Site de venda</H2>
        <ul class="end">
            <li>Login</li>
            <li>Registrar</li>
        </ul>
    </nav>
    @yield('corpo')
</body>
</html>