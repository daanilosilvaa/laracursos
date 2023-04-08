@extends('adminlte::page')

@section('title', 'Dashboard-Cursos')

@section('content_header')
    <div class="row">
        <h1 class="col-md-11">Cursos</h1>
        <a href="{{ route('courses.create') }}" class="btn btn-success"><i class="fas fa-plus"></i></a>

    </div>

@stop

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col" title="Preço de Venda Anterior">Preço Ant.</th>
                            <th scope="col" title="Preço de Venda Atual">Preco Atu.</th>
                            <th scope="col" title="Preço de Comissão Por Venda">Preço Com.</th>
                            <th scope="col">Ativo</th>
                            <th width="300" class="text-center">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $course->name }}</td>
                                <td title="Preço de Venda Anterior">{{ number_format($course->price, 2, ',', '.') }}</td>
                                <td title="Preço de Venda Autal">{{ number_format($course->price_current, 2, ',', '.') }}
                                </td>
                                <td title="Preço de Comissão Por Venda">
                                    {{ number_format($course->price_commission, 2, ',', '.') }}</td>
                                <td>{{ $course->active == 'A' ? 'ATIVO' : 'INATIVO' }}</td>
                                <td class="text-center">
                                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-primary"><i
                                            class="fas fa-pen"></i></a>
                                    <a href="{{ route('courses.show', $course->id) }}" class="btn btn-warning"><i
                                            class="fas fa-eye"></i></a>
                                    <a title="Link de venda" href="{{ $course->link }}" target="_blank" class="btn btn-dark"><i
                                            class="fas fa-link"></i></a>
                                    <a title="Imagens do Curso" href="#" class="btn btn-secondary"> <i class="fas fa-image"></i></a>
                                    <a title="Categorias Vinculadas ao Curso" href="#" class="btn btn-danger"><i
                                        class="fas fa-list"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>

    </div>
@stop
