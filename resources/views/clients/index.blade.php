@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <div class="row">
        <h1 class="col-md-11">Clientes</h1>
        <a href="{{ route('clients.create') }}" class="btn btn-success"><i class="fas fa-plus"></i></a>

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
                            <th >Nome</th>
                            <th >Email</th>
                            <th >Tel.</th>
                            <th  >Telefone AT.?</th>
                            <th  title="Deseja receber no Email de sugentão de novos cursos?">E-mail AT.? </th>
                            <th  title="Receber no Whats  sugentão de cursos?">Sugentão no Whats ?</th>
                            <th width="150" class="text-center">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ $client->phone }}</td>
                                <td class="text-center">{{ $client->active_phone == 'A'? 'Sim' : 'Não' }}</td>
                                <td class="text-center">{{ $client->active_email == 'A'? 'Sim' : 'Não' }}</td>
                                <td class="text-center">{{ $client->phone_whats == 'A'? 'Sim' : 'Não'}}</td>
                                <td class="text-center">
                                    <a href="{{ route('clients.edit', $client->id ) }}" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                    <a href="{{ route('clients.show', $client->id ) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                @if (isset($filters))
                {!! $clients->appends($filters)->links() !!}
                @else
                    {!! $clients->links() !!}
                @endif
            </div>
        </div>

    </div>
@stop
