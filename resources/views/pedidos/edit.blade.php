<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar um Pedido</title>
    <!-- Link do Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-...your-integrity-hash..." crossorigin="anonymous">
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Editar Pedido</h2>
        
        <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
            @csrf <!-- Token CSRF -->
            @method('PUT') <!-- Método PUT para atualização -->

            <div class="mb-3">
                <label for="cliente" class="form-label">Cliente</label>
                <input type="text" id="cliente" name="cliente" class="form-control" value="{{ $pedido->cliente }}" required>
            </div>

            <div class="mb-3">
                <label for="produto" class="form-label">Produto</label>
                <input type="text" id="produto" name="produto" class="form-control" value="{{ $pedido->produto }}" required>
            </div>

            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" id="quantidade" name="quantidade" class="form-control" value="{{ $pedido->quantidade }}" required>
            </div>

            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" id="preco" name="preco" class="form-control" value="{{ $pedido->preco }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <!-- Scripts do Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" xintegrity="sha384-oBqDVmMz4fnFO9gyb6M9q64OjXLBHf0+Q9Hp2G/24U8H+WZoCD+pXkfU0DkwjDka" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" xintegrity="sha384-q0rT1tVxsL+DBYkhZ5NAl9yzbO/05kqcd3oDp10hsN3HcnDE7I+pe9FDgP4OU7/6" crossorigin="anonymous"></script>
</body>
</html>
