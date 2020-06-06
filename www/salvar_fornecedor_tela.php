<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Fornecedor</title>
</head>
<body>
    <style>
        .campo>div {
            min-width: 200px;
        }
    </style>
    <h3>Novo Fornecedor</h3>
    <form method="post" action="salvar_fornecedor.php">
        <div class="campo">
            <div>
                <label for="Codigo">Código:</label>
            </div>
            <input type="number" name="Codigo" id="Codigo" maxlength="11">
        </div>
        <div class="campo">
            <div>
                <label for="Nome">Nome:</label>
            </div>
            <input type="text" name="Nome" id="Nome" maxlength="50">
        </div>
        <div class="campo">
            <div>
                <label for="NomeFantasia">Nome Fantasia:</label>
            </div>
            <input type="text" name="NomeFantasia" id="NomeFantasia" maxlength="50">
        </div>
        <div class="campo">
            <div>
                <label for="CNPJ">CNPJ:</label>
            </div>
            <input type="text" name="CNPJ" id="CNPJ" maxlength="50">
        </div>
        <div class="campo">
            <div>
                <label for="Endereco">Endereço:</label>
            </div>
            <input type="text" name="Endereco" id="Endereco" maxlength="50">
        </div>
        <div class="campo">
            <div>
                <label for="Fone">Telefone:</label>
            </div>
            <input type="text" name="Fone" id="Fone" maxlength="50">
        </div>
        <br>
        <br>
        <input type="submit" value="Salvar"></input>
    </form>
</body>
</html>