<?php

require_once 'config.php';


$sql = "SELECT * FROM posts";

$resultado = mysqli_query($conexao, $sql);


print_r($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <td>Titulo</td>
            <td>Categoria</td>
            <td>Data_Publicacao</td>
            <td>Conteudo</td>
        </tr>
        <tr>

        </tr>
    </table>
</body>

</html>