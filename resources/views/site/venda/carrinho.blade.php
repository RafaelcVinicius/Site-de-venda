<link rel="stylesheet" href="{{asset('css/site/sitecarrinho.css')}}">
@extends('layouts.site.site')
@section('corpo')
 <Div class="display">
     <Div class="voltar">
        voltar para as compras
     </Div>
     <div class="car_itens">
         <div class="items">
           @if (!empty($vendas))
                @foreach ($vendas  as $venda)
                    <div class="item">
                            <div class="foto-pro">
                            </div>
                            <div class="nome">{{$venda->id_produto}}
                            </div>
                            <div class="exluir">
                                <form action="" method="post">
                                    @csrf                              
                                    <button>Excluir</button>
                                </form>
                            </div>
                    </div>
                @endforeach
            @else
                    <div>Não a produtos no carrinho</div>
            @endif
         </div>
         <div class="finalizar">
            <div > finalizar</div>
        </div>
     </div>

 </Div>
@endsection