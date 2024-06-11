<?php
namespace BLL;
include_once ' ';
use DAL;

class Matricula
{
    public function Select(){   
        $dalMatricula = new \DAL\Matricula();   
        return $dalMatricula->Select();
    }


    public function Insert(\MODEL\Matricula $matricula){
        $dalMatricula = new \DAL\Matricula();   
        
        return $dalMatricula->Insert($matricula);
    }


    public function Update(\MODEL\Matricula $matricula){
        $dalMatricula = new \DAL\Matricula();   
 
        return $dalMatricula->Update($matricula);
    }

   public function Delete(int $id){   
        $dalMatricula = new \DAL\Matricula();   
        return $dalMatricula->Delete($id);
    }



}
?>