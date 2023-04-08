@extends('adminlte::page')

@section('title', 'Dashboard-Categorias')

@section('content_header')
    <h1>Categorias</h1>
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
                        <th scope="col">Ativo</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       @foreach ($categories as $category)
                           <td>{{ $category->name }}</td>
                           <td>{{ $category->active }}</td>
                           <td>
                            <a href={{ route('categories.edit',$categy->id) }}><i class="fas fa-pen"></i></a>
                            <a href="{{ route('categories.show', $category->id) }}"><i class="fas fa-eye"></i></a>
                           </td>
                       @endforeach
                    </tr>

                </tbody>
            </table>

            </div>
        </div>

    </div>
@stop
