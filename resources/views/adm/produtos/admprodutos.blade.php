@extends('layouts.adm.admsite')

@section('corpo')
<Div class="corpo">
    <Div class="header">
        <H3>Produtos</H3>
        <a href="{{route('produtos.create')}}">Cadastrar Produto</a>
    </Div>
    <div class="filtro">
        
    </div>
    <div class="produtos">
        
    </div>
</Div>
@endsection