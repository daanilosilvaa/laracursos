@extends('adminlte::page')

@section('title', "Categorias para Curso: $course->name ")

@section('content_header')
    <div class="row">
        <h1 class="col-md-11">Categorias para Curso: <b>{{ $course->name }}</b></h1>

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
                            <th width="50px">#</th>
                            <th scope="col">Nome</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{ route('course.categories.attach',$course->id) }}" method="POST">
                            @csrf
                            @foreach ($categories as $category)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="categories[]"  value="{{ $category->id }}">
                                    </td>
                                    <td>{{ $category->name }}</td>
                                </tr>
                            @endforeach

                            <tr>
                                <td colspan="500">
                                    @include('includes.alerts')
                                    <div class="row" style="justify-content: center">
                                        <div class="form-group col-md-1">
                                           <a href="{{ route('course.categories', $course->id) }}" class="btn btn-warning">Voltar</a>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Enviar</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </form>

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
