@extends('adminlte::page')

@section('title', "História -  $me->title")

@section('content_header')
    <h1>Exibindo Minha História: <b> {{ $me->title }}</b></h1>
@stop

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <ul>
                    <li style="list-style: none; margin-left: 25%"> <img src="{{ url("storage/$me->image ") }}" class="rounded" alt="{{ $me->name }}"  style="max-height: 350px"></li>
                </ul>
                <ul>
                    <li><strong>Título: </strong> {{ $me->title }}</li>
                </ul>
                <ul>
                    <li><strong>Ativo?: </strong> {{ $me->active == "A"? "SIM" : "NÃO" }}</li>
                </ul>
                <ul>
                    <li><strong>Descrição: </strong> {{ $me->description }}</li>
                </ul>

            </div>
            <div class="row" style="justify-content: center">
                <div class="form-group col-md-1">
                   <a href="{{ route('mes.index') }}" class="btn btn-warning">Voltar</a>
                </div>
               <form action="{{ route('mes.destroy', $me->id) }}" method="post">
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


