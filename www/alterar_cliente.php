<?php
    if(count($_POST)>0) {
        require_once("db.php");
        $sql = "UPDATE clientes SET CliNome = '" . $_POST["Nome"] ."', CliCPF = '" . $_POST["CPF"] ."', CliCNPJ = '" . $_POST["CNPJ"] ."', CliEndereco = '" . $_POST["Endereco"] ."', CliBairro = '" . $_POST["Bairro"] ."' WHERE CliCodigo = ".$_POST["Codigo"].";";
        mysqli_query($conect, $sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente Alterado</title>
</head>
<body>
    <h2>Cliente Alterado</h2>
    <br>
    <a href="lista_cliente.php">Voltar</a>
</body>
</html>
	
