<!-- resources/views/produtos/show.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver um Produto</title>
    <!-- Link do CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detalhes do Produto</h1>

        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label><strong>Nome</strong></label>
                    <p class="form-control-static">{{ $produto->nome }}</p>
                </div>

                <div class="form-group">
                    <label><strong>Custo</strong></label>
                    <p class="form-control-static">{{ number_format($produto->custo, 2, ',', '.') }} R$</p>
                </div>

                <div class="form-group">
                    <label><strong>Preço</strong></label>
                    <p class="form-control-static">{{ number_format($produto->preco, 2, ',', '.') }} R$</p>
                </div>

                <div class="form-group">
                    <label><strong>Quantidade</strong></label>
                    <p class="form-control-static">{{ $produto->quantidade }}</p>
                </div>
            </div>
        </div>

        @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
        @endif

        <!-- Botão para retornar ao índice de produtos -->
        <a href="{{ route('produtos.index') }}" class="btn btn-secondary mt-3">Voltar para a Lista</a>
        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning mt-3">Editar</a>
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
