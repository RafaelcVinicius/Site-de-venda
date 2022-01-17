
@extends('layouts.site.site')
@section('corpo')
        @foreach ($pedidos as $pedido)
        {{$pedido->id}}
        {{$pedido->valor}}
        {{$pedido->id_endereco}}
        {{$pedido->tipopedido}} <br><br>
            
        @endforeach
@endsection