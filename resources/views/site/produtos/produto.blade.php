<link rel="stylesheet" href="{{asset('css/site/siteproduto.css')}}">
@extends('layouts.site.site')
@section('corpo')
<div class="tudo">
    <section>
        <div class="produto">
            <div class="up">
                <div class="foto">

                </div>
                <div class="dados">
                    <div class="nome">{{$produto['nome']}}</div>
                    <div class="v-q">
                        <div class="valor">R$ {{$produto['valor']}}</div>
                        <div class="qtde-disponivel">Qtde Disponível: {{$produto['qtde']}}</div>
                    </div>
                    <form class="form" action="" method="post">
                        <input type="hidden" name="id_produto" value="{{$produto['id']}}">
                        <input type="hidden" name="valor_un" value="{{$produto['valor']}}">
                        <div class="qtde"><label for="qtde">Qtde:</label> <input type="number" name="qtde" id="qtde" min="1" max="{{$produto['qtde']}}"></div>
                        <div class="btn-car"><button type="submit">Adicionar ao carrinho</button></div>
                        <div class="btn-comprar"><button type="submit">Comprar</button></div>
                    </form>
                </div>
            </div>
            <div class="aval">
                <span>Sua avaliação sobre o produto</span>
                <div class="svg">
                    <i onclick="avaliarProduto(this)" data-marcado="0"><svg viewBox="0 0 230 219" height="30px" width="30px"><g id="Camada_x0020_1"><polygon points="115,176 186,219 167,138 230,83 147,76 115,0 83,76 0,83 63,138 44,219 "></polygon></g></svg></i>               
                    <i onclick="avaliarProduto(this)" data-marcado="0"><svg viewBox="0 0 230 219" height="30px" width="30px"><g id="Camada_x0020_1"><polygon points="115,176 186,219 167,138 230,83 147,76 115,0 83,76 0,83 63,138 44,219 "></polygon></g></svg></i>
                    <i onclick="avaliarProduto(this)" data-marcado="0"><svg viewBox="0 0 230 219" height="30px" width="30px"><g id="Camada_x0020_1"><polygon points="115,176 186,219 167,138 230,83 147,76 115,0 83,76 0,83 63,138 44,219 "></polygon></g></svg></i>
                    <i onclick="avaliarProduto(this)" data-marcado="0"><svg viewBox="0 0 230 219" height="30px" width="30px"><g id="Camada_x0020_1"><polygon points="115,176 186,219 167,138 230,83 147,76 115,0 83,76 0,83 63,138 44,219 "></polygon></g></svg></i>
                    <i onclick="avaliarProduto(this)" data-marcado="0"><svg viewBox="0 0 230 219" height="30px" width="30px"><g id="Camada_x0020_1"><polygon points="115,176 186,219 167,138 230,83 147,76 115,0 83,76 0,83 63,138 44,219 "></polygon></g></svg></i>
                    <div><span>0</span></div>
                    <div><button>Avaliar</button></div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection