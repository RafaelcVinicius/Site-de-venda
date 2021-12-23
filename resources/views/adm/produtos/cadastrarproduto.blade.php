@extends('layouts.adm.admsite')
@section('corpo')
<Div class="tudo">
    <div class="corpo">
        <Div class="header">
            <H3>Produtos</H3>
        </Div>
        <div class="cadastro">
            <form action="{{route('produtos.store')}}" method="post">
                @csrf

                <div class="btn">
                    <input type="submit" id="Gravar" value="Gravar">
                </div> 
                <section>
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
                                <input type="number" name="Quantidade" id="Quantidade">
                            </fieldset>

                            <fieldset class="input">
                                <legend><label for="valor">Valor</label></legend>
                                <input type="number" name="valor" id="valor">
                            </fieldset> 
                        </section> 
                    </div>
                </section>
            </form>
        </div>
    </div>
</Div>
@endsection