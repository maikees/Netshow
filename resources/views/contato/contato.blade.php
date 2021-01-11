@extends('shared.shared')

@section('content')
    <h6>Formulário de Contato</h6>

    @include('shared.messages')

    <form action="{{route('contato')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mt-1">
            <label for="lblNome">Nome</label>
            <input name="nome" type="text" class="form-control" id="lblNome" value="{{old('nome')}}"
                   placeholder="digite o nome" required>
        </div>

        <div class="form-group mt-1">
            <label for="lblEmail">E-mail</label>
            <input name="email" type="email" class="form-control" id="lblEmail" value="{{old('email')}}"
                   placeholder="Digite o e-mail" required>
        </div>

        <div class="form-group mt-1">
            <label for="lblTelefone">Telefone</label>
            <input name="telefone" type="text" class="form-control celular" value="{{old('telefone')}}"
                   id="lblTelefone" placeholder="Digite o telefone" required>
        </div>

        <div class="form-group mt-1">
            <label for="lblMensagem">Mensagem</label>
            <textarea name="mensagem" class="form-control" id="lblMensagem" rows="3"
                      required> {{old('mensagem')}}</textarea>
        </div>

        <div class="form-group mt-1">
            <label for="lblArquivo">Arquivo</label> <br/>
            <input name="arquivo" type="file" class="form-control-file" id="lblArquivo" required>
        </div>

        <div class="form-group row mt-3">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary btn-md">Salvar</button>
            </div>
        </div>
    </form>
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/mask.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".celular").mask("(99)99999-9999");
        });
    </script>
@endsection
