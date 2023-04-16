@extends('adminlte::page')

@section('title', 'Dashboard-Categorias')

@section('content_header')
    <div class="row">
        <h1 class="col-md-11">Categorias</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-success"><i class="fas fa-plus"></i></a>

    </div>

@stop

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col" class="text-center">Ativo</th>
                            <th width="170" class="text-center">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td class="text-center">{{ $category->active == 'A' ? 'ATIVO' : 'INATIVO' }}</td>
                                <td class="text-center">
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary"><i
                                            class="fas fa-pen"></i></a>
                                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-warning"><i
                                            class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                @if (isset($filters))
                {!! $categories->appends($filters)->links() !!}
                @else
                    {!! $categories->links() !!}
                @endif
            </div>
        </div>

    </div>
@stop
