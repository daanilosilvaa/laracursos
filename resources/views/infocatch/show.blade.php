@extends('adminlte::page')

@section('title', "Informação de Captura: $infoCatch->name")

@section('content_header')
    <h1>Exibindo Informação de Captura: {{ $infoCatch->name }}</h1>
@stop

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <ul>
                    <li><strong>Nome: </strong> {{ $infoCatch->name }}</li>
                </ul>
                <ul>
                    <li><strong>Email: </strong> {{ $infoCatch->email }}</li>
                </ul>
                <ul>
                    <li><strong>Telefone: </strong> {{ $infoCatch->phone }}</li>
                </ul>
                <ul>
                    <li><strong>Adicionar grupo no? </strong> {{ $infoCatch->active == "A"? "SIM" : "NÃO" }}</li>
                </ul>

            </div>
            <div class="row" style="justify-content: center">
                <div class="form-group col-md-1">
                   <a href="{{ route('infocatchs.index') }}" class="btn btn-warning">Voltar</a>
                </div>
               <form action="{{ route('infocatchs.destroy', $infoCatch->id) }}" method="post">
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


