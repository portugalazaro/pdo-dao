<?php
$caminho = $_SERVER;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Usuario</title>
</head>
<body>
    <form action="./src/controller/salvar.php" method="post">
        <label for="">Nome:
            <input type="text" name="nome" id="">
        </label>
        <label for="">Email:
            <input type="text" name="email" id="">
        </label>
        <button>Salvar</button>
    </form>

    <a href="./src/controller/listarUsuarios.php">Listar Usuarios</a>


</body>
</html>
