<link rel="stylesheet" href="{{asset('css/site/sitecarrinho.css')}}">
@extends('layouts.site.site')
@section('corpo')
 <Div class="display">
     <Div class="voltar">
         <a href="{{route('produtos')}}">Voltar para as compras</a>
        
     </Div>
     <div class="car_itens">
         <div class="items">
           @if (count($vendas) > 0)
                @foreach ($vendas as $venda)
                <article class="artic">
                    <a href="{{route('produto', $venda->produto->nome)}}">
                        <div class="item">
                                <div class="foto-pro">

                                    @if (!empty($venda->produto->imagem->path))
                                
                                        <img src="{{ asset('storage/'.$venda->produto->imagem->path)}}" alt="">
                                    @else
                                        img
                                    @endif               

                                </div>

                                 <div 
                                    class="nome">{{$venda->produto->nome}}
                                </div>
                                <div 
                                    class="qtde">{{$venda->qtde}}
                                </div>
                                <div 
                                    class="subtotal">R$ {{$venda->valor}}
                                </div>
                                <div class="exluir">
                                    <form action="{{route('carrinho.destroy', $venda->id)}}" method="post">
                                        @csrf        
                                        @method('DELETE')                      
                                        <button>Excluir</button>
                                    </form>
                                </div>
                        </div>
                    </a>
                </article>
                @endforeach
            </div>
                <div class="finalizar">
                    <div class="total-pedido">Total do seu pedido</div>
                    <div class="qtde-f">  <div>Qtde de Produtos:</div> <div>{{count($vendas)}}</div> </div>  
                    <div class="subtotal-f"> <div>Sub-Total: </div>  <div>R$ {{$subtotal->valor}} </div></div>
                    <button class="btn-finalizar">Finalizar compra</button> 
                </div>
            @else

                    <div class="semproduto"><div> Não a produtos no carrinho!!</div><a href="{{route('produtos')}}">Voltar as compras?</a></div>
            @endif
     </div>
 </Div>
@endsection