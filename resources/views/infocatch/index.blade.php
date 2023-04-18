@extends('adminlte::page')

@section('title', 'Notificações')

@section('content_header')
    <div class="row">
        <h1 class="col-md-11">Notificações</h1>
        <a href="{{ route('infocatchs.create') }}" class="btn btn-success"><i class="fas fa-plus"></i></a>

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
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefone</th>
                            <th width="300" class="text-center">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($infocatchs as $infocatch)
                            <tr>
                                <td>{{ $infocatch->name }}</td>
                                <td>{{ $infocatch->email }}</td>
                                <td>{{ $infocatch->phone }}</td>
                                <td class="text-center">
                                    <a href="{{ route('infocatchs.edit', $infocatch->id) }}" class="btn btn-primary"><i
                                            class="fas fa-pen"></i></a>
                                    <a href="{{ route('infocatchs.show', $infocatch->id) }}" class="btn btn-warning"><i
                                            class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                @if (isset($filters))
                {!! $infocatchs->appends($filters)->links() !!}
                @else
                    {!! $infocatchs->links() !!}
                @endif
            </div>
        </div>

    </div>
@stop
