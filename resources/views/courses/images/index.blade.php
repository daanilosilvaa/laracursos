@extends('adminlte::page')

@section('title', "Imagens do Curso: $course->name ")

@section('content_header')
    <div class="row">
        <h1 class="col-md-11">Imagens do Curso: <b>{{ $course->name }}</b></h1>
        <a href="{{ route('course.image.create', $course->id) }}" class="btn btn-success"><i class="fas fa-plus"></i></a>

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
                            <th scope="col">Image</th>
                            <th scope="col">Nome</th>
                            <th with="50">Ação</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($images as $image)
                            <tr>
                                <td><img src="{{ url($image->path) }}" alt="{{ $image->name }}"  style="max-height: 90px"></td>
                                <td>{{ $image->name }}</td>
                                <form action="{{ route('course.images.destroy', [$image->id,$course->id]) }}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <td style="width=10px;"><button type="submit" class="btn btn-danger "><i
                                                class="fas fa-ban"></i></button></td>
                                </form>
                            </tr>
                        @endforeach


                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                @if (isset($filters))
                    {!! $images->appends($filters)->links() !!}
                @else
                    {!! $images->links() !!}
                @endif
            </div>
        </div>

    </div>
@stop
