<?php
    require_once("db.php");
    $query_select = "SELECT * FROM clientes WHERE CliCodigo = ".$_GET["Codigo"].";";
    $select = mysqli_query($conect, $query_select);
    $row = mysqli_fetch_array($select);
    $cliente = $row;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cliente</title>
</head>
<body>
    <style>
        .campo>div {
            min-width: 200px;
        }
    </style>
    <h3>Alterar Cliente</h3>
    <form method="post" action="alterar_cliente.php">
        <div class="campo">
            <div>
                <label for="Codigo">Código: </label><?php echo $cliente[0]; ?><br>
            </div>
            <input type="hidden" name="Codigo" id="Codigo" maxlength="11" value="<?php echo $cliente[0]; ?>">
        </div>
        <div class="campo">
            <div>
                <label for="Nome">Nome:</label>
            </div>
            <input type="text" name="Nome" id="Nome" maxlength="50" value="<?php echo $cliente[1]; ?>">
        </div>
        <div class="campo">
            <div>
                <label for="CPF">CPF:</label>
            </div>
            <input type="text" name="CPF" id="CPF" maxlength="50" value="<?php echo $cliente[2]; ?>">
        </div>
        <div class="campo">
            <div>
                <label for="CNPJ">CNPJ:</label>
            </div>
            <input type="text" name="CNPJ" id="CNPJ" maxlength="50" value="<?php echo $cliente[3]; ?>">
        </div>
        <div class="campo">
            <div>
                <label for="Endereco">Endereço:</label>
            </div>
            <input type="text" name="Endereco" id="Endereco" maxlength="50" value="<?php echo $cliente[4]; ?>">
        </div>
        <div class="campo">
            <div>
                <label for="Bairro">Bairro:</label>
            </div>
            <input type="text" name="Bairro" id="Bairro" maxlength="50" value="<?php echo $cliente[5]; ?>">
        </div>
        <br>
        <br>
        <input type="submit" value="Salvar"></input>
    </form>
</body>
</html>