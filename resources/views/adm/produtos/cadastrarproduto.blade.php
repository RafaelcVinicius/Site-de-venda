@extends('layouts.adm.admsite')
@section('corpo')
<Div class="tudo">
    <div class="corpo">
        <Div class="header">
            <H3>Produtos</H3>
        </Div>
        <div class="cadastro">
            <form class="form" action="{{route('produtos.store')}}" method="post" enctype="multipart/form-data">
                @csrf
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
                                        <input type="text" name="nome" id="nome">
                                    </fieldset>
                                </div>
                        
                            <section class="vq">  
                                <fieldset class="input ">
                                    <legend><label for="qtde">Quantidade</label></legend>
                                    <input type="number" name="qtde" id="Quantidade">
                                </fieldset>

                                <fieldset class="input">
                                    <legend><label for="valor">Valor</label></legend>
                                    <input type="number" name="valor" id="valor">
                                </fieldset> 
                            </section> 
                        </div>
                    </section>
                    <section class="section-2">
                        <fieldset class="input-file">
                            <legend><label for="img">Imagem</label></legend>
                            <input type="file" name="img" id="img">
                        </fieldset> 
                    </section>                    
                </section>
            </form>

        </div>
    </div>
</Div>
@endsection