<?php
    require_once("db.php");
    $query_select = "SELECT * FROM produtos";
    $select = mysqli_query($conect, $query_select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação Web</title>
</head>
<body>

    <style>

        table {
            border-collapse: separate;
            border-spacing: 50px 0;
        }

        td {
            padding: 10px 0;
        }

        .header {
            text-align: center;
        }
    
    </style>
    <br>
    <div class="header">
        <a href="index.php">Voltar</a>
        <a href="salvar_produto_tela.php">Inserir Novo Produto</a>
    </div>
    <br>
    <h3>Matheus Oliveira de Oliveira</h3>
    <table>
        <tr>
            <th>Codigo</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Fornecedor</th>
            <th>Preço Venda</th>
            <th>Margem Lucro</th>
            <th>Estoque</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($select)) { ?>
            <tr>
                <td><?php echo $row["ProCodigo"]; ?></td>
                <td><?php echo $row["ProDescricao"]; ?></td>
                <td><?php echo $row["CatCodigo"]; ?></td>
                <td><?php echo $row["ProFornecedor"]; ?></td>
                <td><?php echo $row["ProPrecoVenda"]; ?></td>
                <td><?php echo $row["ProMargemLucro"]; ?></td>
                <td><?php echo $row["ProEstoque"]; ?></td>
                <td><a href="alterar_produto_tela.php?Codigo=<?php echo $row["ProCodigo"]; ?>">editar</a></td>
                <td><a href="excluir_produto.php?Codigo=<?php echo $row["ProCodigo"]; ?>">excluir</a></td>
            </tr>              
        <?php } ?>
    </table>

</body>
</html>