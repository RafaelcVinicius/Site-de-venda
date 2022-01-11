<link rel="stylesheet" href="{{asset('css/site/sitefinalizando.css')}}">
@extends('layouts.site.site')
@section('corpo')
    <Div class="display">
        <div class="tiulo-1">
            <Span>Finalização da compra</Span>
        </div>

        @if (count($vendas) > 0)
        <article class="artic">
                <section class="section-1">
                    <section class="section">
                        <div class="titulo">
                            <span>Forma de entrega</span>
                        </div>
                        <div class="estilo-entrega">
                            <Button>Retirada</Button>
                        </div>
                        <div class="estilo-entrega">
                            <Button >entrega</Button>
                        </div>
                    </section>   
                    <section class="section">
                        <div class="titulo">
                            <span>Forma de entrega</span>
                        </div>
                        <div class="estilo-entrega">
                            <Button>Retirada</Button>
                        </div>
                        <div class="estilo-entrega">
                            <Button >entrega</Button>
                        </div>
                    </section>  
                </section>
                <div class="finalizar">
                    <div class="total-pedido">Total do seu pedido</div>
                    <div class="qtde-f">  <div>Qtde de Produtos:</div> <div>{{count($vendas)}}</div> </div>  
                    <div class="subtotal-f"> <div>Sub-Total: </div>  <div>R$ {{$subtotal->valor}} </div></div>
                    <a href="{{route('finalizando')}}"><button class="btn-finalizar">Finalizar compra</button> </a>
                </div>
         </article>        
        @else

            <div class="semproduto"><div> Não a produtos no carrinho!!</div><a href="{{route('produtos')}}">Voltar as compras?</a></div>
        @endif
    </div>            
@endsection