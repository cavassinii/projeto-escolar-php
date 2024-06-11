<?php
namespace BLL;
include_once ' ';
use DAL;

class Aluno
{
    public function Select(){   
        $dalAluno = new \DAL\Aluno();   
        return $dalAluno->Select();
    }


    public function Insert(\MODEL\Aluno $aluno){
        $dalAluno = new \DAL\Aluno();  

        return $dalAluno->Insert($aluno);
    }


    public function Update(\MODEL\Aluno $aluno){
        $dalAluno = new \DAL\Aluno();   

        return $dalAluno->Update($aluno);
    }

   public function Delete(int $id){   
        $dalAluno = new \DAL\Aluno();  

        return $dalAluno->Delete($id);
    }



}
?>