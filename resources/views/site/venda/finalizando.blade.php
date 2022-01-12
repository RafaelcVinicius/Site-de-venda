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
                    <section class="section-2">
                    <div class="divbutton">
                        <div class="titulo">
                            <span>Forma de entrega</span>
                        </div>
                            <div id="retiradadiv" class="estilo-entrega">
                                <Button id="retirada">Retirada</Button>
                            </div>
                            <div id="entregadiv" class="estilo-entrega end hidden" >
                                <Button id="entrega">Entrega</Button>
                            </div>
                        </div>
                        <div class="enderecos">
                            <div id="estabelecimento">
                                <span>Rua Dr Maruri, 990 - 4º e 5º Andar
                                    Salas 401, 402, 403 e 502
                                    Centro - Concórdia - SC
                                    CEP: 89700-168</span>
                            </div>
                            <div id="enderecocliente" class="desativado">
                                @foreach ($enderecos as $endereco)
                                <Div>{{$endereco->endereco}}</Div>
                                @endforeach  
                            </div>
                        </div>

                    </section>   
                    <section id="formapagamento" class="desativado">
                        <div class="titulo">
                            <span>Forma de pagamento</span>
                        </div>
                        <div id="Dinheirodiv" class="estilo-entrega">
                            <Button id="dinheiro">Dinheiro</Button> <fieldset class="troco"> <legend><label for="troco">Troco para (R$)</label></legend> <input  type="text" placeholder="0,00" name="troco" id="troco"></fieldset>
                        </div>
                        <div id="Cartaodiv" class="estilo-entrega end hidden">
                            <Button id="cartao">Cartão</Button>
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