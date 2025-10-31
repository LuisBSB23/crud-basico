<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir um Pedido</title>
    <!-- Link do Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-...your-integrity-hash..." crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Excluir Pedido</h2>
        
        <div class="alert alert-warning" role="alert">
            <strong>Atenção!</strong> Tem certeza que deseja excluir este pedido?
        </div>

        <form action="{{ route('pedidos.destroy', ['pedido' => $pedido->id]) }}" method="POST">
            @csrf <!-- Token CSRF -->
            @method('DELETE') <!-- Especifica o método DELETE -->
            <div class="mb-3">
                <label for="cliente" class="form-label">Cliente do Pedido</label>
                <input type="text" id="cliente" name="cliente" value="{{ $pedido->cliente }}" class="form-control" readonly>
            </div>
            <div class="mb-3">
                <label for="produto" class="form-label">Produto</label>
                <input type="text" id="produto" name="produto" value="{{ $pedido->produto }}" class="form-control" readonly>
            </div>
            <button type="submit" class="btn btn-danger">Sim, excluir</button>
            <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <!-- Scripts do Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js" xintegrity="sha384-hzvD4zBO8zP66nmLXUbtgP5AONR5MTxS9AqV8DNk7q5N8xUevgiXsnXTX8vOPaN4" crossorigin="anonymous"></script>
</body>
</html>
