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
    <div class="dados">
        <h5>Pedidos</h5>
        <div class="pedidos">
            @foreach ($pedidos as $pedido)
                <div class="pequeno"> ID: {{$pedido->id}}</div>
                <div class="pequeno"> Valor: {{$pedido->valor}}</div>
                <div class="pequeno"> Endereço: {{$pedido->id_endereco}}</div>
                <div class="pequeno"> Tipo pedido:{{$pedido->tipopedido}}</div>
            @endforeach
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