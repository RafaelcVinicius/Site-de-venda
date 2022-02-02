<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
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
                    <div class="item">
                        <a href="{{route('produto', $venda->produto->nome)}}">
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
                        </a>        
                            <div class="qtde">                                                                    
                                <span data-controle="{{$venda->produto->id}}" class="qtde-produto" > {{$venda->qtde}} </span>

                                <input type="hidden" id="id_user" value="{{Auth::user()->id}}">
                                <i class="right"><input type="hidden" id="id_produto" value="{{$venda->produto->id}}"><svg viewBox="0 0 345 345" width="10px" height="10px"><g id="Camada_x0020_1"><polygon points="195,88 195,149 274,149 345,149 345,172 345,195 274,195 195,195 195,257 195,345 149,345 149,345 149,257 149,195 70,195 0,195 0,172 0,149 70,149 149,149 149,88 149,0 149,0 195,0 " class="fill-gray"></polygon></g></svg></i>                            
                                <i  class="left"><input type="hidden" id="id_produto" value="{{$venda->produto->id}}"><svg viewBox="0 0 185 25" width="10px" height="10px"><g id="Camada_x0020_1"><polygon points="147,0 185,0 185,12 185,25 147,25 118,25 67,25 38,25 0,25 0,12 0,0 38,0 " class="fill-gray"></polygon></g></svg></i>
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
                </article>
                @endforeach
            </div>
                <div class="finalizar">
                    <div class="total-pedido">Total do seu pedido</div>
                    <div class="qtde-f">  <div>Qtde de Produtos:</div> <div>{{count($vendas)}}</div> </div>  
                    <div class="subtotal-f"> <div>Sub-Total: </div>  <div>R$ {{$subtotal->valor}} </div></div>
                    <a href="{{route('finalizando')}}"><button class="btn-finalizar">Finalizar compra</button> </a>
                </div>
            @else

                    <div class="semproduto"><div> Não a produtos no carrinho!!</div><a href="{{route('produtos')}}">Voltar as compras?</a></div>
            @endif
     </div>
 </Div>

 <script>



$(function(){
    $(".right").on("click", function (){

     var id =   $(this).find('input#id_produto').val();

        $.ajax({
                url: "{{route('qtdecarrinho')}}",
                type: "POST",
                data: { id_user: $('#id_user').val(),
                        id_produto: id,
                        qtde: +1},           
                dataType: 'json',
                success: function(response){  

                    document.querySelector(".qtde-produto[data-controle='"+codproduto+"']")  

                            console.log(response);
                    }
              
        });

        $(function(){            
                    $.ajax({
                            url: "{{route('consultacar')}}",
                            type: "POST",
                            data: {id_user: $('#id_user').val()},
                            dataType: 'json',
                            success: function(response){           
                                if(response.qtde == null){
                                    $('#qtde-venda').html(0);
                                }else{
                                    $('#qtde-venda').html(response.qtde);
                                }
                            
                                    console.log(response);
                            }
                    });
            });
    });
});


$(function(){
    $(".left").on("click", function (){

     var id =   $(this).find('input#id_produto').val();

        $.ajax({
                url: "{{route('qtdecarrinho')}}",
                type: "POST",
                data: { id_user: $('#id_user').val(),
                        id_produto: id,
                        qtde: -1},           
                dataType: 'json',
                success: function(response){  
                    document.getElementById('qtde-'+id).value = response;   
                            console.log(response);
                    }
              
        });


        $(function(){            
                    $.ajax({
                            url: "{{route('consultacar')}}",
                            type: "POST",
                            data: {id_user: $('#id_user').val()},
                            dataType: 'json',
                            success: function(response){           
                                if(response.qtde == null){
                                    $('#qtde-venda').html(0);
                                }else{
                                    $('#qtde-venda').html(response.qtde);
                                }
                            
                                    console.log(response);
                            }
                    });
            });
    });
});


    </script>
    


@endsection