@include('includes.alerts')
<div class="form-group">
    <label for="">* Nome</label>
    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $partner->name ?? old('name') }}"
        autofocus>
</div>


<div class="form-group">
    <label for="">* Image</label>
    <input type="file" name="image" class="form-control">
</div>


<fieldset id="status" class="form-group col-md-4">
    <div class="row">
        <legend class="col-form-label col-sm-12 pt-0">Ativo?</legend>
        <div class="row col-md-12">
            <div class="form-check col-md-3">
                <input class="form-check-input" type="radio" name="active" checked value="A"
                    @if (@isset($partner) && $partner->active == 'A') checked @endif>
                <label class="form-check-label" for="">Ativo</label>
            </div>
            <div class="form-check check-inativo">
                <input class="form-check-input" type="radio" name="active" value="I"
                    @if (@isset($partner) && $partner->active == 'I') checked @endif>
                <label class="form-check-label" for="">Inativo</label>
            </div>
        </div>
    </div>
</fieldset>


<div class="row" style="justify-content: center">
    <div class="form-group col-md-1">
        <a href="{{ route('partners.index') }}" class="btn btn-warning">Voltar</a>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</div>
