<link rel="stylesheet" href="{{ asset('css/site/siteperfil.css')}}">

@extends('layouts.site.site')
@section('corpo')
<div class="corpo">
    <div class="dados">
        <h5>Dados User</h5>
        <div class="dadosuser">
            <div class="pequeno"> <fieldset><legend> Nome:</legend> {{$dados->name}}</fieldset></div>
            <div class="pequeno"><fieldset><legend>Email:</legend> {{$dados->email}}</fieldset> </div>       
        </div>       
    </div>
    <div class="dados-p">
        <h5>Pedidos</h5>
        <div class="pedidos"> 
            <div class="abertos">
                @foreach ($pedidos as $pedido)
                <div class="aberto">
                    @if ($pedido->status <> 'finalizado')                
                        <div class="hederpedido"> <div> Pedido: {{$pedido->id}} </div> <div> Status: {{$pedido->status}}</div></div>    
                       
                        <div class="dados-venda">
                            <div class="itens">
                                @foreach ($pedido->itens as $item)
                                    <div class="img-produto">
                                        @if (empty($item->produto->imagem['path']) )
                                            img
                                        @else
                                            <img src="{{ asset('storage/'.$item->produto->imagem['path'])}}" alt="">
                                        @endif
                                    </div>
                                    <div class="pequeno">{{$item->produto->nome}}</div>  
                                @endforeach
                            </div>
                            <div class="inf">
                                <div class=""> Tipo pedido:{{$pedido->tipopedido}}</div>
                                @if ($pedido->tipopedido == 'retirada')
                                    reti
                                @else                             
                                    <div class=""> Endereço: {{$pedido->id_endereco}}</div>
                                @endif   
                                <div class=""> Valor: {{$pedido->valor}}</div>
                            </div>  
                        </div>     
                        
                        
                    @endif                
                </div>
                @endforeach
             </div> 
            <div class="finalizados">
                @foreach ($pedidos as $pedido)
                @if ($pedido->status == 'finalizado')               
                        <div class="pequeno"> ID: {{$pedido->id}}</div>
                        <div class="pequeno"> Valor: {{$pedido->valor}}</div>
                        <div class="pequeno"> Endereço: {{$pedido->id_endereco}}</div>
                        <div class="pequeno"> Tipo pedido:{{$pedido->tipopedido}}</div>
                @endif
                @endforeach
            </div>            
        </div>
    </div>
    <div class="dados">
        <h5>Endereço</h5>
        <div class="endereco"> 
            @foreach ($enderecos as $endereco)
            <div class="pequeno">ID: {{$endereco->id}}</div>
            <div class="grande"> Endereço: {{$endereco->endereco}}</div>
            <div class="medio"> CEP: {{$endereco->cep}}</div> 
            @endforeach
        </div>
    </div>
</div>
@endsection