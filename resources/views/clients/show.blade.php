@extends('adminlte::page')

@section('title', 'Dashboard-Exibindo')

@section('content_header')
    <h1>Exibindo Clientes {{ $client->name }}</h1>
@stop

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <ul style="list-style: none;">
                    <li><strong>Nome: </strong> {{ $client->name }}</li>
                    <li><strong>E-mail: </strong> {{ $client->email }}</li>
                    <li><strong>Telefone: </strong> {{ $client->phone }}</li>
                    <li><strong>Ativo para receber E-mail de novos cursos: </strong> {{ $client->active_email == 'A'? 'Sim' : 'Não' }}</li>
                    <li><strong>Numero ativo de novos cursos: </strong> {{ $client->active_phone == 'A'? 'Sim' : 'Não' }}</li>
                    <li><strong>Ativo para receber menssagens whats de novos cursos: </strong> {{ $client->phone_whats == 'A'? 'Sim' : 'Não' }}</li>
                    <li><strong>Sugestão: </strong> <textarea name="description" class="form-control" style="display: block" cols="50" disabled rows="10">{{ $client->description }}</textarea></li>
                </ul>


            </div>
            <div class="row" style="justify-content: center">
                <div class="form-group col-md-1">
                   <a href="{{ route('clients.index') }}" class="btn btn-warning">Voltar</a>
                </div>
               <form action="{{ route('clients.destroy', $client->id) }}" method="post">
                <div class="form-group">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Apagar</button>
                 </div>
            </form>
            </div>
        </div>
    </div>

</div>



@stop


