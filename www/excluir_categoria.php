<?php
    if(count($_GET)>0) {
        require_once("db.php");
        $sql = "DELETE FROM categorias WHERE CatCodigo = ".$_GET["CatCodigo"].";";
        mysqli_query($conect, $sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria Removida</title>
</head>
<body>
    <h2>Categoria Removida</h2>
    <br>
    <a href="lista_categoria.php">voltar</a>
</body>
</html>
	
