@extends('adminlte::page')

@section('title', "Categorias do Curso: $course->name  ")

@section('content_header')
    <div class="row">
        <h1 class="col-md-11">Categorias do Curso: <b>{{ $course->name  }}</b></h1>
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
                            <th scope="col">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td><a href="" class="btn btn-warning">Remover</a></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                @if (@isset($filters))
                {!! $categories->appends($filters)->links() !!}
                @else
                    {!! $categories->links() !!}
                @endif
            </div>
        </div>

    </div>
@stop
