<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fontes Bootstrap -->
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
        <script src="/bootstrap/js/bootstrap.min.js"></script>
        <!-- Css da aplicação -->
        <link rel="stylesheet" href="/css/style.css">
        <!-- Java Script da aplicação -->
        <script src="/js/script.js"></script>
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="#">M Eventos</a>
            </div>
            <div class="menu-toggle"></div>
            <nav>
                <ul class="menu">
                    <li><a href="#inicio" class="add active">Eventos</a></li>
                    <li><a href="#sobre" class="add">Criar Eventos</a></li>
                    <li><a href="#servicos" class="add">Entrar</a></li>
                    <li><a href="#galeria" class="add">Cadastrar</a></li>
                </ul>
            </nav>
        </header>



        <footer>
            <p>HDC Events &copy; 2022</p>
        </footer>
    </body>
</html>
