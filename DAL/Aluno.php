<?php

namespace DAL;

include_once 'Conexao.php';
include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Aluno.php';

class Aluno
{
    public function Select()
    {
        $sql = "SELECT * FROM aluno;";
        $con = Conexao::conectar();
        $dados = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($dados as $linha) {
            $aluno = new \MODEL\Aluno();

            $aluno->setId($linha['id']);
            $aluno->setNome($linha['nome']);
            $aluno->setNascimento($linha['nascimento']);
            $aluno->setEndereco($linha['endereco']);
            $aluno->setEmail($linha['email']);
            $aluno->setCpf($linha['cpf']);

            $lstAluno[] = $aluno;
        }

        return $lstAluno;
    }

    public function Insert(\MODEL\Aluno $aluno)
    {
        $sql = "INSERT INTO aluno (nome, nascimento, endereco, email, cpf) VALUES ('{$aluno->getNome()}','{$aluno->getNascimento()}','{$aluno->getEndereco()}','{$aluno->getEmail()}','{$aluno->getCpf()}');";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        return $result;
    }

    public function Update(\MODEL\Aluno $aluno)
    {
        $sql = "UPDATE aluno SET nome = ?, nascimento = ?, endereco = ?, email = ?, cpf = ? WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);

        $result = $query->execute(array($aluno->getNome(), $aluno->getNascimento(), $aluno->getEndereco(), $aluno->getEmail(), $aluno->getCpf(), $aluno->getId()));

        $con = Conexao::desconectar();

        return $result;
    }

    public function Delete(int $id)
    {
        $sql = "DELETE FROM aluno WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();

        return $result;
    }
}

?>
