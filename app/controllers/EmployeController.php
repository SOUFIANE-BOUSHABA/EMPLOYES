<?php



class EmployeController
{
   
    public function getAllEmployees()
    {
        $employe= Employe::getAll();
        return $employe;
    }
}
