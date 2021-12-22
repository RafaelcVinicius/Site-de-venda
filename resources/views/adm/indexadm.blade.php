@extends('layouts.adm')

@section('corpo')
<div class="index">
    
    <section class="inicio" >
        <aside class="baner" style="background-image: url('img/fundoinicio.jpg')"></aside>
        <div class="sobre">
            <div>
                <h3>Bem vindo(a),
                    a sua loja virtual..</h3>
            </div>
            <div class="user">   
                <h6>Você está logado como:</h6>
                <h5>{{session()->get('nome')}}</h5>  
            </div>
        </div>
    </section>

    <section class="modu">
        <div class="modulos">
            <div class="mo f">
                <h5>Em Construção</h5>
                <div><span class="f">Acessar</span></div>
            </div>
            <div class="mo">
                <h5>Meu Site</h5>
                <div><span>Acessar</span></div>
            </div>
            <div class="mo f">
                <h5 >Em Construção</h5>
                <div ><span class="f">Acessar</span></div>
            </div>
        </div>
    </section>
</div>
@endsection

