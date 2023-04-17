@extends('adminlte::page')

@section('title', "Categoria - {$category->name}")

@section('content_header')
    <h1>Exibindo Categoria {{ $category->name }}</h1>
@stop

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <ul>
                    <li><strong>Nome: </strong> {{ $category->name }}</li>
                </ul>

            </div>
            <div class="row" style="justify-content: center">
                <div class="form-group col-md-1">
                   <a href="{{ route('categories.index') }}" class="btn btn-warning">Voltar</a>
                </div>
               <form action="{{ route('categories.destroy', $category->id) }}" method="post">
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


