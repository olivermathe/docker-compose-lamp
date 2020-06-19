<?php
    require_once("db.php");
    $query_select_c = "SELECT * FROM clientes";
    $select_c = mysqli_query($conect, $query_select_c);
    $query_select_p = "SELECT * FROM produtos";
    $select_p = mysqli_query($conect, $query_select_p);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Venda</title>
</head>
<body>
    <style>
        .campo>div {
            min-width: 200px;
        }
    </style>
    <h3>Nova Venda</h3>

    <form method="post" action="salvar_venda.php">
        <div class="campo">
            <div>
                <label for="Cliente">Cliente:</label>
            </div>
            <select name="Cliente">
                <option value=""></option>
                <?php while ($row = mysqli_fetch_array($select_c)) { ?>
                    <option value="<?php echo $row["CliCodigo"]?>"><?php echo $row["CliNome"]?></option>
                <?php } ?>
            </select>
        </div>
        <div class="campo">
            <div>
                <label for="Produto">Produto:</label>
            </div>
            <select id="Produto" name="Produto" onChange="onChangeProduto()">
                <option value="" preco=""></option>
                <?php while ($row = mysqli_fetch_array($select_p)) { ?>
                    <option value="<?php echo $row["ProCodigo"]?>" preco="<?php echo $row["ProPrecoVenda"]?>"><?php echo $row["ProDescricao"]?></option>
                <?php } ?>
            </select>
        </div>
        <div class="campo">
            <div>
                <label for="Quantidade">Quantidade:</label>
            </div>
            <input type="number" name="Quantidade" id="Quantidade" maxlength="50" onChange="atualiza_total()">
        </div>
        <div class="campo">
            <div>
                <label for="Valor">Valor Item:</label>
            </div>
            <input disabled type="number" name="Valor" id="Valor" maxlength="50">
        </div>
        <div class="campo">
            <div>
                <label for="Total">Total Venda:</label>
            </div>
            <input disabled type="number" name="Total" id="Total" maxlength="50">
        </div>
        <br>
        <br>
        <input type="submit" value="Salvar"></input>
    </form>
    <script>
        function onChangeProduto() {
            var e = document.getElementById("Produto");
            var preco = e.options[e.selectedIndex].attributes[1].value;
            var v = document.getElementById("Valor");
            v.value = preco;
            atualiza_total()
        }
        function atualiza_total() {
            var v = document.getElementById("Valor").value;
            var q = document.getElementById("Quantidade").value;
            if(!v || !q) {
                return;
            }
            var t = document.getElementById("Total");
            t.value = (parseInt(q) * parseInt(v)).toString();
        }
    </script>
</body>
</html>