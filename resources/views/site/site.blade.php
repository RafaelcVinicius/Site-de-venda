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
                    <Div class="div-comprar">
                        <form class="form-produto" name="comprar">
                                @csrf   
                                @if(empty(Auth::user()->id))   
                                <input type="hidden" name="id_user" value="">
                                @else
                                <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                                @endif
                                <input type="hidden" name="qtde" value="1">
                                <input type="hidden" name="valor_un" value="{{$produto['valor']}}">
                                <input type="hidden" name="id_produto" value="{{$produto['id']}}">
                                <div class="href-pro"><a  href="{{route('produto', $produto['nome'])}}">Ver Produto</a></div>
                                <div class="btn-comprar"><button  type="submit"><svg viewBox="0 0 154 150" width="26px" height="26px" class="svg-pro"><g id="Camada_x0020_1"><path d="M48 120c-8,0 -14,7 -14,15 0,8 6,15 14,15 9,0 15,-7 15,-15 0,-8 -6,-15 -15,-15l0 0zm91 -22c4,0 7,3 7,7 0,4 -3,8 -7,8l0 0 -91 0c-8,0 -15,-7 -15,-15 0,-3 1,-6 2,-8l10 -18 -27 -57 -10 0 0 0c-5,0 -8,-3 -8,-7 0,-5 3,-8 8,-8l0 0 20 0 7 15 111 0c4,0 8,3 8,8 0,1 -1,2 -1,3l-27 49c-3,4 -8,8 -13,8l-56 0 -7 12 0 1c0,1 1,2 2,2l87 0zm-15 22c-9,0 -15,7 -15,15 0,8 6,15 15,15 8,0 15,-7 15,-15 0,-8 -7,-15 -15,-15z" class="fill-produto"></path></g></svg></button></div>
                        </form>
                    </Div>
                </article>
            @endforeach
            </div>
        </section>
    </div>



    <script>

        $(function(){
            $('form[name="comprar"]').submit(function(event){
                        event.preventDefault();
        
                    $.ajax({
                            url: "{{route('comprar')}}",
                            type: "POST",
                            data: $(this).serialize(),
                            dataType: 'json',
                            success: function(response){           
                                if(response.Success == false){
                                    window.location.href = "{{route('login')}}"
                                }else{
                                    $('#qtde-venda').html(response.qtde);
                                }
        
                                    console.log(response);
                            }
                    });
            });
        });
        </script>
@endsection