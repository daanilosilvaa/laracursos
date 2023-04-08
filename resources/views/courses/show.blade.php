@extends('adminlte::page')

@section('title', 'Dashboard-Exibindo')

@section('content_header')
    <h1>Exibindo Course {{ $course->name }}</h1>
@stop

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <ul>
                    <li><strong>Nome: </strong> {{ $course->name }}</li>
                </ul>
                <ul>
                    <li><strong>Preço Venda Anterior: </strong> {{  number_format($course->price_commission, 2, ',', '.') }}</li>
                </ul>
                <ul>
                    <li><strong>Preço Venda Atual: </strong> {{ number_format($course->price_current, 2, ',','.') }}</li>
                </ul>
                <ul>
                    <li><strong>Comissão de Venda: </strong> {{ number_format($course->commission, 2, ',' ,'.') }}</li>
                </ul>
                <ul>
                    <li><strong>link: </strong> {{ $course->link }}</li>
                </ul>
                <ul>
                    <li><strong>Ativo?: </strong> {{ $course->active == "A"? "SIM" : "NÃO" }}</li>
                </ul>

            </div>
            <div class="row" style="justify-content: center">
                <div class="form-group col-md-1">
                   <a href="{{ url()->previous() }}" class="btn btn-warning">Voltar</a>
                </div>
               <form action="{{ route('categories.destroy', $course->id) }}" method="post">
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


