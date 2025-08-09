<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho Laravel 01</title>
</head>
<body>
    <h1>Lista de Produtos:</h1>
    @foreach ($products as $product)
        <div>
            <p>Produto: {{$product->name}}</p>
            <p>Preço: {{$product->price}}</p>
            <p>Descrição: {{$product->description}}</p>
            <br> <br>
        </div>
    @endforeach
</body>
</html>
