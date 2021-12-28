@extends('layouts.adm.admsite')
@section('corpo')
<Div class="tudo">
    <div class="corpo">
        <Div class="header">
            <H3>Produto</H3>
        </Div>
        <div class="cadastro">
            <form action="{{route('produtos.update', $produto['id'])}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="btn">
                    <button type="submit" id="Gravar">Gravar</button>
                </div> 
                <section>
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
            </form>
        </div>
    </div>
</Div>
@endsection