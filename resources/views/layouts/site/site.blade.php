<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- css  -->
    <link rel="stylesheet" href="{{ asset('css/site/sitelayout.css')}}">

    <title>Document</title>
</head>
<body>
    <Div class="tudo">
        <header class="header">
            <Div class="menu">
                <div class="h">
                    <div class="logo">
                        <img src="{{asset('img/fundoinicio.jpg')}}" alt="logo">
                    </div>
                    <div class="input"> 
                        <form action="" method="GET">
                            <fieldset class="field">
                                <article class="article">
                                <input type="text" name="busca" id="busca" placeholder="O que você procura ?">
                                <Button class="btn-busca"><svg class="svg" width="18px" height="18px" viewBox="0 0 2117 2117"><g id="Camada_x0020_1"><path d="M1360 1499c-148,118 -330,181 -520,181 -463,0 -840,-377 -840,-840 0,-463 377,-840 840,-840 463,0 840,377 840,840 0,190 -63,372 -181,520l589 588c38,39 38,101 0,140 -19,18 -44,29 -70,29 -26,0 -51,-11 -70,-29l-588 -589zm-520 -16c355,0 643,-288 643,-643 0,-354 -288,-643 -643,-643 -354,0 -643,289 -643,643 0,355 289,643 643,643z" class="fill-main"></path></g></svg></Button>
                                </article>
                            </fieldset>
                        </form>
                    </div>
                    <div class="usuario"> 
                        <div class="user">
                            <span class="bem">Bem vindo(a).</span>
                            <div class="us">@if (empty(Auth::user()->name))
                                    <span class="ou"><a href="{{route('login')}}">Entre </a> <p>ou</p> <a href="{{route('register')}}"> cadastre-se </a></span>
                                @else
                                <span class="nome-user">{{Auth::user()->name}}</span>
                                <span>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="btn-sair" type="submit">Sair</button>
                                    </form>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="carrinho">
                        <div class="car">
                            <svg viewBox="0 0 154 150" width="26px" height="26px" class="svg-car-desktop"><g id="Camada_x0020_1"><path d="M48 120c-8,0 -14,7 -14,15 0,8 6,15 14,15 9,0 15,-7 15,-15 0,-8 -6,-15 -15,-15l0 0zm91 -22c4,0 7,3 7,7 0,4 -3,8 -7,8l0 0 -91 0c-8,0 -15,-7 -15,-15 0,-3 1,-6 2,-8l10 -18 -27 -57 -10 0 0 0c-5,0 -8,-3 -8,-7 0,-5 3,-8 8,-8l0 0 20 0 7 15 111 0c4,0 8,3 8,8 0,1 -1,2 -1,3l-27 49c-3,4 -8,8 -13,8l-56 0 -7 12 0 1c0,1 1,2 2,2l87 0zm-15 22c-9,0 -15,7 -15,15 0,8 6,15 15,15 8,0 15,-7 15,-15 0,-8 -7,-15 -15,-15z" class="fill"></path></g></svg>
                            <strong>0</strong>
                            <svg width="15px" height="15px" viewBox="0 0 650 300" class="svg-car-desktop"><path d="M312 251l222 -236c10,-9 23,-15 37,-15l1 0c29,0 53,24 53,53 0,14 -6,27 -17,38l-258 274c-8,7 -17,12 -27,14 -4,1 -7,1 -11,1 -3,0 -7,0 -10,-1 -11,-2 -20,-7 -26,-13l-261 -276c-10,-10 -15,-23 -15,-37 0,-29 24,-53 53,-53l1 0c14,0 27,6 35,15l223 236z" class="fill"></path></svg>
                        </div>
                    </div>
                </div>
            </Div>
            <nav class="nav">
                <ul class="nav-ul">
                    <li><a href="{{route('home')}}">Início</a></li>
                    <li><a href="{{route('produtos')}}">Produtos</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contatos</a></li>
                </ul>       
            </nav>
        </header>
    </Div>
    <div class="layout">
        @yield('corpo')
        <footer class="footer">
            <div class="rodape">
                        
            </div>
        </footer>
    </div>
</body>
</html>