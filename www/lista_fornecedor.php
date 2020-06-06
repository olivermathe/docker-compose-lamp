<?php
    require_once("db.php");
    $query_select = "SELECT * FROM fornecedores";
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
        <a href="salvar_fornecedor_tela.php">Inserir Novo Fornecedor</a>
    </div>
    <br>
    <h3>Matheus Oliveira de Oliveira</h3>
    <table>
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Nome Fantasia</th>
            <th>CNPJ</th>
            <th>Endereço</th>
            <th>Telefone</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($select)) { ?>
            <tr>
                <td><?php echo $row["ForCodigo"]; ?></td>
                <td><?php echo $row["ForNome"]; ?></td>
                <td><?php echo $row["ForFantasia"]; ?></td>
                <td><?php echo $row["ForCNPJ"]; ?></td>
                <td><?php echo $row["ForEndereco"]; ?></td>
                <td><?php echo $row["ForFone"]; ?></td>
                <td><a href="alterar_fornecedor_tela.php?Codigo=<?php echo $row["ForCodigo"]; ?>">editar</a></td>
                <td><a href="excluir_fornecedor.php?Codigo=<?php echo $row["ForCodigo"]; ?>">excluir</a></td>
            </tr>              
        <?php } ?>
    </table>

</body>
</html>