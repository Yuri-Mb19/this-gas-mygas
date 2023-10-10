
@if(Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif
<form action={{ route('site.contato' ) }} method="post" class="request-page-form" novalidate="novalidate">
    @csrf
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="form-group">
                <input name="nome" value="{{ old('nome') }}" type="text" class="form-control" placeholder="Nome">
                @if ($errors->has('nome'))
                    {{ $errors->first('nome') }}
                @endif
                <br>
            </div>
        </div>
        
        
        <div class="col-lg-6 col-md-12">
            <div class="form-group">
                <input name="telefone" value="{{ old('telefone') }}" type="text" class="form-control" placeholder="Telefone">
                {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
                <br>
            </div>
        </div>
        
        <div class="col-lg-6 col-md-12">
            <div class="form-group">
                <input name="email" value="{{ old('email') }}" type="email" class="form-control" placeholder="Email (Opcional)">
                {{ $errors->has('email') ? $errors->first('email') : '' }}
                <br>
            </div>
        </div>
        
        <div class="col-lg-6 col-md-12">
            <div class="form-group">
                <input name="localizacao" value="{{ old('localizacao') }}" type="text" class="form-control" placeholder="Localização">
                {{ $errors->has('localizacao') ? $errors->first('localizacao') : '' }}
                <br>
            </div>
        </div>
        
        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <textarea  name="mensagem" class="form-control" placeholder="Mensagem"></textarea>
            </div>
        </div>
        <div class="col-lg-12 col-md-12">
            <div class="form-group submit-btn">
                <button class="btn btn-primary">
                    <i class="flaticon-right icon-arrow before"></i>
                    <span class="label" id="">Enviar Mensagem</span>
                    <i class="flaticon-right icon-arrow after"></i>
                </button>
            </div>
        </div>
    </div>
</form>


@if($errors->any())
    <div style="position:absolute; top:0px; width:50%; background:red">

        @foreach ($errors->all() as $erro)
            {{ $erro }}
            <br >
        @endforeach

    </div>
@endif