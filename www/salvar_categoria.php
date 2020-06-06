<?php
    if(count($_POST)>0) {
        require_once("db.php");
        $sql = "INSERT INTO categorias (CatCodigo, CatNome, CatGrupo, CatSubGrupo) VALUES (" . $_POST["Codigo"] . ",'" . $_POST["Nome"] ."','" . $_POST["Grupo"] ."','" . $_POST["SubGrupo"] ."')";
        mysqli_query($conect, $sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Categoria</title>
</head>
<body>
    <h2>Categoria Incluida</h2>
    <br>
    <a href="salvar_categoria_tela.php">Inserir Outro</a>
    <a href="lista_categoria.php">Lista Categoria</a>
</body>
</html>
	
