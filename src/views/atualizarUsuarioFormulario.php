<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Usuario</title>
</head>
<body>
    <form action="../controller/updateUsuario.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <label for="">Nome:
            <input type="text" name="nome" value="<?=$_GET['nome']?>" id="">
        </label>
        <label for="">Email:
            <input type="text" name="email" value="<?=$_GET['email']?>" id="">
        </label>
        <button>Salvar</button>
    </form>

    <a href="../controller/listarUsuarios.php">Listar Usuarios</a>
</body>
</html>