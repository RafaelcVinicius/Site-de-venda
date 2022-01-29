<link rel="stylesheet" href="{{asset('css/site/sitefinalizando.css')}}">
@extends('layouts.site.site')
@section('corpo')
    <Div class="display">
    <form class="display" action="{{route('finalizar')}}" method="post">
        @csrf
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
                                <label id="retirada" for=""><span>Retirada</span></label>
                            </div>
                            <div id="entregadiv" class="estilo-entrega end hidden" >
                                <label id="entrega" for=""><span> Entrega </span></label>
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
                                <a class="criar-en" href="{{route('endereco.create')}}">Adicionar endereço de entrega</a>
                                @foreach ($enderecos as $endereco)                               
                                <Div class="endereco" id="ende" id="endereco-{{$endereco->id}}">
                                    <input type="radio" onclick="endereco({{$endereco->id}})" name="radio" id="{{$endereco->id}}">
                                    <label for="{{$endereco->id}}">{{$endereco->endereco}}</label>                                
                                </Div>
                                @endforeach  
                            </div>
                        </div>

                    </section>   
                    <section id="formapagamento" class="desativado">
                        <div class="titulo">
                            <span>Forma de pagamento</span>
                        </div>
                        <div id="dinheirodiv" class="estilo-entrega">
                           <label id="dinheiro" for=""><span>Dinheiro</span></label>
                            <div id="trocodiv">
                                <fieldset class="troco"> <legend><label for="troco">Troco para (R$)</label></legend> <input  type="text" placeholder="0,00" name="valorpago" id="troco"></fieldset>
                            </div>
                        </div>
                        <div id="cartaodiv" class="estilo-entrega end hidden">
                            <label id="cartao" for=""><span>Cartão</span></label>
                        </div>
                    </section>  
                </section>
                <div class="finalizar">                
                        <div class="total-pedido">Total do seu pedido</div>
                        <div class="qtde-f">  <div>Qtde de Produtos:</div> <div>{{count($vendas)}}</div> </div>  
                        <div class="subtotal-f"> <div>Sub-Total: </div>  <div>R$ {{$subtotal->valor}} </div></div>

                        <input type="hidden" name="id_endereco" value="{{$enderecos[0]->id}}" id="id_endereco">
                        <input type="hidden" name="tipopedido" value="retirada" id="tipopedido">
                        <input type="hidden" name="especie" value="dinheiro" id="especie">
                        <input type="hidden" name="subtotal" value="{{$subtotal->valor}}">
                        <button type="submit" class="btn-finalizar">Finalizar compra</button>
                </div>
         </article> 
    </form>       
        @else

            <div class="semproduto"><div> Não a produtos no carrinho!!</div><a href="{{route('produtos')}}">Voltar as compras?</a></div>
        @endif
    </div>            
@endsection