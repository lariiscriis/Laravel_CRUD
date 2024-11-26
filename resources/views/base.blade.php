<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="assets/feliz.png" type="image/svg+xml">
    <title>@yield('titulo')</title>
</head>
<body>
    <header> 
        <div id="container-flex">
        <h1>Framework Level</h1>
     
        <div>
            <a href="/">Home</a>
            <a href="sobre">Sobre</a>
            <a href="usuarios">Usuários</a>
            <a href="entrar_usuario" class="botao_login">Entrar</a>

        </div>
    </header>
    </div>
    <main>
        @yield('main')

    </main>
    <footer>
 <p>Todos os direitos reservados @2024</p>
    </footer>
</body>
</html>