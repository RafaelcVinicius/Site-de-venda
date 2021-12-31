<link rel="stylesheet" href="{{asset('css/site/siteindex.css')}}">
@extends('layouts.site.site')
@section('corpo')
    <div class="img-ecommers">
        <img src="img/E-commerce.png" alt="fundo">
    </div>
    <div class="produtos">
        <div class="ofertas">
            <span>Ofertas do dia</span>
        </div>
        <section>
            <div class="grid-produtos">
                @foreach ($produtos as $produto)
                <article class="article-produto">
                    <a href="{{route('produto', $produto['nome'])}}">
                        <div class="produto">
                            <Div class="img-produto">
                                @if (empty($produto->imagem['path']) )
                                     img
                                @else
                                    <img src="{{ asset('storage/'.$produto->imagem['path'])}}" alt="">
                                @endif
                            </Div>
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