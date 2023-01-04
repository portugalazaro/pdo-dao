<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>

</head>
<body>
    <table border="1px solid black">
        <th>Id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>

        <?php foreach($usuarios as $user): ?>

        <tr>
            <td><?=$user->id()?></td>
            <td><?=$user->nome()?></td>
            <td><?=$user->email()?></td>
            <td>
                <a href="../views/atualizarUsuarioFormulario.php?id=<?=$user->id()?>&nome=<?=$user->nome()?>&email=<?=$user->email()?>">Editar</a>
                <a href="../controller/deleteUsuario.php?id=<?=$user->id()?>">Deletar</a>
            </td>
        </tr>
        
        <?php endforeach; ?>

    </table>
    <a href="../../index.php">adicionar</a>
    <a href="../controller/listarUsuarios.php">Listar Usuarios</a>
</body>
</html>