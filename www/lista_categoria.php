<?php
    require_once("db.php");
    $query_select = "SELECT * FROM categorias";
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
        <a href="salvar_categoria_tela.php">Inserir Nova Categoria</a>
    </div>
    <br>
    <br>
    <h3>Matheus Oliveira de Oliveira</h3>
    <table>
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Grupo</th>
            <th>SubGrupo</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($select)) { ?>
            <tr>
                <td><?php echo $row["CatCodigo"]; ?></td>
                <td><?php echo $row["CatNome"]; ?></td>
                <td><?php echo $row["CatGrupo"]; ?></td>
                <td><?php echo $row["CatSubGrupo"]; ?></td>
                <td><a href="alterar_categoria_tela.php?CatCodigo=<?php echo $row["CatCodigo"]; ?>">editar</a></td>
                <td><a href="excluir_categoria.php?CatCodigo=<?php echo $row["CatCodigo"]; ?>">excluir</a></td>
            </tr>              
        <?php } ?>
    </table>

</body>
</html>