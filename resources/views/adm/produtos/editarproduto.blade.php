<link rel="stylesheet" href="{{asset('css/adm/editproduto.css')}}">
@extends('layouts.adm.admsite')
@section('corpo')
<Div class="tudo">
    <div class="corpo">
        <Div class="header">
            <H3>Produto</H3>
        </Div>
        <div class="cadastro">
            <form class="form" action="{{route('produtos.update', $produto['id'])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                <section class="btn-form">
                    <div class="btn">
                        <button type="submit" id="Gravar">Gravar</button>
                    </div> 
                </section>
                <section class="section-dados">
                <section class="section-1">
                        <div class="dados">   
                            
                                <div class="nome">  
                                    <fieldset class="input">
                                        <legend><label for="nome">Nome</label></legend>  
                                        <input type="text" name="nome" value="{{$produto['nome']}}" id="nome">
                                    </fieldset>
                                </div>
                        
                            <section class="vq">  
                                <fieldset class="input ">
                                    <legend><label for="qtde">Quantidade</label></legend>
                                    <input type="number" value="{{$produto['qtde']}}" name="qtde" id="Quantidade">
                                </fieldset>

                                <fieldset class="input">
                                    <legend><label for="valor">Valor</label></legend>
                                    <input type="number" value="{{$produto['valor']}}" name="valor" id="valor">
                                </fieldset> 
                            </section> 
                        </div>
                </section>
                <section class="section-2">
                    <fieldset class="input-file">
                        <legend><label for="img">Imagem</label></legend>
                        <input type="file" name="img" id="img">
                    </fieldset> 
                    <section class="img-produtos">
                        <Div class="img-produto">
                            @if (empty($produto->imagem['path']) )
                                img
                            @else
                                <img src="{{ asset('storage/'.$produto->imagem['path'])}}" alt="">
                            @endif
                        </Div>
                    </section>
                </section>
            </section>
            </form>
        </div>
    </div>
</Div>
@endsection