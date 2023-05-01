@extends('adminlte::page')

@section('title', 'Sobre Alertas')

@section('content_header')
    <div class="row">
        <h1 class="col-md-11">Sobre Alertas</h1>
        <a href="{{ route('content_abouts.create') }}" class="btn btn-success"><i class="fas fa-plus"></i></a>

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
                            <th scope="col">Cor do titulo</th>
                            <th width="170" class="text-center">Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contentAbouts as $contentAbout)
                            <tr>
                                <td>{{ $contentAbout->title }}</td>
                                <td> <div style="height: 30px; width: 30px; background-color: {{ $contentAbout->color_title }}"></div></td>
                                <td class="text-center">
                                    <a href="{{ route('content_abouts.edit', $contentAbout->id) }}" class="btn btn-primary"><i
                                            class="fas fa-pen"></i></a>
                                    <a href="{{ route('content_abouts.show', $contentAbout->id) }}" class="btn btn-warning"><i
                                            class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                @if (isset($filters))
                {!! $contentAbouts->appends($filters)->links() !!}
                @else
                    {!! $contentAbouts->links() !!}
                @endif
            </div>
        </div>

    </div>
@stop
