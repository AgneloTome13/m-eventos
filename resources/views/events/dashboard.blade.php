@extends('layouts.main')
@section('title', 'Meus Eventos')
@section('content')
    <div class="col-md-10 mt-5 text-center offset-md-1 dashboard-title-container">
        <h1>Meus Eventos</h1>
    </div>

    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if(count($events) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scop="col">#</th>
                    <th scop="col">Nome</th>
                    <th scop="col">Participantes</th>
                    <th scop="col">Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach($events as $event)
                <tr>
                    <td scropt="row">{{ $loop->index + 1 }}</td>
                    <td><a href="/events/{{$event->id}}">{{$event->title}}</a></td>
                    <td>{{count($event->users)}}</td>
                    <td>
                        <a href="/events/edit/{{$event->id}}" class="btn btn-warning edit-btn btn-sm">Editar</a>
                        <form action="/events/{{ $event->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn btn-sm">Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>Você ainda não tem Eventos, <a href="/events/create">Criar evento</a></p>
        @endif
    </div>
    <div class="col-md-10 text-center offset-md-1 dashboard-title-container">
        <h1>Eventos que estou participando</h1>
    </div>

    <div class="col-md-10 mb-5 offset-md-1 dashboard-events-container">
        @if(count($eventsAsParticipant) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scop="col">#</th>
                        <th scop="col">Nome</th>
                        <th scop="col">Participantes</th>
                        <th scop="col">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($eventsAsParticipant as $event)
                    <tr>
                        <td scropt="row">{{ $loop->index + 1 }}</td>
                        <td><a href="/events/{{$event->id}}">{{$event->title}}</a></td>
                        <td>{{count($event->users)}}</td>
                        <td>
                            <form action="/events/leave/{{$event->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delet-btn btn-sm">
                                    Sair do evento
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Você ainda não está participando de um evento, <a href="/">Veja todos os eventos</a></p>
        @endif
    </div>
@endsection
