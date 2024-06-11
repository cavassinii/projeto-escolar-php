<?php

namespace DAL;

include_once 'Conexao.php';
include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Professor.php';

class Professor
{
    public function Select()
    {
        $sql = "SELECT * FROM professor;";
        $con = Conexao::conectar();
        $dados = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($dados as $linha) {
            $professor = new \MODEL\Professor();

            $professor->setId($linha['id']);
            $professor->setNome($linha['nome']);
            $professor->setEmail($linha['email']);

            $lstProfessor[] = $professor;
        }

        return $lstProfessor;
    }

    public function Insert(\MODEL\Professor $professor)
    {
        $sql = "INSERT INTO professor (nome, email) VALUES ('{$professor->getNome()}','{$professor->getEmail()}');";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        return $result;
    }

    public function Update(\MODEL\Professor $professor)
    {
        $sql = "UPDATE professor SET nome = ?, email = ? WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);

        $result = $query->execute(array($professor->getNome(), $professor->getEmail(), $professor->getId()));

        $con = Conexao::desconectar();

        return $result;
    }

    public function Delete(int $id)
    {
        $sql = "DELETE FROM professor WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();

        return $result;
    }
}

?>
