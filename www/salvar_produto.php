<?php
    if(count($_POST)>0) {
        require_once("db.php");
        $sql = "INSERT INTO produtos (ProCodigo, ProDescricao, CatCodigo, ProFornecedor, ProPrecoVenda, ProMargemLucro, ProEstoque) VALUES (" . $_POST["Codigo"] . ",'" . $_POST["Descricao"] ."'," . $_POST["Categoria"] ."," . $_POST["Fornecedor"] ."," . $_POST["PrecoVenda"] ."," . $_POST["MargemLucro"] ."," . $_POST["Estoque"] .");";
        echo($sql);
        mysqli_query($conect, $sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
</head>
<body>
    <h2>Produto Incluido</h2>
    <br>
    <a href="salvar_produto_tela.php">Inserir Outro</a>
    <a href="lista_produto.php">Lista Produtos</a>
</body>
</html>
	
