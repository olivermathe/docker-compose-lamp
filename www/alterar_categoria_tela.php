<?php
    require_once("db.php");
    $query_select = "SELECT * FROM categorias WHERE CatCodigo = ".$_GET["CatCodigo"].";";
    $select = mysqli_query($conect, $query_select);
    $row = mysqli_fetch_array($select);
    $categoria = $row;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Categoria</title>
</head>
<body>
    <style>
        .campo>div {
            min-width: 200px;
        }
    </style>
    <h3>Alterar Categoria</h3>
    <form method="post" action="alterar_categoria.php">
        <div class="campo">
            <div>
                <label for="Codigo">Código: </label><?php echo $categoria[0]; ?><br>
            </div>
            <input type="hidden" name="Codigo" id="Codigo" maxlength="11" value="<?php echo $categoria[0]; ?>">
        </div>
        <div class="campo">
            <div>
                <label for="Nome">Nome:</label>
            </div>
            <input type="text" name="Nome" id="Nome" maxlength="50" value="<?php echo $categoria[1]; ?>">
        </div>
        <div class="campo">
            <div>
                <label for="Grupo">Grupo:</label>
            </div>
            <input type="text" name="Grupo" id="Grupo" maxlength="50" value="<?php echo $categoria[2]; ?>">
        </div>
        <div class="campo">
            <div>
                <label for="SubGrupo">SubGrupo:</label>
            </div>
            <input type="text" name="SubGrupo" id="SubGrupo" maxlength="50" value="<?php echo $categoria[3]; ?>">
        </div>
        <br>
        <br>
        <input type="submit" value="Salvar"></input>
    </form>
</body>
</html>