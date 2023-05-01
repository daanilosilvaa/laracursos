@extends('adminlte::page')

@section('title', "Categoria - {$about->title}")

@section('content_header')
    <h1>Exibindo Categoria {{ $about->title }}</h1>
@stop

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <ul>
                    <li><strong>Nome: </strong> {{ $about->title }}</li>
                </ul>
                <ul>
                    <li><strong>Descrição: </strong> {{ $about->description }}</li>
                </ul>

            </div>
            <div class="row" style="justify-content: center">
                <div class="form-group col-md-1">
                   <a href="{{ route('abouts.index') }}" class="btn btn-warning">Voltar</a>
                </div>
               <form action="{{ route('abouts.destroy', $about->id) }}" method="post">
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


