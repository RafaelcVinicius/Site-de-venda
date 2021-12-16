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
    <header class="menu">
        <nav class="nav_bar">
             <div>    
                <ul class="start">
                    <li>Início</li>
                    <li>Produtos</li>
                    <li>sobre</li>
                </ul>
            </div>       
            <div>
                <ul class="end">
                    <li>Login</li>
                    <li>Registrar</li>
                </ul>
            </div>    
        </nav>
    </header>
    @yield('corpo')
</body>
</html>