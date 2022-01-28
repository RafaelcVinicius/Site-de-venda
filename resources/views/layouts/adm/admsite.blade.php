<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/adm/admlayout.css')}}">

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
                        <div class="star">
                            <li><a href="{{route('site')}}">Início</a></li>
                            <li><a href="#">Configuração </a></li>
                         <li><a href="{{route('produtos.index')}}">Produtos</a></li>
                        </div>
                        <Div class="esp">
                            <li><a href="{{route('index')}}">Voltar</a></li>
                            <li><a href="{{route('sair')}}">Sair</a></li>
                        </Div>
                    </ul>
                </div>  
            </div> 
        </nav>
        <button id="btn-mobile"><span id="hamburger"></span></button>
    </header>
    <div class="container"> 
     @yield('corpo')
    </div>
</body>
</html>