@extends('layouts.adm.admsite')

@section('corpo')
<Div class="tudo">
    <Div class="corpo">
        <Div class="header">
            <H3>Produtos</H3>
            <a href="{{route('produtos.create')}}">Cadastrar Produto</a>
        </Div>
        <div class="filtro">
            
        </div>
        <div class="grid-produtos">
            @foreach ($produtos as $produto)
            <article class="article-produto">
                <a href="{{route('produtos.edit', $produto['id'])}}">
                    <div class="produto">
                        <Div class="img">img</Div>
                        <div class="dados">
                            <div class="info">
                                <div class="nome">{{$produto['nome']}}</div>
                                <div class="id"> cód. {{$produto['id']}}</div>                        
                            </div>
                            <div class="valores">
                            <Div class="qtde"> Qtde: {{$produto['qtde']}} </Div>
                            <Div class="valor"> R$ {{$produto['valor']}} </Div>
                            </div>
                        </div>
                    </div>
                </a>
                <Div class="btn-delete">
                    <form action="{{route('produtos.destroy', $produto['id'])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </Div>
            </article>
           @endforeach
        </div>
    </Div>
</Div>
@endsection