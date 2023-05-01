@extends('adminlte::page')

@section('title', "Sobre Conteudo - {$contentAbout->title}")

@section('content_header')
    <h1>Exibindo Sobre Conteudo <label for="" style="color: {{ $contentAbout->color_title }}">{{ $contentAbout->title }}</label></h1>
@stop

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <ul>
                        <li><strong>Nome: </strong> <label for="" style="color: {{ $contentAbout->color_title }}">{{ $contentAbout->title }}</label></li>
                    </ul>
                    <ul>
                        <li>
                                <div class="col-md-4">
                                    <div class="p-3 mb-3  text-white" style="background-color: {{ $contentAbout->color_title }}">Cor</div>
                                </div>
                        </li>
                    </ul>
                    <ul>
                        <li><strong>Descrição: </strong> {{ $contentAbout->description }}</li>
                    </ul>

                </div>
                <div class="row" style="justify-content: center">
                    <div class="form-group col-md-1">
                        <a href="{{ route('content_abouts.index') }}" class="btn btn-warning">Voltar</a>
                    </div>
                    <form action="{{ route('content_abouts.destroy', $contentAbout->id) }}" method="post">
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
