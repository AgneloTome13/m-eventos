@extends('layouts.main')
@section('title', 'Criar Evento')
@section('content')
    <div class="col-md-6 offset-md-3">
        <h3 class="my-5">Crie o seu evento</h3>

        <form action="/event" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Imagem do Evento: </label>
                <input type="file" id="image" name="image" class="form-contro-file">
            </div>

            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="title">Evento: </label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Nome do evento">
                </div>

                <div class="form-group col-sm-6">
                    <label for="title">Data do evento: </label>
                    <input type="date" class="form-control" name="date" id="date">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="title">Cidade: </label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="Local do evento">
                </div>

                <div class="form-group col-sm-6">
                    <label for="title">O evento é privado?</label>
                    <select name="private" id="private" class="form-control">
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="title">Descrição: </label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento..."></textarea>
            </div>

            <div class="form-group">
                <label for="title">Adicione itens de infraestrutura: </label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                </div>

                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco"> Palco
                </div>

                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cerveja grátis"> Bar aberto
                </div>

                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open food"> Música ao vivo
                </div>

                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes"> Brindes
                </div>
            </div>

            <input type="submit" class="btn btn-primary mb-5" value="Criar evento">
        </form>
    </div>
@endsection
