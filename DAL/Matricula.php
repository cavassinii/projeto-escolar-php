<?php

namespace DAL;

include_once 'Conexao.php';
include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Matricula.php';

class Matricula
{
    public function Select()
    {
        $sql = "SELECT * FROM matricula;";
        $con = Conexao::conectar();
        $dados = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($dados as $linha) {
            $matricula = new \MODEL\Matricula();

            $matricula->setId($linha['id']);
            $matricula->setAluno($linha['aluno']);
            $matricula->setAtividade($linha['atividade']);
            $matricula->setDataMatricula($linha['datamatricula']);

            $lstMatricula[] = $matricula;
        }

        return $lstMatricula;
    }

    public function Insert(\MODEL\Matricula $matricula)
    {
        $sql = "INSERT INTO matricula (aluno, atividade, datamatricula) VALUES ('{$matricula->getAluno()}','{$matricula->getAtividade()}','{$matricula->getDataMatricula()}');";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        return $result;
    }

    public function Update(\MODEL\Matricula $matricula)
    {
        $sql = "UPDATE matricula SET aluno = ?, atividade = ?, datamatricula = ? WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);

        $result = $query->execute(array($matricula->getAluno(), $matricula->getAtividade(), $matricula->getDataMatricula(), $matricula->getId()));

        $con = Conexao::desconectar();

        return $result;
    }

    public function Delete(int $id)
    {
        $sql = "DELETE FROM matricula WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();

        return $result;
    }
}

?>
