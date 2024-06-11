<?php

namespace DAL;

include_once 'Conexao.php';
include_once 'C:\xampp\htdocs\projeto-escolar-php\MODEL\Departamento.php';

class Departamento
{
    public function Select()
    {
        $sql = "SELECT * FROM departamento;";
        $con = Conexao::conectar();
        $dados = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($dados as $linha) {
            $dpto = new \MODEL\Departamento();

            $dpto->setId($linha['id']);
            $dpto->setNome($linha['nome']);
            $dpto->setDescricao($linha['descricao']);

            $lstDpto[] = $dpto;
        }

        return $lstDpto;
    }

    public function Insert(\MODEL\Departamento $dpto)
    {
        $sql = "INSERT INTO departamento (nome, descricao) VALUES ('{$dpto->getNome()}','{$dpto->getDescricao()}');";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        return $result;
    }

    public function Update(\MODEL\Departamento $dpto)
    {
        $sql = "UPDATE departamento SET nome = ?, descricao = ? WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);

        $result = $query->execute(array($dpto->getNome(), $dpto->getDescricao(), $dpto->getId()));

        $con = Conexao::desconectar();

        return $result;
    }

    public function Delete(int $id)
    {
        $sql = "DELETE FROM departamento WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();

        return $result;
    }
}

?>
