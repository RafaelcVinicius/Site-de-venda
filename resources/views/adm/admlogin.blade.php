<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/admlogin.css')}}">

    <title>Login</title>

</head>
<body>
    
    <Div class="login">
        <img  class="baner" src="{{ asset('img/login.jpg')}}" alt="img">       
        <section class="section-login">
            <div class="login-form">
                <H3>Login</H3>
                <form autoComplete="off" action="{{route('logar')}}"  method="POST">
                    @csrf
                        <fieldset class="field">
                            <legend>CNPJ / CPF</legend>
                            <input type="number" name="cnpjcpf">
                        </fieldset>
                        <fieldset class="field " >
                            <legend>Senha</legend>
                            <input type="password" name="senha">
                        </fieldset>
                    
                    <button class="d" type="submit" value="Entrar">Entrar</button>
                    
                </form>    
            </div>
        </section>
    </Div>
</body>
</html>