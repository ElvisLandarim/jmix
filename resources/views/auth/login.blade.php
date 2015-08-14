<!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Área do Cliente - JMIX</title>

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gafata|Nobile:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

</head>

<body>

<div id="wrapper">
    <div id="box">
        <div id="top_header">
            <h3><img src="{{asset('Img/logo-jmix-black.png')}}" title="DECOR STUDIO JMIX"/></h3>
            <h5>Bem Vindo a sua Área Administrativa.</h5>
        </div>

        <div id="inputs">
            <form id='login' action='{{route('login')}}' method='post' accept-charset='UTF-8' style="margin-left:6px;">

                {!! csrf_field() !!}

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='container'>
                    <input type='email' required name='email' id='email' value='{{ old('email') }}' maxlength="50" size="30" placeholder="E-Mail"/><br/>
                </div>

                <div class='container'>
                    <input type='password' required name='password' id='password' maxlength="50" size="30" placeholder="Senha" /><br/>
                </div>

                <div class='container'>
                    <input type='submit' name='Submit' value='Login' />
                </div>

            </form>

            <div id="bottom">
                <a href="#">Criar uma conta</a>
                <a class="right_a" href="#">Esqueceu sua senha?</a>
            </div>
        </div>
    </div>
</div>


</body>
</html>