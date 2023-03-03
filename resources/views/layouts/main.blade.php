<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fontes Bootstrap -->
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
        <!-- Css da aplicação -->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Java Script da aplicação -->

    </head>
    <body>
        <header>
            <div class="container">
                <a href="#" class="logo">M Eventos</a>
                <div class="menu-toggle"></div>
                <nav>
                    <ul>
                        <li><a href="/" class="active">Eventos</a></li>
                        <li><a href="/events/create">Criar Evento</a></li>
                       @auth
                       <li class="nav-item">
                           <a href="/dashboard" class="nav-link">Meus Eventos</a>
                       </li>

                       <li class="nav-item">
                           <form action="/logout" method="POST">
                               @csrf
                               <a href="/logout" class="nav-link" onclick="event.preventDefault();
                                this.closest('form').submit();">Sair</a>
                           </form>
                       </li>
                       @endauth

                       @guest
                        <li><a href="/login">Entrar</a></li>
                        <li><a href="/register">Cadastrar</a></li>
                        @endguest
                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>
        </header>

        <main>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>

        <footer>
            <p>&copy; Copyright<strong> M Eventos</strong>. Todos os direitos reservados</p>
            <p>Desenvolvido por <a href="#" class="desenvolvedor">Agnelo Tomé</a></p>
        </footer>

        <script src="/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="/js/script.js"></script>
    </body>
</html>
