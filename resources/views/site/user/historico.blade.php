<link rel="stylesheet" href="{{ asset('css/site/sitehistorico.css')}}">
@extends('layouts.site.site')
@section('corpo')
<div class="corpo">

        <table id="table_id" class="display">
            <thead>                
                <tr>
                    <th>ID</th>
                    <th>Endereço</th>
                    <th>Tipo pedido</th>
                    <th>Subtotal</th>
                    <th>Data</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{$pedido->id}}</td>
                    <td>@if ($pedido->id_endereco == null)
                        Local
                    @else
                        {{$pedido->endereco->endereco}}
                    @endif</td>
                    <td>{{$pedido->tipopedido}}</td>
                    <td>{{$pedido->valor}}</td>
                    <td>{{$pedido->status}}</td>    
                    <td>{{/*route('')*/}} </td>      
                </tr>
                @endforeach
            </tbody>
        </table>
</div>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script type="text/javascript"> 
$(document).ready( function () {
    $('#table_id').DataTable();
} );

</script>


@endsection