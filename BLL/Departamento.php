<?php
namespace BLL;
include_once ' ';
use DAL;

class Departamento
{
    public function Select(){   
        $dalDpto = new \DAL\Departamento();   
        return $dalDpto->Select();
    }


    public function Insert(\MODEL\Departamento $departamento){
        $dalDpto = new \DAL\Departamento();   
        
        return $dalDpto->Insert($departamento);
    }


    public function Update(\MODEL\Departamento $departamento){
        $dalDpto = new \DAL\Departamento();   
 
        return $dalDpto->Update($departamento);
    }

   public function Delete(int $id){   
        $dalDpto = new \DAL\Departamento();   
        return $dalDepartamento->Delete($id);
    }



}
?>