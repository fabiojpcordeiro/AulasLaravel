<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIsta de Contatos</title>
</head>
<body>
    <h1>Listagem de contatos</h1>
    @foreach($contacts as $contact)
    <div>
        <p>{{$contact->nome}}</p>
        <p>{{$contact->email}}</p>
        <p>{{$contact->telefone}}</p>
        <p>{{$contact->data_nascimento}}</p>
        <br>
    </div>
    @endforeach

    <h2>Salvar contato</h2>
    <form action="{{route('contato.salvar')}}" method="POST">
    @csrf
    <button type="submit">Salvar Contato</button>

    </form>
</body>
</html>