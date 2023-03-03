@extends('En.layouts.mae')

@section('title', 'Teste língua')

@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Events search</h1>
        <form action="/" method="GET">
            <input type="text" class="form-control" name="search" placeholder="Procurar...">
        </form>
    </div>

    <div id="events-container" class="col-md-12">
        @if($search)
            <h2>Buscando por: {{ $search }}</h2>
        @else
            <h2>Proximos Eventos</h2>
            <p class="subtitle">Veja os eventos dos próximos dias</p>
        @endif
        <div id="cards-container" class="row">
            @foreach($events as $busca)
                <div class="card col-md-3">
                    <img src="/img/events/{{ $busca->image }}" alt="{{ $busca->title }}">
                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/Y', strtotime($busca->date)) }}</p>
                        <h5 class="card-title">{{ $busca->title }}</h5>
                        <p class="card-participants">{{ count($busca->users) }} Participantes</p>
                        <a href="/events/{{ $busca->id }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach

            @if(count($events)==0 && $search)
                <p>Não foi possível encontar nenhum evento {{ $search }}! <a href="/">Ver todos eventos</a></p>
            @elseif(count($events)==0)
                <p>Não há eventos disponíveis!</p>
            @endif
        </div>
    </div>
@endsection
