<?php
    $servidor = "database";
    $user = "root";
    $senha = "tiger";
    $banco = "AdmVendas";
    $TAB = "&nbsp;&nbsp;&nbsp;&nbsp;";
    $conect = mysqli_connect($servidor,$user,$senha);
    $db = mysqli_select_db($conect, $banco);
?>