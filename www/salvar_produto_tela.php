<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
</head>
<body>
    <style>
        .campo>div {
            min-width: 200px;
        }
    </style>
    <h3>Novo Produto</h3>
    <form method="post" action="salvar_produto.php">
        <div class="campo">
            <div>
                <label for="Codigo">Código:</label>
            </div>
            <input type="number" name="Codigo" id="Codigo" maxlength="11">
        </div>
        <div class="campo">
            <div>
                <label for="Descricao">Descrição:</label>
            </div>
            <input type="text" name="Descricao" id="Descricao" maxlength="50">
        </div>
        <div class="campo">
            <div>
                <label for="Categoria">Categoria:</label>
            </div>
            <input type="number" name="Categoria" id="Categoria" maxlength="50">
        </div>
        <div class="campo">
            <div>
                <label for="Fornecedor">Fornecedor:</label>
            </div>
            <input type="number" name="Fornecedor" id="Fornecedor" maxlength="50">
        </div>
        <div class="campo">
            <div>
                <label for="PrecoVenda">Preço Venda</label>
            </div>
            <input type="text" name="PrecoVenda" id="PrecoVenda" maxlength="50">
        </div>
        <div class="campo">
            <div>
                <label for="MargemLucro">Margem Lucro</label>
            </div>
            <input type="number" name="MargemLucro" id="MargemLucro" maxlength="50">
        </div>
        <div class="campo">
            <div>
                <label for="Estoque">Estoque</label>
            </div>
            <input type="number" name="Estoque" id="Estoque" maxlength="50">
        </div>
        <br>
        <br>
        <input type="submit" value="Salvar"></input>
    </form>
</body>
</html>