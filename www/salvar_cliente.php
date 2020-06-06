<?php
    if(count($_POST)>0) {
        require_once("db.php");
        $sql = "INSERT INTO clientes (CliCodigo, CliNome, CliCPF, CliCNPJ, CliEndereco, CliBairro) VALUES (" . $_POST["Codigo"] . ",'" . $_POST["Nome"] ."','" . $_POST["CPF"] ."','" . $_POST["CNPJ"] ."','" . $_POST["Endereco"] ."','" . $_POST["Bairro"] ."');";
        mysqli_query($conect, $sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Cliente</title>
</head>
<body>
    <h2>Cliente Incluido</h2>
    <br>
    <a href="salvar_cliente_tela.php">Inserir Outro</a>
    <a href="lista_cliente.php">Lista Clientes</a>
</body>
</html>
	
