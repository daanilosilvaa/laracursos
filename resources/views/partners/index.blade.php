@extends('adminlte::page')

@section('title', 'Parceiros')

@section('content_header')
    <div class="row">
        <h1 class="col-md-11">Parceiros</h1>
        <a href="{{ route('partners.create') }}" class="btn btn-success"><i class="fas fa-plus"></i></a>

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
                        @foreach ($partners as $partner)
                            <tr>
                                <td><img src="{{ url("storage/$partner->image ") }}" alt="{{ $partner->napartner }}" class="rounded-circle" style="max-height: 150px;"></td>
                                <td>{{ $partner->title }}</td>
                                <td>{{ $partner->active }}</td>

                                <td class="text-center">
                                    <a href="{{ route('partners.edit', $partner->id) }}" class="btn btn-primary"><i
                                            class="fas fa-pen"></i></a>
                                    <a href="{{ route('partners.show', $partner->id) }}" class="btn btn-warning"><i
                                            class="fas fa-eye"></i></a>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                @if (isset($filters))
                {!! $partners->appends($filters)->links() !!}
                @else
                    {!! $partners->links() !!}
                @endif
            </div>
        </div>

    </div>
@stop
