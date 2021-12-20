<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/adm.css')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/adm.js') }}" defer></script>

    <title>Site</title>
</head>
<body>
   
    <header class="menu">
        <nav id="nav_bar">
            <div class="barra">
                <div>    
                    <ul class="start">
                        <li>Início</li>
                        <li>Usuários </li>
                        <li>Configuração</li>
                        <li>Sobre</li>
                        <li>Sair</li>
                    </ul>
                </div>  
            </div> 
        </nav>
        <button id="btn-mobile"><span id="hamburger"></span></button>
    </header>
    @yield('corpo')
</body>
</html>