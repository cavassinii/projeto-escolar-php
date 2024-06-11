<?php
namespace MODEL;

class Matricula  
{
    private ?int $id;
    private ?int $aluno;
    private ?int $atividade;
    private ?\DateTimeInterface $datamatricula;  

    public function __construct()
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getAluno()
    {
        return $this->aluno;
    }

    public function setAluno(int $aluno)
    {
        $this->aluno = $aluno;
    }

    public function getAtividade()
    {
        return $this->atividade;
    }

    public function setAtividade(int $atividade)
    {
        $this->atividade = $atividade;
    }

    public function getDatamatricula()
    {
        return $this->datamatricula;
    }

    public function setDatamatricula(\DateTimeInterface $datamatricula)  
    {
        $this->datamatricula = $datamatricula;
    }

}

?>
