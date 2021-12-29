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
                @foreach ($protutos as $protuto)
                <article class="article-produto">
                    <a href="{{route('produtos.edit', $protuto['id'])}}">
                        <div class="produto">
                            <Div class="img">img</Div>
                            <div class="dados">
                                <div class="info">
                                    <div class="nome">{{$protuto['nome']}}</div>  
                                                        
                                </div>
                                <div class="aval">
                                        
                                </div> 
                                <div class="valores">
                                <Div class="valor"> R$ {{$protuto['valor']}} </Div>
                                </div>
                            </div>
                        </div>
                    </a>
                </article>
            @endforeach
            </div>
        </section>
    </div>
    <div class="rodape">
        <footer>
            
        </footer>
    </div>

@endsection