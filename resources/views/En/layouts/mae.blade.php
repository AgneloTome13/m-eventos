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
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class=" collapse navbar-collapse" id="navbar">
                    <a href="navbar-brand">
                        <img src="/img/hdcevents_logo.svg" alt="HDC Events Logo">
                    </a>

                    <ul class="navbar-nav">
                       <li class="nav-item">
                           <a href="/en" class="nav-link">Events</a>
                       </li>

                       <li class="nav-item">
                           <a href="/events/create" class="nav-link">Create Event</a>
                       </li>

                       @auth
                       <li class="nav-item">
                           <a href="/dashboard" class="nav-link">My Events</a>
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
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Login</a>
                        </li>

                        <li class="nav-item">
                            <a href="/register" class="nav-link">Register</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>
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
            <p>HDC Events &copy; 2022</p>
        </footer>
    </body>
</html>
