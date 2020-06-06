<?php
    if(count($_POST)>0) {
        require_once("db.php");
        $sql = "UPDATE categorias SET CatNome = '" . $_POST["Nome"] ."', CatGrupo = '" . $_POST["Grupo"] ."', CatSubGrupo = '" . $_POST["SubGrupo"] ."' WHERE CatCodigo = ".$_POST["Codigo"].";";
        mysqli_query($conect, $sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria Alterada</title>
</head>
<body>
    <h2>Categoria Alterada</h2>
    <br>
    <a href="lista_categoria.php">Voltar</a>
</body>
</html>
	
