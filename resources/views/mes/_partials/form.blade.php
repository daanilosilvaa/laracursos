@include('includes.alerts')
<div class="form-group">
    <label for="">* Título</label>
    <input type="text" name="title" class="form-control" placeholder="Título:" value="{{ $me->title ?? old('title') }}"
        autofocus>
</div>

<div class="form-group">
    <label for="">* Facebook</label>
    <input type="text" name="facebook" class="form-control" placeholder="http://www.linkdocurso.com.br:"
        value="{{ $me->facebook ?? old('facebook') }}">
</div>
<div class="form-group">
    <label for="">* Instagram</label>
    <input type="text" name="instagram" class="form-control" placeholder="http://www.linkdocurso.com.br:"
        value="{{ $me->instagram ?? old('instagram') }}">
</div>
<div class="form-group">
    <label for="">* WhatsApp</label>
    <input type="phone" name="whatsapp" class="form-control" placeholder="http://www.linkdocurso.com.br:"
        value="{{ $me->whatsapp ?? old('whatsapp') }}">
</div>


<div class="form-group">
    <label for="">* Image</label>
    <input type="file" name="image" class="form-control">
</div>


<div class="form-group">
    <label for="">Descrição</label>
    <textarea name="description" cols="30" rows="10" class="form-control">{{ $me->description ?? old('description') }}</textarea>
</div>
<fieldset id="status" class="form-group col-md-4">
    <div class="row">
        <legend class="col-form-label col-sm-12 pt-0">Ativo?</legend>
        <div class="row col-md-12">
            <div class="form-check col-md-3">
                <input class="form-check-input" type="radio" name="active" checked value="A"
                    @if (@isset($me) && $me->active == 'A') checked @endif>
                <label class="form-check-label" for="">Ativo</label>
            </div>
            <div class="form-check check-inativo">
                <input class="form-check-input" type="radio" name="active" value="I"
                    @if (@isset($me) && $me->active == 'I') checked @endif>
                <label class="form-check-label" for="">Inativo</label>
            </div>
        </div>
    </div>
</fieldset>


<div class="row" style="justify-content: center">
    <div class="form-group col-md-1">
        <a href="{{ route('mes.index') }}" class="btn btn-warning">Voltar</a>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</div>
