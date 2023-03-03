@extends('layouts.main')

@section('title', 'M Eventos')

@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Busque um Evento</h1>
        <form action="/" method="GET">
            <input type="text" class="form-control" name="search" placeholder="Procurar...">
        </form>
    </div>

    <div class="container">
        <div class="eventos my-5">
            @if($search)
            <h2>Buscando por: {{ $search }}</h2>
            @else
                <h2 class="text-center">Proximos Eventos</h2>
                <p class="subtitle text-center">Veja os eventos dos próximos dias</p>
            @endif

            <div class="row mt-5">
                @foreach($events as $busca)
                <div class="col-sm-4">
                    <div class="card">
                        <img src="/img/events/{{ $busca->image }}" alt="{{ $busca->title }}" height="250">
                        <div class="card-body">
                            <p class="card-date">{{ date('d/m/Y', strtotime($busca->date)) }}</p>
                            <h5 class="card-title">{{ $busca->title }}</h5>
                            <p class="card-participants">Participantes: {{ count($busca->users) }}</p>
                            <a href="/events/{{ $busca->id }}" class="btn btn-primary">Saber mais</a>
                        </div>
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

        @if(count($events)!=0)
            <div class="paginacao d-flex justify-content-center mb-5">
                {{ $events->links() }}
            </div>
        @endif
    </div>
@endsection
