<link rel="stylesheet" href="{{ asset('css/site/siteperfil.css')}}">
@extends('layouts.site.site')
@section('corpo')
<div class="corpo">

    <h3>Dados da conta</h3>

    
    <div class="dados">
        <h5>Dados User</h5>
        <div class="dadosuser">
            <div class="pequeno"> <fieldset><legend> Nome:</legend> {{$dados->name}}</fieldset></div>
            <div class="pequeno"><fieldset><legend>Email:</legend> {{$dados->email}}</fieldset> </div>       
        </div>       
    </div>

    <div class="dados">
        <div class="ende-header">
            <h5>Endereço</h5>
            <a class="criar-en" href="{{route('endereco.create')}}">Adicionar endereço de entrega</a>
        </div>
        <div class="endereco"> 
            @foreach ($enderecos as $endereco)
            <div class="dados-endereco">
                <div class="info-endereco">
                    <div class="nome-en">Nome: {{$endereco->nome}}</div>
                    <div class="dados-en"> Endereço: {{$endereco->endereco}}</div>
                    <div class="dados-en"> CEP: {{$endereco->cep}}</div> 
                </div>
                <div>
                    <div class="btn-s">
                        <a class="del" href="">Deletar</a>
                        <a class="Alt" href="">Alterar</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="dados-p">
        <h5>Meus pedidos</h5>
        <div class="pedidos"> 
            <div class="abertos">
                @foreach ($pedidos as $pedido)
                <div class="aberto">
                    @if ($pedido->status <> 'Finalizado')                
                        <div class="hederpedido"> <div> Pedido: {{$pedido->id}} </div> <div class="">Status: {{$pedido->status}}<div class="data">
                            Pedido Recebido {{date('d/m/y - H:i', strtotime($pedido->created_at))}}</div> </div> </div>    
                       
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
                                    <div class="dados-produto">
                                        <div>
                                            <div  class="dados-produto-header">
                                                    <div class="margin-right-20 tiulo">Qtde.</div>  <div class="tiulo"> Preço.</div>
                                            </div>
                                            <hr>
                                            <div  class="dados-produto-header">
                                                <div class="margin-right"> {{$item->qtde}} </div>  <div>R$ {{$item->valor}}</div>
                                        </div>
                                        </div>
                                     <div class="nomeproduto"><a href="{{route('produto', $item->produto->nome)}}">{{$item->produto->nome}}</a></div>
                                    </div>  
                                @endforeach
                            </div>
                            <div class="inf">
                               
                                @if ($pedido->tipopedido == 'Retirada')
                                <div class="tipopedido"> 
                                    <div class="emlinha"> <div class="tiulo"> Tipo pedido:</div> <div>{{$pedido->tipopedido}}</div></div>
                                    <div>
                                        <div class="tiulo">Endereço para retirada:</div><br>
                                        <div>
                                            Rua Dr Maruri, 990 - 4º e 5º Andar
                                            Salas 401, 402, 403 e 502
                                            Centro - Concórdia - SC
                                            CEP: 89700-168 
                                        </div>
                                    </div>
                                </div>
                                @else 
                                <div class="tipopedido"> 
                                    <div class="emlinha"><div class="tiulo"> Tipo pedido: </div> <div>{{ $pedido->tipopedido}}</div></div>
                                    <div class="entrega">
                                        <div class="tiulo">Endereço para entrega: </div>
                                        <div class="entrega">
                                             {{$pedido->endereco->endereco}}   CEP: {{$pedido->endereco->cep}}
                                        </div>
                                    </div>
                                </div>
                                @endif   
                                <div class="valor"> Subtotal: <Hr> <div>R${{$pedido->valor}}</div></div>
                            </div>  
                        </div>      
                    @endif                
                </div>
                @endforeach
             </div> 
            <div class="finalizados">
                <a class="historico" href="{{route('historico')}}">Histórico dos pedidos</a>
                
            </div>            
        </div>
    </div>



</div>


@endsection

