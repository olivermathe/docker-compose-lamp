<?php
    if(count($_POST)>0) {
        require_once("db.php");
        $sql = "INSERT INTO fornecedores (ForCodigo, ForNome, ForFantasia, ForCNPJ, ForEndereco, ForFone) VALUES (" . $_POST["Codigo"] . ",'" . $_POST["Nome"] ."','" . $_POST["NomeFantasia"] ."','" . $_POST["CNPJ"] ."','" . $_POST["Endereco"] ."','" . $_POST["Fone"] ."');";
        echo($sql);
        mysqli_query($conect, $sql);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Fornecedor</title>
</head>
<body>
    <h2>Fornecedor Incluido</h2>
    <br>
    <a href="salvar_fornecedor_tela.php">Inserir Outro</a>
    <a href="lista_fornecedor.php">Lista Fornecedores</a>
</body>
</html>
	
