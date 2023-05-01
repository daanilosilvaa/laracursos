@include('includes.alerts')
<div class="form-group">
    <label for="">* Nome</label>
    <input type="text" name="title" class="form-control" placeholder="Titulo:" value="{{$contentAbout->title ?? old('title')}}" autofocus>
</div>
<div class="form-group">
    <label for="">Descrição</label>
    <textarea name="description" cols="30" rows="10" class="form-control">{{ $contentAbout->description ?? old('description') }}</textarea>
</div>

<div class="form-group">
    <label for="">Cor do Titulo</label>
    <input type="color" name="color_title" id="" class="form-control" value="{{$contentAbout->color_title ?? old('color_title')}}">
</div>




<div class="row" style="justify-content: center">
    <div class="form-group col-md-1">
       <a href="{{ route('categories.index') }}" class="btn btn-warning">Voltar</a>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</div>
