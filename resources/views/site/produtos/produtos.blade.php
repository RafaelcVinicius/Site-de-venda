<link rel="stylesheet" href="{{asset('css/site/siteprodutos.css')}}">
@extends('layouts.site.site')
@section('corpo')
<div class="todos">
    <Div class="text">
        <span>Produtos</span>
    </Div>
    <section>
        <div class="grid-produtos">
            @foreach ($produtos as $produto)
            <article class="article-produto">
                <a href="{{route('produto', $produto['nome'])}}">
                    <div class="produto">
                        <Div class="img">img</Div>
                        <div class="dados">
                            <div class="info">
                                <div class="nome">{{$produto['nome']}}</div>  
                                                    
                            </div>
                            <div class="aval">

                            </div> 
                            <div class="valores">
                            <Div class="valor"> R$ {{$produto['valor']}} </Div>
                            </div>
                        </div>
                    </div>
                </a>
            </article>
        @endforeach
        </div>
</section>
</div>
@endsection