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
                <form action="../views/atualizarUsuarioFormulario.php" method="post">
                    <input type="hidden" name="id" value="<?=$user->id()?>">
                    <input type="hidden" name="nome" value="<?=$user->nome()?>">
                    <input type="hidden" name="email" value="<?=$user->email()?>">
                    <button class="deletar">Deletar</button> |
                    <button class="editar">Editar</button>
                </form>
            </td>
        </tr>
        
        <?php endforeach; ?>

    </table>

    <script>

        let btn = document.querySelectorAll('.editar');
        let btnDelete = document.querySelectorAll('.deletar');
        let form = document.querySelectorAll('.form');

        btn.forEach(e=>{
            let editar = e.parentNode;
            e.addEventListener('click', x=>{
                editar.action = 'teste.php';
            });
        }); 


        btnDelete.forEach(e=>{
            let deletar = e.parentNode;
            e.addEventListener('click', x=>{
                deletar.action = 'ok.php';
            });
        }); 
    </script>
</body>
</html>