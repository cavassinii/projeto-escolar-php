<?php
      include 'conexao.php';
      $sql = "select * from aluno;";
      $con = Conexao::conectar();
      $lstAluno = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Alunos</title>
</head>
<body>
    <h1>Listar Alunos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>NASCIMENTO</th>
            <th>ENDEREÇO</th>
            <th>CPF</th>
            <th>EMAIL</th>

        </tr>

        <?php foreach($lstAluno as $aluno) {?>
        <tr>
            <td><?php echo $aluno ['id']; ?></td>
            <td><?php echo $aluno ['nome'] ?> </td>
            <td><?php echo $aluno ['nascimento'] ?> </td>
            <td><?php echo $aluno ['endereco'] ?> </td>
            <td><?php echo $aluno ['cpf'] ?> </td>
            <td><?php echo $aluno ['email'] ?> </td>
        </tr>
        <?php }?>
    </table>

</body>
</html>