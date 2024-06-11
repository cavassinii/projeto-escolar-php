<?php
namespace BLL;
include_once ' ';
use DAL;

class Atividade
{
    public function Select(){   
        $dalAtividade = new \DAL\Atividade();   
        return $dalAtividade->Select();
    }


    public function Insert(\MODEL\Atividade $atividade){
        $dalAtividade = new \DAL\Atividade();   
 
        return $dalAtividade->Insert($atividade);
    }


    public function Update(\MODEL\Atividade $atividade){
        $dalAtividade = new \DAL\Atividade();   
 
        return $dalAtividade->Update($atividade);
    }

   public function Delete(int $id){   
        $dalAtividade = new \DAL\Atividade();   
        return $dalAtividade->Delete($id);
    }


}
?>