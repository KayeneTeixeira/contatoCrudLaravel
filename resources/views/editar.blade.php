<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Super Gestão - Sobre Nós</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>

</head>

<body>

    <div class="container d-flex justify-content-center align-items-center w-100">
        <div class="d-flex form_container">
            <form method="POST" action="{{ route('site.contato.alterar') }}"
                class="form_conteudo col-lg-6 col-12 p-5">
                <h1>Contato</h1>
                <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.
                <p>
                    @if ($errors->has('nome'))
                        <div class="alert alert-danger d-flex align-items-center" id="alerta_erro" role="alert">
                            <i class="exclamation-triangle-fill"></i>
                            <div>
                                {{ $errors->first('nome') }}
                            </div>
                        </div>
                    @elseif($errors->has('telefone'))
                        <div class="alert alert-danger d-flex align-items-center" id="alerta_erro" role="alert">
                            <i class="exclamation-triangle-fill"></i>
                            <div>
                                {{ $errors->first('telefone') }}
                            </div>
                        </div>
                    @elseif($errors->has('email'))
                        <div class="alert alert-danger d-flex align-items-center" id="alerta_erro" role="alert">
                            <i class="exclamation-triangle-fill"></i>
                            <div>
                                {{ $errors->first('email') }}
                            </div>
                        </div>
                    @endif
                    @csrf

                
                    <input type="hidden" name="id" value="{{$contato->id}}">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" value="{{!$errors->isEmpty() ? old('nome') : $contato->nome }}{{-- não tira o valor do campo  --}}">
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" name="telefone" value="{{!$errors->isEmpty() ? old('telefone') : $contato->telefone}}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="{{!$errors->isEmpty() ? old('email') : $contato->email}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            <div class="col-lg-6 col-12 p-5 h-100 form_texto_principal">
                <h2>Seja muito bem vindo ao meu primeiro programa em Laravel!</h2>
                <p>Espero que o programa agrade ao gosto de vocês usuários! Fiz com muito carinho</p>
            </div>
        </div>
    </div>
</body>

</html>
