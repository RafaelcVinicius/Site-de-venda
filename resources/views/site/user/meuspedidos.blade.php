
@extends('layouts.site.site')
@section('corpo')


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>


<form name="pes" id="pes">
        @csrf
        <input type="text" name="email" id="email" />
        <input type="text" name="senha"  id="senha" />
        <Button type="submit">Enviar</Button>
</form>

<div id="dados"> aqui</div>

<script>

$(function(){
        $('form[name="pes"]').submit(function(event){
                event.preventDefault();
               
                var email = document.getElementById('email').value;
                var senha = document.getElementById('senha').value;
                var dado = {      
                'email': email,
                'senha': senha
                }

                var dados = JSON.stringify(dado);

                $(function(event){              
                $.ajax({
                        url: "{{route('pro')}}",
                        type: "POST",
                        data: {dados},
                        dataType: 'json',
                        success: function(response){
                                console.log(response);
                                
                        }
                });
        });
});
});

</script>



    
@endsection

 @foreach ($pedidos as $pedido)
        {{$pedido->id}}
        {{$pedido->valor}}
        {{$pedido->id_endereco}}
        {{$pedido->tipopedido}} <br><br>
            
       @endforeach