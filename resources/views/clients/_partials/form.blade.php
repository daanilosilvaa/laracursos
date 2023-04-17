
@include('includes.alerts')
<div class="form-group">
    <label for="">* Nome</label>
    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{$client->name ?? old('name')}}" autofocus>
</div>
<div class="form-group">
    <label for="">* E-mail</label>
    <input type="email" name="email" class="form-control" placeholder="Email:" value="{{$client->email ?? old('email')}}" autofocus>
</div>
<div class="form-group">
    <label for="">* Tel.</label>
    <input type="text" name="phone" class="form-control" placeholder="(99)9.99999999:" value="{{$client->phone ?? old('phone')}}" autofocus>
</div>
<div class="form-group">
    <label for="">* Sugestão de curso</label>
    <textarea name="description"  cols="50" rows="10" class="form-control">{{$client->description ?? old('description')}}</textarea>
</div>

<div class="row">
    <fieldset class="form-group col-md-4">
        <div class="row">
            <legend class="col-form-label col-sm-12 pt-0">Tel. Ativo?</legend>
            <div class="row col-md-12">
                <div class="form-check col-md-3">
                    <input class="form-check-input" type="radio" name="active_phone" checked  value="A" @if(@isset($client) &&  $client->active_phone == 'A' ) checked @endif>
                    <label class="form-check-label" for="">Ativo</label>
                </div>
                <div class="form-check check-inativo">
                    <input class="form-check-input" type="radio" name="active_phone"  value="I" @if(@isset($client) &&  $client->active_phone == 'I' ) checked @endif>
                    <label class="form-check-label" for="">Inativo</label>
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset class="form-group col-md-4">
        <div class="row">
            <legend class="col-form-label col-sm-12 pt-0">Email Ativo?</legend>
            <div class="row col-md-12">
                <div class="form-check col-md-3">
                    <input class="form-check-input" type="radio" name="active_email" checked  value="A" @if(@isset($client) &&  $client->active_email == 'A' ) checked @endif>
                    <label class="form-check-label" for="">Ativo</label>
                </div>
                <div class="form-check check-inativo">
                    <input class="form-check-input" type="radio" name="active_email"  value="I" @if(@isset($client) &&  $client->active_email == 'I' ) checked @endif>
                    <label class="form-check-label" for="">Inativo</label>
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset class="form-group col-md-4">
        <div class="row">
            <legend class="col-form-label col-sm-12 pt-0">whats Ativo?</legend>
            <div class="row col-md-12">
                <div class="form-check col-md-3">
                    <input class="form-check-input" type="radio" name="phone_whats" checked  value="A" @if(@isset($client) &&  $client->phone_whats == 'A' ) checked @endif>
                    <label class="form-check-label" for="">Ativo</label>
                </div>
                <div class="form-check check-inativo">
                    <input class="form-check-input" type="radio" name="phone_whats"  value="I" @if(@isset($client) &&  $client->phone_whats == 'I' ) checked @endif>
                    <label class="form-check-label" for="">Inativo</label>
                </div>
            </div>
        </div>
    </fieldset>
</div>


<div class="row" style="justify-content: center">
    <div class="form-group col-md-1">
       <a href="{{ route('clients.index') }}" class="btn btn-warning">Voltar</a>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</div>
