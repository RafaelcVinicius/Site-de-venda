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
            @foreach ($protutos as $protuto)
            <article class="article-produto">
                <a href="{{route('produtos.edit', $protuto['id'])}}">
                    <div class="produto">
                        <Div class="img">img</Div>
                        <div class="dados">
                            <div class="info">
                                <div class="nome">{{$protuto['nome']}}</div>
                                <div class="id"> cód. {{$protuto['id']}}</div>                        
                            </div>
                            <div class="valores">
                            <Div class="qtde"> Qtde: {{$protuto['qtde']}} </Div>
                            <Div class="valor"> R$ {{$protuto['valor']}} </Div>
                            </div>
                        </div>
                    </div>
                </a>
                <Div class="btn-delete">
                    <form action="{{route('produtos.destroy', $protuto['id'])}}" method="POST">
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