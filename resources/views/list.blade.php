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
    <div class="modal" id="modal_excluir" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Deseja excluir?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-danger" onClick="delete_contato()">Deletar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Ordem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contatos as $contato)
                    <tr class="mt-3">
                        <th scope="row">{{ $loop->iteration }}</th> {{-- ordem --}}
                        <td>{{ $contato->nome }}</td>
                        <td>{{ $contato->telefone }}</td>
                        <td>{{ $contato->email }}</td>
                        <td><a href="{{ route('site.contato.editar', ['id' => $contato->id]) }}"
                                class="btn btn-primary">Editar</a> <button data-bs-toggle="modal"
                                data-bs-target="#modal_excluir" class="btn btn-danger deleteCont"
                                data-id="{{ $contato->id }}">Excluir</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript" src="{{ asset('js/lista.js') }}"></script>
</body>

</html>
