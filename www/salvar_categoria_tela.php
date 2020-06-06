<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Categoria</title>
</head>
<body>
    <style>
        .campo>div {
            min-width: 200px;
        }
    </style>
    <h3>Nova Categoria</h3>
    <form method="post" action="salvar_categoria.php">
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
                <label for="Grupo">Grupo:</label>
            </div>
            <input type="text" name="Grupo" id="Grupo" maxlength="50">
        </div>
        <div class="campo">
            <div>
                <label for="SubGrupo">SubGrupo:</label>
            </div>
            <input type="text" name="SubGrupo" id="SubGrupo" maxlength="50">
        </div>
        <br>
        <br>
        <input type="submit" value="Salvar"></input>
    </form>
</body>
</html>