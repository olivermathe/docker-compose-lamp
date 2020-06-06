<?php
    require_once("db.php");
    $query_select = "SELECT * FROM clientes";
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
        <a href="salvar_cliente_tela.php">Inserir Novo Cliente</a>
    </div>
    <br>
    <br>
    <h3>Matheus Oliveira de Oliveira</h3>
    <table>
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>CNPJ</th>
            <th>Endereço</th>
            <th>Bairro</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($select)) { ?>
            <tr>
                <td><?php echo $row["CliCodigo"]; ?></td>
                <td><?php echo $row["CliNome"]; ?></td>
                <td><?php echo $row["CliCPF"]; ?></td>
                <td><?php echo $row["CliCNPJ"]; ?></td>
                <td><?php echo $row["CliEndereco"]; ?></td>
                <td><?php echo $row["CliBairro"]; ?></td>
                <td><a href="alterar_cliente_tela.php?Codigo=<?php echo $row["CliCodigo"]; ?>">editar</a></td>
                <td><a href="excluir_cliente.php?Codigo=<?php echo $row["CliCodigo"]; ?>">excluir</a></td>
            </tr>              
        <?php } ?>
    </table>

</body>
</html>