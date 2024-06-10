<?php
    include_once 'conexao.php';
    include_once './MODEL/Aluno.php';

    $sql = "select * from aluno;";
    $con = conexao::conectar();
    $dados = $con->query($sql);

    foreach($dados as $linha){
        $aluno = new MODEL\Aluno();
        
        $aluno->setId($linha['id']);
        $aluno->setNome($linha['nome']);
        $aluno->setNascimento($linha['nascimento']);
        $aluno->setEndereco($linha['endereco']);
        $aluno->setCpf($linha['cpf']);
        $aluno->setEmail($linha['email']);

        $lstAluno[] = $aluno;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Alunos usando Model</title>
</head>
<body>
    <h1>Listar Alunos</h1>
    <table class="striped">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>NASCIMENTO</th>
            <th>ENDEREÇO</th>
            <th>CPF</th>
            <th>EMAIL</th>
        </tr>

        <?php foreach($lstAluno as $aluno) { ?>
            <tr>
                <td><?php echo $aluno->getId(); ?></td>
                <td><?php echo $aluno->getNome();?> </td>
                <td><?php echo $aluno->getNascimento();?> </td>
                <td><?php echo $aluno->getEndereco();?> </td>
                <td><?php echo $aluno->getCpf();?> </td>
                <td><?php echo $aluno->getEmail();?> </td>
            </tr>
       <?php } ?>
    </table>
    
</body>
</html>