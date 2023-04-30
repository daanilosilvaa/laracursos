@extends('adminlte::page')

@section('title', 'Minha História')

@section('content_header')
    <div class="row">
        <h1 class="col-md-11">Minha História</h1>
        <a href="{{ route('mes.create') }}" class="btn btn-success"><i class="fas fa-plus"></i></a>

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
                            <th scope="col">image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Ativo</th>
                            <th width="300" class="text-center">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mes as $me)
                            <tr>
                                <td><img src="{{ url("storage/$me->image ") }}" alt="{{ $me->name }}" class="rounded-circle" style="max-height: 150px;"></td>
                                <td>{{ $me->title }}</td>
                                <td>{{ $me->active }}</td>

                                <td class="text-center">
                                    <a href="{{ route('mes.edit', $me->id) }}" class="btn btn-primary"><i
                                            class="fas fa-pen"></i></a>
                                    <a href="{{ route('mes.show', $me->id) }}" class="btn btn-warning"><i
                                            class="fas fa-eye"></i></a>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                @if (isset($filters))
                {!! $mes->appends($filters)->links() !!}
                @else
                    {!! $mes->links() !!}
                @endif
            </div>
        </div>

    </div>
@stop
