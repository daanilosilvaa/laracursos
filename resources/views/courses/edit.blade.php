@extends('adminlte::page')

@section('title', "Editando o : $course->name")

@section('content_header')
    <h1>Editando o Curso {{ $course->name }}</h1>
@stop

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
            <div class="max-w-xl">
                <form action="{{ route('courses.update', $course->id) }}" class="form" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('courses._partials.form')
                </form>
            </div>
        </div>


    </div>
</div>
@stop

