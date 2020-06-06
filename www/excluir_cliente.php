<?php
    if(count($_GET)>0) {
        require_once("db.php");
        $sql = "DELETE FROM clientes WHERE CliCodigo = ".$_GET["Codigo"].";";
        mysqli_query($conect, $sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente Removido</title>
</head>
<body>
    <h2>Cliente Removido</h2>
    <br>
    <a href="lista_cliente.php">voltar</a>
</body>
</html>
	
