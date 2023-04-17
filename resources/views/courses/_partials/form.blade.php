@include('includes.alerts')
<div class="form-group">
    <label for="">* Nome</label>
    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{$course->name ?? old('name')}}" autofocus>
</div>
<div class="row">
    <div class="col-md-6">
        <label for="">* Preço Atual</label>
        <input type="text" name="price_current" class="form-control" placeholder="Preço Atual:" value="{{$course->price_current ?? old('price_current')}}" >
    </div>
    <div class="col-md-6">
        <label for="">* Comissão</label>
        <input type="text" name="price_commission" class="form-control" placeholder="Comissão:" value="{{$course->price_commission ?? old('price_commission')}}" >
    </div>
</div>
<div class="form-group">
    <label for="">* Link</label>
    <input type="text" name="link" class="form-control" placeholder="http://www.linkdocurso.com.br:" value="{{$course->link ?? old('link')}}" >
</div>

    <div class="form-group">
        <label for="">* Image</label>
        <input type="file" name="image" class="form-control" >
    </div>


<div class="form-group">
    <label for="">Descrição</label>
    <textarea name="description" cols="30" rows="10" class="form-control">{{$course->description ?? old('description')}}</textarea>
</div>
<fieldset  id="status" class="form-group col-md-4">
    <div class="row">
        <legend class="col-form-label col-sm-12 pt-0">Ativo?</legend>
        <div class="row col-md-12">
            <div class="form-check col-md-3">
                <input class="form-check-input" type="radio" name="active" checked  value="A" @if(@isset($course) &&  $course->active == 'A' ) checked @endif>
                <label class="form-check-label" for="">Ativo</label>
            </div>
            <div class="form-check check-inativo">
                <input class="form-check-input" type="radio" name="active"  value="I" @if(@isset($course) &&  $course->active == 'I' ) checked @endif>
                <label class="form-check-label" for="">Inativo</label>
            </div>
        </div>
    </div>
</fieldset>


<div class="row" style="justify-content: center">
    <div class="form-group col-md-1">
       <a href="{{ route('courses.index') }}" class="btn btn-warning">Voltar</a>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</div>
